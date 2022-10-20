<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{

    public function registration(){
        return view('form/form');
    }

    public function registration_store(Request $request ){

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'c_password' => 'required',

            ]
        );
        echo "<pre>";
        print_r($request->all());
    }

    public function com_registration(){
        return view('form/com_form');
    }

    public function com_registration_store(Request $request ){

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'c_password' => 'required',

            ]
        );
        echo "<pre>";
        print_r($request->all());
    }
}
