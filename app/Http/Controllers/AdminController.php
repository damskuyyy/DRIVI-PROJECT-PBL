<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth as FacadesAuth;
use Iluminate\Http\Request;
use Illuminate\Support\Facedes\Auth;

class AdminController extends Controller
{
    //
    public function logout(){
    FacadesAuth::logout();
        return Redirect()->route('login');
    }

    public function index (){
        return view ('admin.admin_master');
    }

    public function home(){
        return view('user.homepage');
    }

    public function detail(){
        return view('user.detail');
    }

    public function contact(){
        return view('user.contact');
    }
     
}