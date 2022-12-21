<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;


class MobilController extends Controller
{
    public function viewMobil()
    {
        // $username['namauser']= Auth::user();
        $data['allDataMobil'] = Mobil::all();
        // return dd($username);
        return view('user.homepage',$data);
        // return view('user.homepage', $data,$username);
    }
}
