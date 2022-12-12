<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class OwnerController extends Controller
{
    public function logout(){
        FacadesAuth::logout();
            return Redirect()->route('login');
        }
    
        public function index (){
            return view ('owner.owner_master');
        }
    
        public function add(){
            return view('owner.add_mobil');
        }

        public function list(){
            return view('owner.mobil_list');
        }
    
        public function review(){
            return view('owner.review_mobil');
        }
    
        
         
    }
