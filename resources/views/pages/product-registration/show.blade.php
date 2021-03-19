@extends('admin')

@section('side-navigation-content-header')
    @component('components.side-navigation-content')
    @slot('title') Бараа бүртгэл @endslot
    @slot('breadcrumb') Бараа бүртгэл / {{ $product_registration->product->product_name }} @endslot
    @section('side-navigation-content')
        <a class="btn btn-primary mb-3" href="{{ route('product.registration.edit', ['id' => $product_registration->id]) }}">
            <i class="fas fa-edit mr-1"></i>
            Бараа бүртгэл засах
        </a>
        <div class="row">
            <div class="col-xl-5 col-md-8">
                <div class="form-group">
                    <label class="mb-2" for="name">Барааны нэр</label>
                    <input disabled class="form-control py-4" value="{{ $product_registration->product->product_name }}"/>
                </div>
                <div class="form-group">
                    <label class="mb-2" for="name">Хэмжээ</label>
                    <input disabled class="form-control py-4" value="{{ $product_registration->size->size }}"/>
                </div>
                <div class="form-group">
                    <label class="mb-2" for="name">Өнгө</label>
                    <input disabled class="form-control py-4" value="{{ $product_registration->color->color }}"/>
                </div>
                <div class="form-group">
                    <label class="mb-2" for="name">Тоо ширхэг</label>
                    <input disabled class="form-control py-4" value="{{ $product_registration->quantity }}"/>
                </div>
                <div class="form-group">
                    <label class="mb-2" for="name">Бүртгэсэн ажилтан</label>
                    <input disabled class="form-control py-4" value="{{ $product_registration->employee->email }}"/>
                </div>
                
            </div>
            <div class="col-xl-5 col-md-8">
                <div class="form-group">
                    <label class="mb-2" for="name">Барааны зураг</label>
                    <img class="img-thumbnail" src="{{ url($product_registration->color_image) }}" alt="product-image">
                </div>
            </div>
        </div>
    @endsection
    @endcomponent
@endsection