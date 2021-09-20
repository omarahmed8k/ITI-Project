@extends('layouts.navbar')
@section('content')
<div class="container tagsPage">
    <div class="row">
        <div class="col-md-12 mb-4">
            @foreach ($tags as $tag )
            @if ($tag->id == $ids)
            @php
                $tn=$tag->name;
            @endphp
            <h4 class="display-4">{{ $tn }}</h4>
            @break 
            @endif
            @endforeach
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <a class="profilePost" href="#"><img class="img-fluid" src="{{asset('img/acpc.jpeg')}}" alt=""></a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <a class="profilePost" href="#"><img class="img-fluid" src="{{asset('img/Omar.jpg')}}" alt=""></a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <a class="profilePost" href="#"><img class="img-fluid" src="{{asset('img/omarr.jpg')}}" alt=""></a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <a class="profilePost" href="#"><img class="img-fluid" src="{{asset('img/acpc.jpeg')}}" alt=""></a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <a class="profilePost" href="#"><img class="img-fluid" src="{{asset('img/Omar.jpg')}}" alt=""></a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <a class="profilePost" href="#"><img class="img-fluid" src="{{asset('img/omarr.jpg')}}" alt=""></a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <a class="profilePost" href="#"><img class="img-fluid" src="{{asset('img/acpc.jpeg')}}" alt=""></a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <a class="profilePost" href="#"><img class="img-fluid" src="{{asset('img/Omar.jpg')}}" alt=""></a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <a class="profilePost" href="#"><img class="img-fluid" src="{{asset('img/omarr.jpg')}}" alt=""></a>
        </div>

    </div>
</div>
@endsection