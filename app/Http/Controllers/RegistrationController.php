<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\http\Requests\RegistrationRequest;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\User;
use App\Models\Accountant;

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
    