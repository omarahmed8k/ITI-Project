@extends('layouts.navbar')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-3"></div>

            <div class="col-md-6">
                <div class="followersCard">
                    <ul>
                        @foreach($users as $user)
                            <li>
                                <img src="{{asset('img/user.png')}}" />
                                <a href="{{url('/profile')}}" class="followersLink">
                                    <span class="name">{{ $user->name }}</span>
                                    <span class="id">{{ $user->username }}</span>
                                </a>
                                <a href="{{url('/profile')}}" class="followersBtn" type="button">Follow Back</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-md-3"></div>

        </div>
    </div>
@endsection
