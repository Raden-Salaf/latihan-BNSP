<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginCon extends Controller
{
    public function login()
    {
        if (Auth::check()){
            return redirect("dashboard");
        }else{
            return view("login");
        }
    }
    public function actionlogin (Request $request)
    {
        $data = [
            'email' => $request -> input('email'),
            'password' => $request -> input('password'),
        ];
        if (Auth::attempt($data)) {
            return redirect('dashboard');
        }else{
            Session::flash('error','Email atawaa passwordmu salah mas/mba!!:)');
            return redirect('/');
        }
    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect ('/');
    }
}
