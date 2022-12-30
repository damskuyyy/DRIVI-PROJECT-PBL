<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth as FacadesAuth;
use Iluminate\Http\Request;
use App\Models\Mobil;
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

    public function detail($id){
        $detailMobil=Mobil::find($id);
        return view('user.detail',compact('detailMobil'));
    }
    public function indexDetail($id){
        $detailMobil=Mobil::find($id);
        return view('user.index_detail',compact('detailMobil'));
    }

    public function contact(){
        return view('user.contact');
    }

    
     
}