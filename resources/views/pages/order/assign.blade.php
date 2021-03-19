@extends('admin')

@section('side-navigation-content-header')
    @component('components.side-navigation-content')
    @slot('title') Захиалга хуваарилах @endslot
    @slot('breadcrumb') Захиалга хуваарилах / №{{ $order->id }} @endslot
    @section('side-navigation-content')
        <div class="row">
            <div class="col-xl-5 col-md-8">
                @foreach ($basketItems as $item)
                    <h3>{{ $item->product_registration->product->product_name }}</h3>

                    <div class="form-group">
                        <label class="mb-2" for="name">Хэмжээ</label>
                        <input disabled class="form-control py-4" value="{{ $item->product_registration->size->size }}"/>
                    </div>

                    <div class="form-group">
                        <label class="mb-2" for="name">Өнгө</label>
                        <input disabled class="form-control py-4" value="{{ $item->product_registration->color->color }}"/>
                    </div>

                    <div class="form-group">
                        <label class="mb-2" for="name">Тоо ширхэг</label>
                        <input disabled class="form-control py-4" value="{{ $item->quantity }}"/>
                    </div>

                    <div class="form-group">
                        <label class="mb-2" for="name">Зураг</label>
                        <img class="d-block w-100 img-thumbnail" src="{{ url($item->product_registration->color_image) }}" alt="product_registration_image">
                    </div>

                    <hr />
                @endforeach

                <form method="POST" action="{{ route('order.assign_order', ['id' => $order->id]) }}" enctype="multipart/form-data">
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
                        <label class="mb-1" for="employee">Хуваарилах ажилтан сонгох</label>
                        <select class="form-control" name="employee" id="employee">
                            <option disabled selected>ажилтан сонгох</option>
                            @foreach ($employees as $item)
                                <option>{{$item->id . '. ' . $item->last_name . ' ' . $item->first_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Ажилтныг хуваарилах
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
    @endcomponent
@endsection