@extends('layouts.app')
@section('content')
    @if(session('success'))
        <p class="alert alert-success"> {{session('success')}} </p>
    @endif
    <h3>Welcome to MyCar!</h3>
    <br><br>
    <p><b>My Car is a place where you can buy/rent and sell your car!</b></p>
    <p><b>Here you can find any car you want!</b></p>
    <p>If you want to add your car then you should <b>register</b> first and then you are free to go!</p>
@endsection