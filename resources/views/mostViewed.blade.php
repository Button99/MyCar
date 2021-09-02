@extends('layouts.app')

@section('content')
    <h1> Most Viewed </h1>
    @foreach($vehicles as $vehicle)
        {{$vehicle -> model}}
    @endforeach
    <p>Same content but with js </p>
@endsection