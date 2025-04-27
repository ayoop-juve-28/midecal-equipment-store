<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){



        return view('user.login');

    }

    public function login(LoginRequest $request){

        $validatedData = $request->validated();



    }
}
