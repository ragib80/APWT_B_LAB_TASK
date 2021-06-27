<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests\loginRequest;
use App\Models\Admin;


class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function verify(LoginRequest $req)

    {
    
        

            $user = Admin::where('email', $req->email)
            ->where('password', $req->password)
            ->first();

        if(count(array($user)) > 0){
            $req->session()->put('email', $req->email);
            return redirect('/home');
        }else{
            $req->session()->flash('msg', 'invaild username or password');
            return redirect('/login');
        }



           
}
    }
