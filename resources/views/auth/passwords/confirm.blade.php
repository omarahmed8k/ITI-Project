@extends('layouts.navbar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12 mb-4 text-center">
                            {{ __('Please confirm your password before continuing.') }}
                        </div>
                    </div>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
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

                        <div class="form-group row justify-content-center">
                            <div class="col-md-10 text-center">
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection