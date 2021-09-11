@extends('layouts.navbar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="topProfile">

                <div class="profileImg">
                    <img src="{{asset('img/user.png')}}">
                </div>

                <div class="profileData">

                    <div class="profileUsername">
                        <p>omarahmed8k</p>
                        <a href="{{url('/')}}"><i class="fas fa-cog"></i> Edit Profile</a>
                    </div>

                    <ul class="profileCounter">
                        <li>
                            <strong>24</strong> posts
                        </li>
                        <li>
                            <a href="#">
                                <strong>191</strong> followers
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <strong>111</strong> following
                            </a>
                        </li>
                    </ul>

                    <div class="profileName">
                        <p>
                            Omar Abdelrahman
                        </p>
                    </div>

                    <div class="profileBio">
                        <p>
                            Software Engineer
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-12">

            <div class="bottomProfile">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-border-all"></i> Posts</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="far fa-bookmark"></i> Saved</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="row">
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

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <a class="profilePost" href="#"><img class="img-fluid" src="{{asset('img/omarface.jpg')}}" alt=""></a>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <a class="profilePost" href="#"><img class="img-fluid" src="{{asset('img/omarrr.jpg')}}" alt=""></a>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <a class="profilePost" href="#"><img class="img-fluid" src="{{asset('img/tlb.png')}}" alt=""></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection