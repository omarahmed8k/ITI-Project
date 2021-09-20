@extends('layouts.navbar')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <table>
                    @foreach($foundusers as $user)
                        @php $path=$user->avatar;
          $profilePath='/profile/'.$user->id;
                        @endphp


                        <tr onclick="location.href='{{$profilePath}}'"
                            style="cursor:pointer; border-bottom-style: solid; border-bottom-color: #f8fafc;">
                            <td width='70'>
                                <div class="imgOwner">
                                    <img class="img-fluid" src="{{asset($path)}}" alt="img">
                                </div>
                            </td>
                            <td>{{$user->username}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
