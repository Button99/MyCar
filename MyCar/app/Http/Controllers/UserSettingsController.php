<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Picture;
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

    // Find bef4 picture and delete it
    public function changePicture(Request $request) {
        $user= User::find(Auth::user()->id);
        $picture= new Picture;
        
        // Delete old pic
        $pictureForDelete= Picture::select('*')->where('user_id', '=', Auth::user()->id)->where('car', '=', '1')->delete();

        $name= $request->file('cover_image')->getClientOriginalName();
        $filename= pathinfo($name, PATHINFO_FILENAME);
        $extension= $request->file('cover_image')->getClientOriginalExtension();
        $filenameToStore= $filename.'_'.time().$extension;
        $path= $request->file('cover_image')->storeAs('public/photo_album', $filenameToStore);
        
        // store new pic
        $picture->path= 'storage/photo_album/'. $filenameToStore;
        $picture->mime_type= $extension;
        $picture->car= 1;
        $picture->user_id= Auth::user()->id;

        $picture->save();

        return redirect('profile/{{ $user->id }}')->with('success', 'Picture Update!');
    }
}
