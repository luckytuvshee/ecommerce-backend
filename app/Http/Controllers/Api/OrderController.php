<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\BasketItem;
use App\Basket;
use App\Payment;
use App\ProductRegistration;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $orders = Order::select([
            'orders.id as order_id',
            'order_status',
            // 'city_name',
            // 'district_name',
            // 'subdistrict_name',
            'basket_id',
            'total',
            // 'details',
            'orders.created_at',
        ])
        ->where('orders.user_id', '=', $id)
        ->join('order_statuses', 'order_statuses.id', '=', 'orders.order_status_id')
        ->join('baskets', 'baskets.id', '=', 'basket_id')
        // ->join('addresses', 'addresses.id', '=', 'address_id')
        // ->join('cities', 'cities.id', '=', 'addresses.city_id')
        // ->join('districts', 'districts.id', '=', 'addresses.district_id')
        // ->join('subdistricts', 'subdistricts.id', '=', 'addresses.subdistrict_id')
        ->get();

        $orders->transform(function ($item, $key) {
            $basket_items = BasketItem::select([
                'product_registration_id',
                'basket_items.quantity',
                'product_name',
                'products.id as product_id',
                'price',
                'color',
                'color_image',
                'size'
            ])
            ->where('basket_id', '=', $item->basket_id)
            ->join('product_registrations', 'product_registrations.id', '=', 'product_registration_id')
            ->join('products', 'products.id', '=', 'product_registrations.product_id')
            ->join('colors', 'colors.id', '=', 'product_registrations.color_id')
            ->join('sizes', 'sizes.id', '=', 'product_registrations.size_id')
            ->get();

            $item->setAttribute('product_registrations', $basket_items);

            return $item;
        });

        return $orders;
    }

    public function instant_store(Request $request)
    {
        $product_registration = ProductRegistration::findOrFail($request->product_registration_id);
        $price = $product_registration->product->price;

        $newBasket = new Basket;
        $newBasket->user_id = $request->user_id;
        $newBasket->total = $request->quantity * $price;
        $newBasket->save();

        // update warehouse quantity
        $product_registration->quantity = $product_registration->quantity - $request->quantity;
        $product_registration->save();

        $newBasketItem = new BasketItem;
        $newBasketItem->basket_id = $newBasket->id;
        $newBasketItem->product_registration_id = $request->product_registration_id;
        $newBasketItem->quantity = $request->quantity;
        $newBasketItem->save();

        $newOrder = new Order;
        $newOrder->order_status_id = 1;
        $newOrder->user_id = $request->user_id;
        $newOrder->basket_id = $newBasket->id;
        $newOrder->address_id = $request->address_id;
        $newOrder->save();

        $order = Order::select([
            'orders.id as order_id',
            'order_status',
            'city_name',
            'district_name',
            'subdistrict_name',
            'details',
            'orders.created_at',
        ])
        ->where('orders.id', '=', $newOrder->id)
        ->join('order_statuses', 'order_statuses.id', '=', 'orders.order_status_id')
        ->join('addresses', 'addresses.id', '=', 'address_id')
        ->join('cities', 'cities.id', '=', 'addresses.city_id')
        ->join('districts', 'districts.id', '=', 'addresses.district_id')
        ->join('subdistricts', 'subdistricts.id', '=', 'addresses.subdistrict_id')
        ->first();

        $basket_items = BasketItem::select([
                                    'product_registration_id',
                                    'basket_items.quantity',
                                    'product_name',
                                    'products.id as product_id',
                                    'price',
                                    'color',
                                    'color_image',
                                    'size'
                                ])
                                ->where('basket_id', '=', $newOrder->basket_id)
                                ->join('product_registrations', 'product_registrations.id', '=', 'product_registration_id')
                                ->join('products', 'products.id', '=', 'product_registrations.product_id')
                                ->join('colors', 'colors.id', '=', 'product_registrations.color_id')
                                ->join('sizes', 'sizes.id', '=', 'product_registrations.size_id')
                                ->get();

        $order->setAttribute('product_registrations', $basket_items);

        return $order;
    }

    public function guest_store(Request $request)
    {
        $newBasket = new Basket;
        $newBasket->user_id = 1;
        $newBasket->total = $request->amount;
        $newBasket->save();

        foreach ($request->cartItems as $item) 
        {
            $newBasketItem = new BasketItem;
            $newBasketItem->basket_id = $newBasket->id;

            // update warehouse quantity
            $product_registration = ProductRegistration::findOrFail($item['product_registration_id']);
            $product_registration->quantity = $product_registration->quantity - $item['quantity'];
            $product_registration->save();

            $newBasketItem->product_registration_id = $product_registration->id;
            $newBasketItem->quantity = $item['quantity'];
            $newBasketItem->save();
        }

        $newOrder = new Order;
        $newOrder->order_status_id = 1;
        $newOrder->user_id = 1;
        $newOrder->basket_id = $newBasket->id;
        $newOrder->address_id = $request->address_id;
        $newOrder->save();


        $order = Order::select([
            'orders.id as order_id',
            'order_status',
            'city_name',
            'district_name',
            'subdistrict_name',
            'details',
            'orders.created_at',
        ])
        ->where('orders.id', '=', $newOrder->id)
        ->join('order_statuses', 'order_statuses.id', '=', 'orders.order_status_id')
        ->join('addresses', 'addresses.id', '=', 'address_id')
        ->join('cities', 'cities.id', '=', 'addresses.city_id')
        ->join('districts', 'districts.id', '=', 'addresses.district_id')
        ->join('subdistricts', 'subdistricts.id', '=', 'addresses.subdistrict_id')
        ->first();

        $basket_items = BasketItem::select([
                                    'product_registration_id',
                                    'basket_items.quantity',
                                    'product_name',
                                    'products.id as product_id',
                                    'price',
                                    'color',
                                    'color_image',
                                    'size'
                                ])
                                ->where('basket_id', '=', $newOrder->basket_id)
                                ->join('product_registrations', 'product_registrations.id', '=', 'product_registration_id')
                                ->join('products', 'products.id', '=', 'product_registrations.product_id')
                                ->join('colors', 'colors.id', '=', 'product_registrations.color_id')
                                ->join('sizes', 'sizes.id', '=', 'product_registrations.size_id')
                                ->get();

        $order->setAttribute('product_registrations', $basket_items);

        return $order;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newOrder = new Order;
        $newOrder->order_status_id = 1;
        $newOrder->user_id = $request->user_id;
        $newOrder->basket_id = $request->basket_id;
        $newOrder->address_id = $request->address_id;
        $newOrder->save();

        $basket = Basket::findOrFail($request->basket_id);
        $basket->total = $request->amount;
        $basket->save();

        
        // update warehouse quantity
        $basketItems = BasketItem::where('basket_id', '=', $request->basket_id)->get();
        foreach ($basketItems as $item) {
            $product_registration = ProductRegistration::findOrFail($item->product_registration_id);
            $product_registration->quantity = $product_registration->quantity - $item->quantity;
            $product_registration->save();
        }

        $order = Order::select([
            'orders.id as order_id',
            'order_status',
            'city_name',
            'district_name',
            'subdistrict_name',
            'details',
            'orders.created_at',
        ])
        ->where('orders.id', '=', $newOrder->id)
        ->join('order_statuses', 'order_statuses.id', '=', 'orders.order_status_id')
        ->join('addresses', 'addresses.id', '=', 'address_id')
        ->join('cities', 'cities.id', '=', 'addresses.city_id')
        ->join('districts', 'districts.id', '=', 'addresses.district_id')
        ->join('subdistricts', 'subdistricts.id', '=', 'addresses.subdistrict_id')
        ->first();

        $basket_items = BasketItem::select([
                                    'product_registration_id',
                                    'basket_items.quantity',
                                    'product_name',
                                    'products.id as product_id',
                                    'price',
                                    'color',
                                    'color_image',
                                    'size'
                                ])
                                ->where('basket_id', '=', $newOrder->basket_id)
                                ->join('product_registrations', 'product_registrations.id', '=', 'product_registration_id')
                                ->join('products', 'products.id', '=', 'product_registrations.product_id')
                                ->join('colors', 'colors.id', '=', 'product_registrations.color_id')
                                ->join('sizes', 'sizes.id', '=', 'product_registrations.size_id')
                                ->get();

        $order->setAttribute('product_registrations', $basket_items);

        return $order;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
