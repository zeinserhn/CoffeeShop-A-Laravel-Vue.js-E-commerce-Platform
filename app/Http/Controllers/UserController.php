<?php

namespace App\Http\Controllers;

use auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return inertia('Index',[
            'user'=>auth()->user()->only('id','name')

        ]);
    }
}
