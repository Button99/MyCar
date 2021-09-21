<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Picture;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // Show his profile

    public function show($id) {
        $user= User::find($id);
        $picture= Picture::select('*')->where('user_id', '=', $user->id)->where('car', '=', '1')->first();
        return view('profile')->with(['user'=> $user, 'picture'=> $picture]);
    }
}
