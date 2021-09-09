@extends('layouts.app')

@section('content')

    @if(session('success'))
        {{session('success')}}
    @else
        {{session('error')}}
    @endif

    <div class="options-layout">
        <section class="settings-menu">
            <h2 class="card-title">Setting</h2>
                <a class="card-text btn col-md-12 text-center" href="/changePass"> Change Password</a><br><hr>
                <a class="card-text btn col-md-12 text-center" href="/lastLogin"> Last Login </a><br><hr>
                <a class="card-text btn col-md-12 text-center" href="/deleteAccount"> Delete my account</a><br><br>
        </section>

        <section class="changePass-layout">
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

        </section>
    </div>

@endsection