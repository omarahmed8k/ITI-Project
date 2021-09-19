@extends('layouts.navbar')
@section('content')
<div class="card col-md-4" style="margin:auto;">
<table class="margin:auto">
  @for ($i=0; $i <$usercount; $i++)
    @php
    $path='user'.$foundusers[$i]->id.'/'.$foundusers[$i]->avatar;
    $profilePath='/profile/'.$foundusers[$i]->id;
    echo $profilePath;
    @endphp
    <tr onclick="location.href={{$profilePath}}" style="cursor:pointer; border-bottom-style: solid; border-bottom-color: #f8fafc;">
      <td><img src="{{$path}}" alt="img" style="width:6rem; height:3rem" class="rounded-circle"></td>
      <td>{{$foundusers[$i]->username}}</td>
    </tr>
  @endfor

</table>
</div>
@endsection
