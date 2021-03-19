@extends('admin')

@section('side-navigation-content-header')
    @component('components.side-navigation-content')
    @slot('title') Бараа бүртгэл @endslot
    @slot('breadcrumb') Бараа бүртгэл @endslot
    @section('side-navigation-content')
        <div class="row">
            <div class="col-xl-4 col-md-6">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col mt-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Бараа бүртгэл
                    </div>

                    <!-- Delete Modal -->
                    <div class="modal fade" id="product_registration_delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Бараа бүртгэл устгах</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="{{ route('product.registration.delete') }}">
                                    @csrf
                                    @method('delete')
                                    <div class="modal-body">
                                        Та <strong id="product_registration_name"></strong> кодтой бараа бүртгэлийг устгахдаа итгэлтэй байна уу?
                                        <input type="hidden" name="product_registration_id" id="product_registration_id">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Үгүй</button>
                                        <button type="submit" class="btn btn-danger">Тийм</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="product-registration-table" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Бараа бүртгэлийн код</th>
                                        <th>Барааны нэр</th>
                                        <th>Өнгө</th>
                                        <th>Хэмжээ</th>
                                        <th>Тоо ширхэг</th>
                                        <th>Өнгөний зураг</th>
                                        <th>Бүртгэсэн ажилчин</th>
                                        <th>Үйлдэл</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @endcomponent
@endsection