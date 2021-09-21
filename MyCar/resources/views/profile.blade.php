@extends('layouts.app')

@section('content')
    @if($user)
        <h1> Profile </h1>
        <div class="container-profile">
                <div class="card">

                    <div class="row no-gutters">
                        <div class="col-sm-5">
                            <img src="{{asset($picture->path)}}" class="card-img" alt="...">
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body">

                                <h5 class="card-title">Name: {{$user->name }} {{$user->last_name}}</h5>
                                <p class="card-text">
                                    Phone: {{$user->phone}} <br>
                                    Stars: {{$user->rate}}/5<br>
                                </p>
                                @if(Auth::user())
                                {!! Form::open(['action' => 'App\Http\Controllers\UserSettingsController@changePicture', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                    {{Form::label('Change Picture')}}
                                    <br>
                                    {{Form::file('cover_image')}}
                                    <br>
                                    <br>
                                    {{Form::submit('Change Picture')}}
                                {!! Form::close() !!}
                                @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @endif
@endsection