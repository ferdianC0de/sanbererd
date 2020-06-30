<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register_form()
    {
        return view('sanber/form');
    }

    public function welcome(Request $request)
    {
        $data = [
            'fname' => $request->input('first_name'),
            'lname' => $request->input('last_name')
        ];
        return view('sanber/welcome', $data);
    }
}
