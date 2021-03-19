@extends('admin')

@section('side-navigation-content-header')
    @component('components.side-navigation-content')
    @slot('title') Бараа бүртгэл засах @endslot
    @slot('breadcrumb') Бараа бүртгэл засах / {{ $product_registration->product->product_name }} @endslot
    @section('side-navigation-content')
        <div class="row">
            <div class="col-xl-5 col-md-8">
                <form method="POST" action="{{ route('product.registration.update', $product_registration->id) }}" enctype="multipart/form-data">           
                    @csrf
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        Оролтын утга алдаатай байна <br><br>
                        <ul>                        
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="form-group">
                        <label class="mb-2" for="name">Барааны нэр</label>
                        <input class="form-control py-4" id="name" type="text" disabled
                        name="name" value="{{ $product_registration->product->product_name }}"/>
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="brand">Барааны хэмжээ</label>
                        <select class="form-control" name="size" id="size">
                            <option disabled selected>Барааны хэмжээ сонгох</option>
                            @foreach ($sizes as $item)
                                @if (old('size') == $item->id . '. ' . $item->brand_name || $item->id == $product_registration->size->id)
                                    <option selected>{{$item->id . '. ' . $item->size}}</option>
                                @else
                                    <option>{{$item->id . '. ' . $item->size}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="type">Барааны өнгө</label>
                        <select class="form-control" name="color" id="color">
                            <option disabled selected>Барааны өнгө сонгох</option>
                            @foreach ($colors as $item)
                                @if (old('color') == $item->id . '. ' . $item->color || $item->id == $product_registration->size->id)
                                    <option selected>{{$item->id . '. ' . $item->color}}</option>
                                @else
                                    <option>{{$item->id . '. ' . $item->color}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="image">
                            Зураг
                            @if ($product_registration->color_image)
                                <strong>(сонгогдсон байна)</strong>
                            @endif
                        </label>
                        <input class="form-control py-1" id="image" type="file" 
                        name="image"/>
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="price">Тоо ширхэг</label>
                        <input class="form-control py-1" id="quantity" type="number" 
                        value="{{ old('quantity', $product_registration->quantity) }}" multiple name="quantity" required autocomplete="quantity" />
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="text">Бүртгэсэн ажилтан</label>
                        <input class="form-control py-1" type="text" disabled
                        value="{{ $product_registration->employee->email }}" multiple name="quantity" />
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Бараа бүртгэл засах
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
    @endcomponent
@endsection