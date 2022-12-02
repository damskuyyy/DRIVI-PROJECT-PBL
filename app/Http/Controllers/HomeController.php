<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facedes\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home()
   {
    return view('admin.frontend.homepage');
   }
}
