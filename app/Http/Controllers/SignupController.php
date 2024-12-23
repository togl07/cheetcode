<?php

namespace App\Http\Controllers;

use App\Models\signup;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function signup(Request $req){
        $coin=signup::where('username','asd')->get()[0];
        return view('welcome',['username'=>$coin->username]);
    }
}
