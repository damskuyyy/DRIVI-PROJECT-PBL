<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function viewMobil()
    {
        $data['allDataMobil'] = Mobil::all();
        return view('user.homepage', $data);
    }
}
