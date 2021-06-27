<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\http\Requests\RegistrationRequest;
use App\Models\Admin;
use App\Models\User;
use App\Http\Requests\userRequest;

class UserController extends Controller
{
    
    public function create()
    {
        return view('user.create');
    }

    public function insert(userRequest $req)
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
        $user->save();
        return view('/user/list');
    }

    public function index()
    {
        
        $users = User::all();
        
        return view('user.list')->with('userList', $users);
    }
    public function details($id)
    {

        $user = User::find($id);
        return view('user.details')->with('user', $user);
    }
    public function edit($id)
    {

        $user = User::find($id);
        return view('user.edit')->with('user', $user);
    }
    public function update(Request $req, $id)
    {

        $user = User::find($id);
        $user->user_name = $req->username;
        // $user->password = $req->password;
        $user->email = $req->email;
        $user->full_name = $req->fullname;
        $user->address = $req->address;
        $user->phone = $req->phone;
         $user->type = $req->type;
        $user->save();
        return redirect()->route('user.index');
    
    }
    public function delete($id)
    {

        $user = User::find($id);
        return view('user.delete')->with('user', $user);
    }
    public function destroy(Request $req, $id)
    {

        User::destroy($id);
        return redirect()->route('user.index');
    }
          
}
    
