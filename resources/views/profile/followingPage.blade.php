@extends('layouts.navbar')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-3"></div>

        <div class="col-md-6">
            <div class="followersCard">
                <ul>
                    <li>
                        <img src="{{asset('img/user.png')}}" />
                        <a href="{{url('/profile')}}" class="followersLink">
                            <span class="name">Omar Abdelrahman</span>
                            <span class="id">omarahmed8k</span>
                        </a>
                        <a href="{{url('/profile')}}" class="followersBtn unFollow" type="button">Unfollow</a>
                    </li>
                    <li>
                        <img src="{{asset('img/user.png')}}" />
                        <a href="{{url('/profile')}}" class="followersLink">
                            <span class="name">Omar Abdelrahman</span>
                            <span class="id">omarahmed8k</span>
                        </a>
                        <a href="{{url('/profile')}}" class="followersBtn unFollow" type="button">Unfollow</a>
                    </li>
                    <li>
                        <img src="{{asset('img/user.png')}}" />
                        <a href="{{url('/profile')}}" class="followersLink">
                            <span class="name">Omar Abdelrahman</span>
                            <span class="id">omarahmed8k</span>
                        </a>
                        <a href="{{url('/profile')}}" class="followersBtn unFollow" type="button">Unfollow</a>
                    </li>
                    <li>
                        <img src="{{asset('img/user.png')}}" />
                        <a href="{{url('/profile')}}" class="followersLink">
                            <span class="name">Omar Abdelrahman</span>
                            <span class="id">omarahmed8k</span>
                        </a>
                        <a href="{{url('/profile')}}" class="followersBtn unFollow" type="button">Unfollow</a>
                    </li>
                    <li>
                        <img src="{{asset('img/user.png')}}" />
                        <a href="{{url('/profile')}}" class="followersLink">
                            <span class="name">Omar Abdelrahman</span>
                            <span class="id">omarahmed8k</span>
                        </a>
                        <a href="{{url('/profile')}}" class="followersBtn unFollow" type="button">Unfollow</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-3"></div>

    </div>
</div>
@endsection