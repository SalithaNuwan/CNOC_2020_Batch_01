<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function newTask(){
        return view('layouts.admin.newTask');
    }

    public function taskList(){
        return view('layouts.admin.tasksList');
    }
}
