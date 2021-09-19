@extends('layouts.navbar')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @isset($posts)
                    @foreach ($posts as $item)

                        <div class="homePost d-flex flex-column">
                            <div class="postOwner">
                                <a href="{{ url('/profile') }}"><img
                                        src="{{ asset('user'.$item->user->id.'/'.$item->user->avatar ) }}"><span> {{ $item->user->username }}</span></a>
                            </div>
                            <div class="postImg">
                                <img class="img-fluid" src="{{ asset('uploads/post/'.$item->image) }}">
                            </div>
                            <div class="postFeatures">
                                <ul>
                                    <li><a class="postLike" onclick="fill()" href="#"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li><a href="{{url('/post')}}"><i class="far fa-comment"></i></a></li>
                                </ul>
                                <ul class="ml-auto">
                                    <li><a href="#"><i class="far fa-bookmark"></i></a></li>
                                </ul>
                                <div class="postLikes">
                                    300 likes
                                </div>
                                <div class="postCaption">
                                    <a class="font-weight-bold d-block w-100"
                                       href="{{url('/profile')}}"> {{ $item->user_name }} </a>
                                    <p class="m-0">
                                        {{ $item->caption }}
                                    </p>
                                </div>
                            </div>
                            <span class="text-muted px-2">Comments</span>
                            @foreach ($comments as $item1)
                                @if ($item->id == $item1->post_id)
                                    <div class="postComments">
                                        <a class="pl-3 pr-1 font-weight-bold"
                                           href="{{url('/profile')}}"> {{ $item1->user->username }} </a>
                                        <p class="pl-3 pr-1 pb-2 m-0">
                                            {{$item1->comment}}
                                        </p>
                                    </div>
                                @endif
                            @endforeach

                            <div class="postAddComment">
                                 <form  action="{{ url('add-comments') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <textarea placeholder="Comment" name="comment" ></textarea>
                                    <input type="hidden" name="userID" value="{{ auth()->user()->id }}">
                                    <input type="hidden" name="postID" value="{{ $item->id }}">

                                    <button class="btn btn-primary add-comment" type="submit" >Post</button>

                                </form>
                            </div>
                        </div>


                    @endforeach
                @endisset

            </div>
        </div>
    </div>

@endsection
