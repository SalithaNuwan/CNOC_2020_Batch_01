<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function newUser(){
        return view('layouts.admin.newUser');
    }


    public function users(){
        return view('layouts.admin.users');
    }


    public function resetPassword(){
        return view('layouts.admin.resetPassword');
    }

    public function profile(){
        return view('layouts.user.profile');
    }

    public function resetPasswordUser(){
        return view('layouts.user.resetPassword');
    }
}


