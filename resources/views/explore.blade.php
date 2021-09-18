@extends('layouts.navbar')
@section('content')
<div class="container tagsPage">
    <div class="row">
        <div class="col-md-12 mb-4">
            <h4 class="display-4">Explore All Posts</h4>
        </div>

        @foreach ($posts as $item)
        <div class="col-sm-12 col-md-6 col-lg-4">
            <a class="profilePost" href="{{ url('/post/'.$item->id)}}"><img class="img-fluid" src="{{ asset('uploads/post/'.$item->image) }}"></a>
        </div>
        @endforeach

    </div>
</div>
@endsection