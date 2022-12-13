<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function list(){
        return view('owner.mobil_list');
    }
}
