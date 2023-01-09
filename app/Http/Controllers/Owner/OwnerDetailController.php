<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class OwnerDetailController extends Controller
{
    public function view($id){
        $data = User::find($id);
        return view('owner.owner_detail',compact('data'));
    }
}
