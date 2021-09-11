@extends('layouts.navbar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('/login') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-12 mb-4 text-center">
                                <img class="img-fluid" src="{{asset('img/instagram.png')}}" alt="">
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-10">
                                <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-10">
                                <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center mb-0">
                            <div class="col-md-10 mb-3 text-center">
                                <button type="submit" class="btn btn-block btn-primary">
                                    Log In
                                </button>
                            </div>
                            <div class="col-md-10 text-center">
                                <a class="btn btn-link" href="{{url('/password/reset') }}">
                                    Forget Password ?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-body">
                    <div class="form-group row justify-content-center mb-0">
                        <div class="col-md-10 text-center">
                            <p class="m-0">Don't have an account? <a class="btn btn-link p-0 font-weight-bold" href="{{url('/register') }}">Sign up</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection