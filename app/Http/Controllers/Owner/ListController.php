<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    public function list(){
        $user = Auth::user();
        // $data['allDataMobil'] = mobil::all();
        return view('owner.mobil_list', compact('user'));
    }

        
}
