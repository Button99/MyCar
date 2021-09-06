@extends('layouts.app')

@section('content')
    <div class="changePass-layout">
        {!! Form::open(['action' => 'App\Http\Controllers\UserSettingsController@store', 'method' => 'POST']) !!}
            {{Form::label('Old Password:')}}
            {{Form::password('oldPass', ['placeholder' => 'Old Password'])}}
            <br>
            <br>

            {{Form::label('New Password:')}}
            {{Form::password('newPass', ['placeholder' => 'New Password'])}}
            <br>
            <br>

            {{Form::label('New Password (Type again):')}}
            {{Form::password('newPass2', ['placeholder' => 'New Password (Type Again)'])}}
            <br>
            <br>

            {{Form::submit('submit')}}
        {!! Form::close() !!}

    </div>

@endsection