<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Auth;

class HomeController extends Controller
{
   public function checkUserType()
   {
   //  return view('admin.frontend.homepage');
   if(!Auth::user()){

      return redirect()->route('home');
   }
   if(Auth::user()->type == 0){
      return redirect()->route('user.home');
   }
   if(Auth::user()->type == 1){
      return redirect()->route('owner.dashboard');
   }

   if(Auth::user()->type == 2){
      return redirect()->route('admin.dashboard');
   }else {
      return redirect('/login');
   }
}

   public function logout(){
      Auth::logout();
          return Redirect()->route('login');
      }
}
