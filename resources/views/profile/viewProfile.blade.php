@extends('layouts.navbar')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="topProfile">

                    <div class="profileImg">
                        <img src="{{ asset($user->avatar) }}">
                    </div>

                    <div class="profileData">

                        <div class="profileUsername">
                            <p>{{ $user->username }}</p>

                            @if( $user->id == Auth::id() )
                                <a href="{{url('/edit')}}"><i class="fas fa-cog"></i> Edit Profile</a>
                            @else

                                @if($user->relation)
                                    <form action="{{ route('followers.unfollow', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input class="followersBtn unFollow" type="submit" value="Unfollow">
                                    </form>
                                @else
                                    <form action="{{ route('followers.follow', $user->id) }}" method="POST">
                                        @csrf
                                        <input class="followersBtn" type="submit" value="Follow">
                                    </form>

                                @endif

                            @endif
                        </div>

                        <ul class="profileCounter">
                            <li>
                                <strong>{{$postsNum}}</strong> posts
                            </li>
                            @if( $user->id == Auth::id() )
                                <li>
                                    <a href="{{url('/followers')}}">
                                        <strong>{{ $followersCount }}</strong> followers
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/following')}}">
                                        <strong>{{ $followingCount }}</strong> following
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a>
                                        <strong>{{ $followersCount }}</strong> followers
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <strong>{{ $followingCount }}</strong> following
                                    </a>
                                </li>
                            @endif
                        </ul>

                        <div class="profileName">
                            <p>
                                {{ $user->name }}
                            </p>
                        </div>

                        <div class="profileBio">
                            <p>
                                {{ $profile->bio ?? '' }}
                            </p>
                        </div>

                        <div class="profileWebsite">
                            <a target="_blank" href="//<?= $profile->website ?? '' ?>">{{ $profile->website ?? '' }}</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-12">

                <div class="bottomProfile">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                               aria-controls="home" aria-selected="true"><i class="fas fa-border-all"></i> Posts</a>
                        </li>
                        @if($user->id == Auth::id())
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                   aria-controls="profile" aria-selected="false"><i class="far fa-bookmark"></i>
                                    Saved</a>
                            </li>
                        @endif
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            <div class="row">
                                @isset($posts)
                                    @foreach($posts as $post)
                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                            <a class="profilePost" href="{{url('/post/'.$post->id)}}"><img
                                                    class="img-fluid" src="{{asset('uploads/post/'.$post->image)}}"></a>
                                        </div>
                                    @endforeach
                                @endisset
                            </div>

                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                            <div class="row">
                                @isset($saved_posts)
                                    @foreach($saved_posts as $post)
                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                            <a class="profilePost" href="{{url('/post/'.$post->id)}}"><img
                                                    class="img-fluid" src="{{asset('uploads/post/'.$post->image)}}"></a>
                                        </div>
                                    @endforeach
                                @endisset
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
