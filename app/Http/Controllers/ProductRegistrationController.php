<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\ProductBrand;
use App\ProductType;
use App\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use DataTables;
use App\Color;
use App\Size;
use App\ProductRegistration;

class ProductRegistrationController extends Controller
{
    public function __construct()
    {
        // auth:guard
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = ProductRegistration::all();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row) {
                        return view('pages.product-registration.action')->with('row', $row);
                    })
                    ->editColumn('size_id', function($row) {
                        return $row->size->size;
                    })
                    ->editColumn('color_id', function($row) {
                        return $row->color->color;
                    })
                    ->editColumn('employee_id', function($row) {
                        return $row->employee->email;
                    })
                    ->editColumn('product_id', function($row) {
                        return $row->product->product_name;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('pages.product-registration.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $product = Product::findOrFail($id);
        $colors = Color::all();
        $sizes = Size::all();

        return view('pages.product-registration.create')
                    ->with(['product' => $product,
                            'colors' => $colors,
                            'sizes' => $sizes,
                            ]);
    }

    public function fetch(Request $request) 
    {
        $select = $request->get('select');
        $value = explode('.', $request->get('value'))[0];
        $dependent = $request->get('dependent');
        $product_id = $request->get('product_id');
        $data = Size::all();

        $registered_sizes = DB::table('product_registrations')
                        ->where('product_id', '=', $product_id)
                        ->where('color_id', '=', $value)
                        ->pluck('size_id')->toArray();

        $output = '<option selected disabled value="">Барааны хэмжээ сонгох</option>';

        foreach($data as $row) 
        {
            if(in_array($row['id'], $registered_sizes))
                $output .= '<option disabled value="' . $row['id'] . '. ' . $row->$dependent .'">' . $row['id'] . '. ' . $row->$dependent . ' (бүртгэгдсэн)</option>';
            else
                $output .= '<option value="' . $row['id'] . '. ' . $row->$dependent .'">' . $row['id'] . '. ' . $row->$dependent . '</option>';
        }

        echo $output;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'size' => 'required',
            'color' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'quantity' => 'required|numeric'
        ], [
            'size.required' => 'Барааны хэмжээ сонгоогүй байна',
            'color.required' => 'Барааны өнгө сонгоогүй байна',
            'image.image' => 'Барааны зураг зураг биш байна',
            'image.mimes' => 'Барааны зурагны төрөл jepg, png, jpg, svg байх биш байна',
            'image.max' => 'Барааны зурагны хэмжээ 2048KB - ээс их байна'
        ]);

        if($validator->fails())
        {
            return redirect()->back()
                             ->withInput($request->only('name', 'quantity', 'size', 'color'))
                             ->withErrors($validator->errors()->all());
        }

        $product_registration = new ProductRegistration;

        if($request->image) 
        {
            // upload single image
            $image_name = $request->image->getClientOriginalName();
            $request->image->move(public_path().'/images/product_registration/', $image_name);
            $product_registration->color_image =  '/images/product_registration/' . $image_name;
        }

        $product_registration->product_id = $request->product_id;
        $product_registration->employee_id = Auth::user()->id; 
        $product_registration->size_id = explode('.', $request->size)[0];
        $product_registration->color_id = explode('.', $request->color)[0];
        $product_registration->quantity = $request->quantity;
 
        if($product_registration->save())
        {
            return redirect()->route('product.registration')->with('success', 'Бараа бүртгэл амжилттай хийгдлээ');
        }
        else
        {
            return response()->json(['error' => 'error occured']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product_registration = ProductRegistration::findOrFail($id);

        return view('pages.product-registration.show')
                    ->with(['product_registration' => $product_registration,
                            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product_registration = ProductRegistration::findOrFail($id);
        $colors = Color::all();
        $sizes = Size::all();

        return view('pages.product-registration.edit')
                    ->with(['product_registration' => $product_registration,
                            'colors' => $colors,
                            'sizes' => $sizes,
                            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'size' => 'required',
            'color' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'quantity' => 'required|numeric'
        ], [
            'size.required' => 'Барааны хэмжээ сонгоогүй байна',
            'color.required' => 'Барааны өнгө сонгоогүй байна',
            'image.image' => 'Барааны зураг зураг биш байна',
            'image.mimes' => 'Барааны зурагны төрөл jepg, png, jpg, svg байх биш байна',
            'image.max' => 'Барааны зурагны хэмжээ 2048KB - ээс их байна'
        ]);

        if($validator->fails())
        {
            return redirect()->back()
                             ->withInput($request->only('name', 'quantity', 'size', 'color'))
                             ->withErrors($validator->errors()->all());
        }

        $product_registration = ProductRegistration::findOrFail($id);

        if($request->image) 
        {
            // upload single image
            $image_name = $request->image->getClientOriginalName();
            $request->image->move(public_path().'/images/product_registration/', $image_name);
            $product_registration->image =  '/images/product_registration/' . $image_name;
        }

        $product_registration->size_id = explode('.', $request->size)[0];
        $product_registration->color_id = explode('.', $request->color)[0];
        $product_registration->quantity = $request->quantity;

        if($product_registration->save())
        {
            return redirect()->route('product.registration')->with('success', 'Бараа бүртгэл амжилттай засварлагдлаа');
        }
        else
        {
            return response()->json(['error' => 'error occured']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if(ProductRegistration::findOrFail($request->product_registration_id)->delete())
            return redirect()->route('product.registration')->with('success', 'Бараа бүртгэл амжилттай устлаа');
        else
            return redirect()->route('product.registration')->with('warning', 'Бараа бүртгэл устсангүй');
    }
}
