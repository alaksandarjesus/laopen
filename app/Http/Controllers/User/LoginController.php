<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;



class LoginController extends Controller
{
  
    public function view(){
        $user = "Veeramuthu";
        return view('user.login')->withUser($user);
    }
}

