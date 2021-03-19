@extends('layouts.app')

@section('content')
<div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Нууц үг сэргээх</h3></div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('admin.password.email') }}">           
                                        @csrf
                                        <div class="form-group">
                                            <label class="small mb-1" for="email">Имэйл</label>
                                            <input class="form-control py-4 @error('email') is-invalid @enderror" id="email" type="email" 
                                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary">
                                                Нууц үг сэргээх линк илгээх
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                {{-- Register --}}
                                {{-- <div class="card-footer text-center">
                                    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            @include('layouts.footer')
        </div>
    </div>
@endsection
