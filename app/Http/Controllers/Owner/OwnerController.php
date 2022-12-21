<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade as  FacadesAuth;
use Illuminate\Support\Facades\Auth;


class OwnerController extends Controller
{
    public function logout(){
        FacadesAuth::logout();
            return Redirect()->route('login');
        }
    
        public function index (){
        // $username['namaowner']= Auth::user();
            return view ('owner.owner_master');
            // return view ('owner.owner_master',$username);
        }
}
