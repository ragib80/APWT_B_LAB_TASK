<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\http\Requests\RegistrationRequest;
use App\Models\Admin;
use App\Models\User;


class RegistrationController extends Controller
{
    public function index(){
        return view('registration.index');
    }
    public function verify(RegistrationRequest $req)

    {

    
            $user = new User;
            $user->user_name = $req->username;
            $user->full_name = $req->full_name;
            $user->password = $req->password;
            $user->cpassword = $req->cpassword;
            $user->email = $req->email;
            $user->address = $req->address;
            $user->company = $req->company;

            $user->phone = $req->phone;
            $user->city = $req->city;
            $user->country = $req->country;
            $user->type =  $req->type;
            // $user->profile_img = '';
            $user->save();
            return redirect()->route('login.index');
        }



          
}
    
