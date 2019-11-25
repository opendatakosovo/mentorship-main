<?php


namespace App\Http\Controllers;


class SignInController extends Controller
{
    public function sign_in(){
        return view('sign-in');
    }
}