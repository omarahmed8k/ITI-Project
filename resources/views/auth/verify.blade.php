@extends('layouts.navbar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12 mb-4 text-center">
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }},
                        </div>
                    </div>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <div class="form-group row justify-content-center">
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection