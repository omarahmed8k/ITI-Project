@extends('layouts.navbar')
@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">

			<div class="homePost d-flex flex-column">
				<div class="postOwner">
					<a href="{{ url('/profile') }}"><img src="{{asset('img/acpc.jpeg')}}"><span>Omar Abdelrahman</span></a>
				</div>
				<div class="postImg">
					<img class="img-fluid" src="{{asset('img/acpc.jpeg')}}">
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
						<a class="font-weight-bold d-block w-100" href="{{url('/profile')}}"> omarahmed8k </a>
						<p class="m-0">
							Kalam Gamed 2021
						</p>
					</div>
				</div>
				<span class="text-muted px-2">Comments</span>
				<div class="postComments">
					<a class="pl-3 pr-1 font-weight-bold" href="{{url('/profile')}}"> mosalah </a>
					<p class="pl-3 pr-1 pb-2 m-0">
						Kalam Gamed 2030
					</p>
				</div>
				<div class="postComments">
					<a class="pl-3 pr-1 font-weight-bold" href="{{url('/profile')}}"> alimo50 </a>
					<p class="pl-3 pr-1 pb-2 m-0">
						Kalam Gamed 2025
					</p>
				</div>
				<div class="postAddComment">
					<textarea placeholder="Comment" name="comment"></textarea>
					<a class="font-weight-bold pr-1" href="#">Post</a>
				</div>
			</div>
			<div class="homePost d-flex flex-column">
				<div class="postOwner">
					<a href="{{ url('/profile') }}"><img src="{{asset('img/omarrr.jpg')}}"><span>Ali Mohamed</span></a>
				</div>
				<div class="postImg">
					<img class="img-fluid" src="{{asset('img/omarrr.jpg')}}">
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
						<a class="font-weight-bold d-block w-100" href="{{url('/profile')}}"> omarahmed8k </a>
						<p class="m-0">
							Kalam Gamed 2021
						</p>
					</div>
				</div>
				<span class="text-muted px-2">Comments</span>
				<div class="postComments">
					<a class="pl-3 pr-1 font-weight-bold" href="{{url('/profile')}}"> mosalah </a>
					<p class="pl-3 pr-1 pb-2 m-0">
						Kalam Gamed 2030
					</p>
				</div>
				<div class="postComments">
					<a class="pl-3 pr-1 font-weight-bold" href="{{url('/profile')}}"> alimo50 </a>
					<p class="pl-3 pr-1 pb-2 m-0">
						Kalam Gamed 2025
					</p>
				</div>
				<div class="postAddComment">
					<textarea placeholder="Comment" name="comment"></textarea>
					<a class="font-weight-bold pr-1" href="#">Post</a>
				</div>
			</div>

		</div>
	</div>
</div>

@endsection