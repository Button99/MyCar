@extends('layouts.app')

@section('content')
    @if($user)
        <h1> Profile </h1>
        <div class="container-profile">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-sm-5">
                            <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body">

                                <h5 class="card-title">Name: {{$user->name }}</h5>
                                <p class="card-text">
                                    Phone: {{$user->phone}} <br>
                                    Stars: {{$user->rate}}/5<br>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @endif
@endsection