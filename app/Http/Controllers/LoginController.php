<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Login;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request)
    {
        
        $request->validate([
            'username'=>'required|email',
            'password'=>'required']);
            
            $user = Login::where('user','=',$request->username)->first();
            //dd($request);
            if($user){
                if($request->password==$user->pass){
                    if($user->roll=='Admin'){
                        return view('Admin');
                    }
                    elseif($user->roll=='Merchant'){
                        return view('Merchant');
                    }
                    elseif($user->roll=='User'){
                        return view('User');
                    }
                }
                else{
                    return back()->with('fail','This Password Not Matching');
                }

            }
            else{
                return back()->with('fail','This email is not Registered');
            }
    }
    //
}
