<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // عرض صفحة تسجيل الدخول
    public function ShowLogin()
    {
        return view('user.login');
    }

    // دالة عامة لمحاولة تسجيل الدخول
    protected function attemptLogin($guard, $credentials)
    {
        return Auth::guard($guard)->attempt($credentials);
    }

    // دالة تسجيل الدخول الموحدة
    public function login(LoginRequest $request)
    {
        $validatedData = $request->validated();

        // استخراج البريد الإلكتروني وكلمة المرور
        $credentials = [
            'email' => $validatedData['email'],
            'password' => $validatedData['password']
        ];


        if ($this->attemptLogin('admin', $credentials)) {
            return redirect()->intended(route('adminDashboard'));
        }


        elseif ($this->attemptLogin('web', $credentials)) {
            return redirect()->intended(route('userDashboard'));
        }


        return back()->withErrors(['email' => 'بيانات تسجيل الدخول غير صحيحة.'])->withInput();
    }


    public function logout(LoginRequest $request)
    {
        $guard = null;

        if (Auth::guard('admin')->check()) {
            $guard = 'admin';
        } elseif (Auth::guard('web')->check()) {
            $guard = 'web';
        }

        if ($guard) {
            Auth::guard($guard)->logout();
        }

        return redirect(route('ShowLogin'));
    }
}
