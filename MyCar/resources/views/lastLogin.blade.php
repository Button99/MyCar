@extends('layouts.app')

@section('content')
    <p>This is the last Login page </p>
    @if($lastLogin && $lastIp)
        <p>Last Logged in: <b>{{$lastLogin}} </b><br>
           Ip: <b>{{$lastIp}}</b></p>
    @else
        <p>Error</p>
    @endif
@endsection