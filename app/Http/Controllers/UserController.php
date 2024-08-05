<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function registerUser(Request $req){
        $rules = [
            'email' => 'unique:App\Models\User,Email|required',
            'password' => 'required|between:8, 1000',
            'confirm-password' => 'same:password',
            'agreement' => 'required',
        ];

        $validator = Validator::make($req->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }
        else{
            User::create([
                'Email' => $req->email,
                'Password' => bcrypt($req->password),
                'UniqueCode' => Str::random(10),
                'CountryID' => Country::inRandomOrder()->first()->id,
                'Role' => 'user'
            ]);
            return redirect('/signin');
        }
    }
}
