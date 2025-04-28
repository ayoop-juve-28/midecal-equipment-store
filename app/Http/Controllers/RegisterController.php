<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRegisterRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Database\Console\Migrations\RefreshCommand;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class RegisterController extends Controller
{


    public function ShowRegister(){

        return view('user.login');
    }

    public function store(RegisterRequest $request)
    {

        $validatedData = $request->validated();

        $user = new User();
        $user->name = $validatedData['name']; // استخدام البيانات المفحوصة
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->save();


    }
}
