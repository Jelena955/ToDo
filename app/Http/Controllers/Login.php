<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function index ()
    {
        return view ('pages.login', $this->data);

    }

    public function login (LoginRequest $request)
    {
        $validation = $request->validated ();
        if (Auth::attempt ($validation)) {
//            $this->log ($request, new LogedUser());

            return redirect ('/home');

        } else {
            return redirect ('/loginForm')->with ('error', 'Wrong email or password');
        }
    }

    public function destroy (Request $request)
    {
//        $this->log ($request, new LoggedOutUser());
        Auth::logout ();

        return redirect ('/home')->with ('status', 'Goodbye');
        // return redirect('/login');
    }

}
