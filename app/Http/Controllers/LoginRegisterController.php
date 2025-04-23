<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{


    public function index(){

        return view('user.login');
    }

    public function store(LoginRegisterRequest $request){
        $user = new User();
        $user->name = $request->name ;
        $user->email = $request->email ;
        $user->password =  bcrypt($request->password) ;
        $user->save();


        }
}
