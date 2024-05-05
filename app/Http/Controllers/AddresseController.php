<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddresseController extends Controller
{
    public function index()
    {
        return Inertia('Address/Index');
    }
}
