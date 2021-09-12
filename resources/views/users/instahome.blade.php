@extends('layouts.navbar')

<!-- main: photo feed display -->
@section('content')
		<!-- undergo a for loop depending the number of posts variable from the database in layout file laravel -->
<article class="photo__container">
			<header class="photo__header">
				<!-- change the user image accoring to that stored in the database "variable" -->
				<img
				class="photo__avatar"
				src="images/avatar.jpg"
				alt="avatar__image"
				/>

				<div class="photo__info">
					<!-- insert the username variable inside the first span and the location variable inside the second one -->
					<span class="photo__author">Jihyo</span>
					<span class="photo__location">Jeju-do</span>
				</div>
			</header>
<!-- change the image source according to ther user added post -->
			<img
				class="insta__image"
				src="images/twice.jpg"
				alt="main__feedphoto"
				title="main__feedphoto"
				class="photo__image"
			/>

			<div class="photo__main">

				<div class="photo__actions">
					<i class="fa heart fa-heart-o fa-2x"></i>
					<i class="fa fa-comment-o fa-2x"></i>
				</div>
<!-- insert the number of likes inside inner span tag and deactivate the corresponding javascript code -->
				<span class="photo__likes"><span class="photo__likes-number">2989</span> Likes</span>

				<ul class="comments">
					<li class="photo__comment">
						<!-- insert the commentator name variable from the database inside the span name and the comment itself after the span tag  -->
						<span class="photo__comment--author">Serranoarevalo</span> omg this is great
					</li>

					<li class="photo__comment">
						<!-- insert the commentator name variable from the database inside the span name and the comment itself after the span tag  -->
						<span class="photo__comment--author">Jihyo_twice</span> TT
					</li>
				</ul>
        <!-- insert timespan from database inside the span tag -->
				<span class="photo__date">13 hours ago</span>

				<div class="photo__addcomment-container">
					<textarea class="photo__addcomment-area" name="comment" placeholder="Add a comment..."></textarea>
					<i class="fa fa-ellipsis-h"></i>
				</div>


			</div>
</article>
@endsection
@section('footercontent')
	<footer>
		<nav class="footer__nav">
			<ul class="footer__list">
				<li class="footer__item"><a href="#" class="footer_link">about us</a></li>
				<li class="footer__item"><a href="#" class="footer_link">support</a></li>
				<li class="footer__item"><a href="#" class="footer_link">blog</a></li>
				<li class="footer__item"><a href="#" class="footer_link">press</a></li>
				<li class="footer__item"><a href="#" class="footer_link">api</a></li>
				<li class="footer__item"><a href="#" class="footer_link">jobs</a></li>
				<li class="footer__item"><a href="#" class="footer_link">privacy</a></li>
				<li class="footer__item"><a href="#" class="footer_link">terms</a></li>
				<li class="footer__item"><a href="#" class="footer_link">directory</a></li>
				<li class="footer__item"><a href="#" class="footer_link">langage</a></li>
			</ul>
		</nav>
		<span class="footer__copyright">© 2017 Instagram</span>

	</footer>
	<div class="popUp">
		<i class="fa fa-times fa-2x"></i>
		<div class="popUpContainer">
			<a href="#" class="popUpLink">Report inappropriate</a>
			<a href="#" class="popUpLink">Embed</a>
			<a href="http://google.com" class="popUpLink closePopUpBtn">Cancel</a>
		</div>
	</div>

	<script
		src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>
	<script src="js/app2.js"></script>

@endsection
