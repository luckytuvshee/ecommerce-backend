@extends('admin')

@section('side-navigation-content-header')
    @component('components.side-navigation-content')
    @slot('title') Бараа бүртгэл үүсгэх @endslot
    @slot('breadcrumb') Бараа бүртгэл үүсгэх / {{ $product->product_name }} @endslot
    @section('side-navigation-content')
        <div class="row">
            <div class="col-xl-5 col-md-8">
                <form id="createForm" method="POST" action="{{ route('product.registration.store') }}" enctype="multipart/form-data">  
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
                    <input id="product_id" type="hidden" value="{{$product->id}}" name="product_id">
                    <div class="form-group">
                        <label class="mb-2" for="name">Барааны нэр</label>
                        <input class="form-control py-4" id="name" type="text" 
                        name="name" value="{{ old('name', $product->product_name) }}" required autocomplete="name"/>
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="color">Барааны өнгө</label>
                        <select class="form-control product-color" name="color" id="color" data-dependent="size">
                            <option disabled selected>Барааны өнгө сонгох</option>
                            @foreach ($colors as $item)
                                @if (old('color') == $item->id . '. ' . $item->color)
                                    <option selected>{{$item->id . '. ' . $item->color}}</option>
                                @else
                                    <option>{{$item->id . '. ' . $item->color}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="size">Size</label>
                        <select class="form-control" name="size" id="size">
                            <option disabled selected>Select size</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="image">Зураг</label>
                        <input class="form-control py-1" id="image" type="file" 
                        name="image" required/>
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="price">Тоо ширхэг</label>
                        <input class="form-control py-1" id="quantity" type="number" 
                        value="{{ old('quantity') }}" multiple name="quantity" required autocomplete="quantity" />
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Бараа бүртгэх
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
    @endcomponent
@endsection