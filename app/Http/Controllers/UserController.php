<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function registerUser(Request $req){
        $rules = [
            'email' => 'unique required',
            'password' => 'required|between:8, 1000',
            'confirm-password' => 'same:password'
        ];

        $validator = Validator::make($req->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }
    }
}
