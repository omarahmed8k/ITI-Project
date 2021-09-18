@extends('layouts.navbar')
@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">


            @foreach ($posts as $item)




            <div class="homePost d-flex flex-column">
				<div class="postOwner">
					<a href="{{ url('/profile') }}"><img src="{{ asset('uploads/avatar/'.$item->user->avatar) }}"><span> {{ $item->user->username }}</span></a>
				</div>
				<div class="postImg">
					<img src="{{ asset('uploads/post/'.$item->image) }}" width="725px" Height="600px"  balt="pic">
				</div>
				<div class="postFeatures">
					<ul>
						<li><a class="postLike" onclick="fill()" href="#"><i class="far fa-heart"></i></a></li>
						<li><a href="{{url('/post')}}"><i class="far fa-comment"></i></a></li>
					</ul>
					<ul class="ml-auto">
						<li><a href="#"><i class="far fa-bookmark"></i></a></li>
					</ul>
					<div class="postLikes">
						300 likes
					</div>
					<div class="postCaption">
						<a class="font-weight-bold d-block w-100" href="{{url('/profile')}}"> {{ $item->user_name }} </a>
						<p class="m-0">
							{{ $item->caption }}
						</p>
					</div>
				</div>
				<span class="text-muted px-2">Comments</span>
                @foreach ($comments as $item1)
                    @if ($item->id == $item1->post_id)
                        <div class="postComments">
                            <a class="pl-3 pr-1 font-weight-bold" href="{{url('/profile')}}"> {{ $item1->user->username }} </a>
                            <p class="pl-3 pr-1 pb-2 m-0">
                              {{$item1->comment}}
                            </p>
                        </div>
                    @endif
                @endforeach

				<div class="postAddComment">
					<textarea placeholder="Comment" name="comment"></textarea>
					<a class="font-weight-bold pr-1" href="#">Post</a>
				</div>
			</div>


            @endforeach


		</div>
	</div>
</div>

@endsection
