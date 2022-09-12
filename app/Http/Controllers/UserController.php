<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req)
    {
        // return  $req->input();
        $user= User::where(['email'=>$req->email])->first();
        // return $user->password;
        if(!$user || !Hash::check($req->password,$user->password))
        {   
            return  "<h1><center>Username or Password not matched</center></h1>";
        }
        else
        {   
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    function userRegistration(Request $req)
    {
        $register=new User;
        $register->name=$req->name;
        $register->email=$req->email;
        $register->password=Hash::make($req->password);
        $register->save();
        return view('/login');
    }
}
