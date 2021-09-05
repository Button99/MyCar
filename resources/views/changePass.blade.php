@extends('layouts.app')

@section('content')

    {!! Form::open(['action' => 'App\Http\Controllers\UserSettingsController@store', 'method' => 'POST']) !!}
        {{Form::label('Old Password:')}}
        {{Form::password('oldPass', ['placeholder' => 'Old Password'])}}

        {{Form::label('New Password:')}}
        {{Form::password('newPass', ['placeholder' => 'New Password'])}}

        {{Form::label('New Password (Type again):')}}
        {{Form::password('newPass2', ['placeholder' => 'New Password (Type Again)'])}}

        {{Form::submit('submit')}}
    {!! Form::close() !!}

@endsection