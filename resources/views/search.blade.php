@extends('layouts.navbar')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <table>
        @for ($i=0; $i <$usercount; $i++) @php $path='user' .$foundusers[$i]->id.'/'.$foundusers[$i]->avatar;
          $profilePath='/profile/'.$foundusers[$i]->id;
          @endphp
          <tr onclick="location.href='{{$profilePath}}'" style="cursor:pointer; border-bottom-style: solid; border-bottom-color: #f8fafc;">
            <td width='70'>
              <div class="imgOwner">
                <img class="img-fluid" src="{{$path}}" alt="img">
              </div>
            </td>
            <td>{{$foundusers[$i]->username}}</td>
          </tr>
          @endfor
      </table>
    </div>
  </div>
</div>
@endsection