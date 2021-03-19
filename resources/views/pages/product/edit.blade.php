@extends('admin')

@section('side-navigation-content-header')
    @component('components.side-navigation-content')
    @slot('title') Бараа засах @endslot
    @slot('breadcrumb') Бараа засах / {{ $product->product_name }} @endslot
    @section('side-navigation-content')
        <div class="row">
            <div class="col-xl-5 col-md-8">
                <form method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">           
                    @csrf
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        Оролтын утга алдаатай байна <br><br>
                        <ul>                        
                        @foreach ($errors->all() as $error)
                            @if (!strpos($error, 'images'))
                                <li>{{ $error }}</li>
                            @endif
                        @endforeach
                        @if ($errors->has('images.0'))
                        <li>Тайлбар зурагнууд зураг биш байна</li>
                        @endif
                        </ul>
                    </div>
                    @endif
                    <div class="form-group">
                        <label class="mb-2" for="name">Барааны нэр</label>
                        <input class="form-control py-4 @error('name') is-invalid @enderror" id="name" type="text" 
                        name="name" value="{{ old('name', $product->product_name) }}" required autocomplete="name" autofocus/>

                        @error('error')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="brand">Барааны брэнд</label>
                        <select class="form-control" name="brand" id="brand">
                            <option disabled selected>Барааны төрөл сонгох</option>
                            @foreach ($product_brands as $item)
                                @if (old('brand') == $item->id . '. ' . $item->brand_name || $item->id == $product->brand->id)
                                    <option selected>{{$item->id . '. ' . $item->brand_name}}</option>
                                @else
                                    <option>{{$item->id . '. ' . $item->brand_name}}</option>
                                @endif
                            @endforeach
                        </select>

                        @error('brand')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="type">Барааны төрөл</label>
                        <select class="form-control" name="type" id="type">
                            <option disabled selected>Барааны төрөл сонгох</option>
                            @foreach ($product_types as $item)
                                @if (old('type') == $item->id . '. ' . $item->type_name || $item->id == $product->type->id)
                                    <option selected>{{$item->id . '. ' . $item->type_name}}</option>
                                @else
                                    <option>{{$item->id . '. ' . $item->type_name}}</option>
                                @endif
                            @endforeach
                        </select>

                        @error('brand')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="image">
                            Нүүр зураг
                            @if ($product->images)
                                <strong>(сонгогдсон байна)</strong>
                            @endif
                        </label>
                        <input class="form-control py-1 @error('image') is-invalid @enderror" id="image" type="file" 
                        value="{{ $product->image }}"  name="image" />

                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="images">
                            Зурагнууд
                            @if ($product->images)
                                <strong>(сонгогдсон байна)</strong>
                            @endif
                        </label>
                        <input class="form-control py-1 @error('images') is-invalid @enderror" id="images" type="file" 
                        multiple name="images[]" />
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="description">Тайлбар</label>

                        <textarea class="form-control py-1" name="description" id="description" cols="30" rows="5"
                        required autocomplete="description">{{ old('description', $product->description) }}</textarea>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="price">Үнэ ₮</label>
                        <input class="form-control py-1 @error('price') is-invalid @enderror" id="price" type="number" 
                        value="{{ old('price', $product->price) }}" multiple name="price" required autocomplete="price" />

                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Бараа засах
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
    @endcomponent
@endsection