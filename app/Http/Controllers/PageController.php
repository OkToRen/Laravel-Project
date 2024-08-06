<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function register(){
        return view('register');
    }

    public function signin(){
        return view('signin');
    }
}
