<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserSettingsController extends Controller
{

    public function store(Request $req) {
        $user= User::find(Auth::user()->id);

        $user->password= $req->input('newPass');

        return redirect('/changePass')->with('success');
    }

}
