<?php

namespace App\Http\Controllers;



class UserController extends Controller
{
    public function homepage(){

        return view('user.index');
    }

    public function services(){

        return view('users.services');

    }

    public function contact(){
        return view('users.contact');
    }
}
