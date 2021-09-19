@extends('layouts.navbar')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @isset($posts)
                    @foreach ($posts as $item)
                    @foreach($followers as $item5)
                        @if($item->user_id == $item5->user_id && $item5->follower_id == auth()->user()->id)
                        
                    
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
                                    <li>
                                    <form  action="{{ url('add-likes') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="userID" value="{{ auth()->user()->id }}">
                                    <input type="hidden" name="postID" value="{{ $item->id }}">

                                    <button class="postLike" type="submit" ><i class="far fa-heart"></i></button>

                                 </form>
                                    </li>
                                    
                                    <li><button onclick="window.location.href='/post/{{  $item->id; }}';" ><i class="far fa-comment"></i></button></li>
                                </ul>
                                <ul class="ml-auto">
                                    <li>
                                        <form  action="{{ url('save-post') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="userID" value="{{ $item->user_id }}">
                                            <input type="hidden" name="postID" value="{{ $item->id }}">

                                            <button class="postLike" type="submit" ><i class="far fa-bookmark"></i></button>

                                        </form>
                                 </li>

                                </ul>
                                <div class="postLikes">
                                @php
                                $counter=0;
                                foreach ($likes as $item2){
                                    if($item2->post_id == $item->id)
                                    {

                                        $counter=$counter+1;
                                    }//end if


                                }//end foreach
                                    echo "$counter";
                                    echo" likes";
                                echo"</div>";
                                @endphp
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
                        @break
                        @endif

                        @endforeach
                    @endforeach
                @endisset

            </div>
        </div>
    </div>

@endsection
