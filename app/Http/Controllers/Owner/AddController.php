<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function add(){
        return view('owner.add_mobil');
    }
}
