<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    public function view($id){
        $data = User::find($id);
        return view('user.user_detail',compact('data'));
    }
}
