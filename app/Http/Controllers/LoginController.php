<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests\loginRequest;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\User;
use App\Models\Accountant;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function verify(LoginRequest $req)

    {
    
        

            $user = User::where('email', $req->email)
            ->where('password', $req->password)
            ->first();

        if(count(array($user)) > 0){
            $req->session()->put('email', $req->email);
            return redirect('/home');
        }else{
            $req->session()->flash('msg', 'invaild username or password');
            return redirect('/login');
        }



           /* if($admin->password == $req->password){
                $req->session()->put('user_name',$admin->user_name);
                $req->session()->put('user_type',$admin->user_type);
                return redirect('home');
            }
            else{
                $req->session()->flash('err',"wrong password");
                return redirect()->back();
            }
        }
        elseif($ad = Customer::where('email',$req->email)->first()){
            if($ad->password == $req->password){
                $req->session()->put('user_name',$ad->user_name);
                $req->session()->put('user_type',$ad->user_type);
                return redirect('home');
            }
            else{
                $req->session()->flash('err',"wrong password");
                return redirect()->back();
            }
        }
        elseif($ad = Vendor::where('email',$req->email)->first()){
            if($ad->password == $req->password){
                $req->session()->put('user_name',$ad->user_name);
                $req->session()->put('user_type',$ad->user_type);
                return redirect('home');
            }
            else{
                $req->session()->flash('err',"wrong password");
                return redirect()->back();
            }
        }
        elseif($ad = Accountant::where('email',$req->email)->first()){
            if($ad->password == $req->password){
                $req->session()->put('user_name',$ad->user_name);
                $req->session()->put('user_type',$ad->user_type);
                return redirect('home');
            }
            else{
                $req->session()->flash('err',"wrong password");
                return redirect()->back();
            }
        }
        else{
            $req->session()->flash('err',"invalid user");
            return redirect()->back();
        }

        // return redirect('login');
    }*/
}
    }