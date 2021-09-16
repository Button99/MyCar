<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserSettingsController extends Controller
{

    public function store(Request $req) {
        $user= User::find(Auth::user()->id);
        
        if($req->input('newPass') != $req->input('newPass2')) {
            
            return redirect('/changePass')->with('error', "Wrong Password");

        }

        if(!Hash::check($req->oldPass, $user->password)){
            
            return redirect('/changePass')->with('error', "Wrong Password");
        }

        if(Hash::check($req->newPass, $user->password)) {
            $user->password= Hash::make($req->input('newPass'));

            $user->save();

            return redirect('/changePass')->with('success', 'Password Changed Successfully');
        }

        return redirect('/changePass')->with('error', "Wrong Password");
    }

    public function accountDestroy() {
        $user= User::find(Auth::user()->id);

        $vehicles= Vehicle::where('user_id', '=', $user->id);
        $vehicles->delete();

        Auth::logout();

        if($user->delete()) {
            return redirect('/')->with('success', 'Your account has been deleted');
        }

        else {
            return redirect('/deleteAccount')->with('error', 'Sorry your Account cant be deleted');
        }
    }

    public function lastLogin() {
        $user= User::find(Auth::user()->id);

        return view('lastLogin')->with(['lastLogin'=> $user->last_login, 'lastIp' =>$user->last_ip]);
    }
}
