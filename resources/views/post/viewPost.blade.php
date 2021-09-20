@extends('layouts.navbar')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="postPage">
                <div class="img">

                    @foreach ($posts as $item)
                    @if($item->id == $ids)
                    <img class="img-fluid" src="{{ asset('uploads/post/'.$item->image)}}" alt="">


                </div>
                <div class="details">
                    <a class="owner" href="{{  url('/profile'.'/'.$item->user->id)}}"><img src="{{asset($item->user->avatar)}}"><span>{{$item->user->name}}</span></a>

                    <div class="comments-container">
                        <div class="caption">
                            <a href="{{  url('/profile'.'/'.$item->user->id) }}"><img class="img-fluid" src="{{asset($item->user->avatar)}}"><span>{{$item->user->name}} </span></a>
                            <p class="m-0">
                                <span class="text-muted">
                                    @php

                                    $cap = $item->caption;
                                    foreach($tags as $tag){

                                    preg_match_all('/#(\w+)/', $cap, $matches);
                                    $ncap = str_replace($tag->name,"<a href='/tags/$tag->id '>$tag->name</a>",$cap);
                                    $cap = $ncap;

                                    }
                                    echo"$cap";
                                    @endphp


                                </span>
                            </p>
                            <span class="time">{{$item->created_at}}</span>
                        </div>
                        @foreach ($comments as $item1)
                        @if ($ids == $item1->post_id)
                        <div class="comment">
                            <a href="{{  url('/profile'.'/'.$item1->user->id)}}"><img class="img-fluid" src="{{asset($item->user->avatar)}}"><span> {{ $item1->user->name }} </span></a>
                            <p class="m-0">
                                <span class="text-muted"> {{$item1->comment}} </span>
                            </p>
                            <span class="time">{{$item1->created_at}}</span>
                        </div>
                        @endif
                        @endforeach



                    </div>
                    <div class="features">
                        <ul>
                            <li>
                                <form action="{{ url('add-likes2') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="userID" value="{{ auth()->user()->id }}">
                                    <input type="hidden" name="postID" value="{{ $ids }}">
                                    <button class="postLike" type="submit"><i class="far fa-heart"></i></button>
                                </form>
                            </li>
                            <li>
                                <form action="{{ url('save-post2') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="userID" value="{{ auth()->user()->id }}">
                                    <input type="hidden" name="postID" value="{{ $ids }}">
                                    <button class="postLike" type="submit"><i class="far fa-bookmark"></i></button>
                                </form>
                            </li>
                        </ul>
                        <div class="likes">
                            @php
                            $counter=0;
                            foreach ($likes as $item2){
                            if($item2->post_id == $ids)
                            {
                            $counter=$counter+1;
                            }//end if


                            }//end foreach
                            echo "$counter";
                            echo" likes";
                            echo"</div>";
                        @endphp
                    </div>
                    <form class="w-100 add-comment" action="{{ url('add-comments2') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <textarea placeholder="Comment" name="comment"></textarea>
                        <input type="hidden" name="userID" value="{{ auth()->user()->id }}">
                        <input type="hidden" name="postID" value="{{ $ids }}">
                        <button class="btn" type="submit">Post</button>
                    </form>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>

    @endsection
