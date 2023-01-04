<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade as  FacadesAuth;

class OwnerController extends Controller
{
    public function logout(){
        FacadesAuth::logout();
            return Redirect()->route('login');
        }
    
        public function index (){
            return view ('owner.owner_master');
        }
}
