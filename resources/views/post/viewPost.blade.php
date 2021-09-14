@extends('layouts.navbar')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="postPage">
                <div class="img">
                    <img class="img-fluid" src="{{asset('../img/omarrr.jpg')}}" alt="">
                </div>
                <div class="details">
                    <a class="owner" href="{{ url('/profile') }}"><img src="{{asset('img/omarrr.jpg')}}"><span>Ali Mohamed</span></a>
                    <div class="comments-container">
                        <div class="caption">
                            <a href="{{ url('/profile') }}"><img class="img-fluid" src="{{asset('img/omarrr.jpg')}}"><span>Ali Mohamed. </span></a>
                            <span> Winnter Winnter Winnter Winnter Winnter Winnter Winnter Winnter Winnter </span>
                        </div>
                        <div class="comment">
                            <a href="{{ url('/profile') }}"><img class="img-fluid" src="{{asset('img/omarrr.jpg')}}"><span>Ali Mohamed. </span></a>
                            <span> Winnter Winnter Winnter Winnter Winnter Winnter Winnter Winnter Winnter </span>
                        </div>
                        <div class="comment">
                            <a href="{{ url('/profile') }}"><img class="img-fluid" src="{{asset('img/omarrr.jpg')}}"><span>Ali Mohamed. </span></a>
                            <span> Winnter Winnter Winnter Winnter Winnter Winnter Winnter Winnter Winnter </span>
                        </div>
                        <div class="comment">
                            <a href="{{ url('/profile') }}"><img class="img-fluid" src="{{asset('img/omarrr.jpg')}}"><span>Ali Mohamed. </span></a>
                            <span> Winnter Winnter Winnter Winnter Winnter Winnter Winnter Winnter Winnter </span>
                        </div>
                        <div class="comment">
                            <a href="{{ url('/profile') }}"><img class="img-fluid" src="{{asset('img/omarrr.jpg')}}"><span>Ali Mohamed. </span></a>
                            <span> Winnter Winnter Winnter Winnter Winnter Winnter Winnter Winnter Winnter </span>
                        </div>
                        <div class="comment">
                            <a href="{{ url('/profile') }}"><img class="img-fluid" src="{{asset('img/omarrr.jpg')}}"><span>Ali Mohamed. </span></a>
                            <span> Winnter Winnter Winnter Winnter Winnter Winnter Winnter Winnter Winnter </span>
                        </div>
                        <div class="comment">
                            <a href="{{ url('/profile') }}"><img class="img-fluid" src="{{asset('img/omarrr.jpg')}}"><span>Ali Mohamed. </span></a>
                            <span> Winnter Winnter Winnter Winnter Winnter Winnter Winnter Winnter Winnter </span>
                        </div>
                        <div class="comment">
                            <a href="{{ url('/profile') }}"><img class="img-fluid" src="{{asset('img/omarrr.jpg')}}"><span>Ali Mohamed. </span></a>
                            <span> Winnter Winnter Winnter Winnter Winnter Winnter Winnter Winnter Winnter </span>
                        </div>
                        <div class="comment">
                            <a href="{{ url('/profile') }}"><img class="img-fluid" src="{{asset('img/omarrr.jpg')}}"><span>Ali Mohamed. </span></a>
                            <span> Winnter Winnter Winnter Winnter Winnter Winnter Winnter Winnter Winnter </span>
                        </div>
                        <div class="comment">
                            <a href="{{ url('/profile') }}"><img class="img-fluid" src="{{asset('img/omarrr.jpg')}}"><span>Ali Mohamed. </span></a>
                            <span> Winnter Winnter Winnter Winnter Winnter Winnter Winnter Winnter Winnter </span>
                        </div>
                    </div>
                    <div class="features">
                        <ul>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-bookmark"></i></a></li>
                        </ul>
                        <div class="likes">
                            300 likes
                        </div>
                    </div>
                    <div class="add-comment">
                        <textarea placeholder="Comment" name="comment"></textarea>
                        <a class="font-weight-bold pr-1" href="#">Post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection