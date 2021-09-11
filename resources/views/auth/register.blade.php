@extends('layouts.navbar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('/register') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-12 mb-4 text-center">
                                <img class="img-fluid" src="{{asset('img/instagram.png')}}" alt="">
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-10">
                                <input placeholder="Full Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-10">
                                <input placeholder="Username" id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="name" value="{{ old('username') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-10">
                                <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-10">
                                <input placeholder="Pasword" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-10">
                                <input placeholder="Confirem Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-body">
                    <div class="form-group row justify-content-center mb-0">
                        <div class="col-md-10 text-center">
                            <p class="m-0">Have an account? <a class="btn btn-link p-0 font-weight-bold" href="{{url('/login') }}">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection