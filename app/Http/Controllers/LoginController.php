<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login');
    }
    public function handleLogin(Request $request){
        // echo $_POST['name'];
        $request->validate(
            ['name' => 'required']
        );

        return $request;
    }
}
