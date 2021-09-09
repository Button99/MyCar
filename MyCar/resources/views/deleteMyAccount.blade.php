@extends('layouts.app')

@section('content')
    <div class="options-layout">
        <section class="settings-menu">
            <h2 class="card-title">Setting</h2>
            <a class="card-text btn col-md-12 text-center" href="/changePass"> Change Password</a><br><hr>
            <a class="card-text btn col-md-12 text-center" href="/lastLogin"> Last Login </a><br><hr>
            <a class="card-text btn col-md-12 text-center" href="/deleteAccount"> Delete my account</a><br><br>
        </section>

        <section class="account-details">
            <h1>Delete my Account</h1>

            <p>Are you sure you want to delete your account?<br>
                If yes then press the red button
            </p>

            {!! Form::open(['action' => 'App\Http\Controllers\UserSettingsController@accountDestroy', 'method' => 'DELETE']) !!}
                {{Form::submit('Delete my account')}}
            {!! Form::close() !!}
        </section>
    </div>
@endsection