@extends('layouts.app')
@section('content')
    @if(Auth::user())
        <div class="options-layout">
            <section class="settings-menu">
                <h2 class="card-title">Setting</h2>
                        <a class="card-text btn col-md-12 text-center" href="/changePass"> Change Password</a><br><hr>
                        <a class="card-text btn col-md-12 text-center" href="/lastLogin"> Last Login </a><br><hr>
                        <a class="card-text btn col-md-12 text-center" href="/deleteAccount"> Delete my account</a><br><br>
            </section>
            <section class="account-details">
                <h1> Account Details</h1>
                <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="rounded-circle" alt="..." />
                <br>
                <table class="table">
                    <tbody>
                        <tr>
                            <td> <b>Name</b>: {{Auth::user()->name}} </td>
                        </tr>
                        <tr>
                            <td> <b>Email</b>: {{Auth::user()->email}} </td>
                        </tr>
                        <tr>
                            <td> <b>Rate</b>: {{Auth::user()->rate}} </td>
                        </tr>
                        <tr>
                            <td> <b>Phone</b>: {{Auth::user()->phone}} </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>

    @else 
        <h2>Sorry... </h2> <br>
        <p>Need to login first</p>
    @endif
@endsection