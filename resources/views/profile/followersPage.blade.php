@extends('layouts.navbar')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-3"></div>

            <div class="col-md-6">
                <div class="followersCard">
                    <ul>
                        @foreach($followers as $follower)
                            <li>
                                <img src="{{asset('img/user.png')}}"/>
                                <a href="{{url('/profile')}}" class="followersLink">
                                    <span class="name">{{ $follower->name }}</span>
                                    <span class="id">{{ $follower->username }}</span>
                                </a>
                                @if($follower->relation)
                                    <form action="{{ route('followers.unfollow', $follower->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input class="followersBtn unFollow" type="submit" value="Unfollow">
                                    </form>
                                @else
                                    <form action="{{ route('followers.follow', $follower->id) }}" method="POST">
                                        @csrf
                                        <input class="followersBtn" type="submit" value="Follow Back">
                                    </form>

                                @endif

                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-md-3"></div>

        </div>
    </div>
@endsection
