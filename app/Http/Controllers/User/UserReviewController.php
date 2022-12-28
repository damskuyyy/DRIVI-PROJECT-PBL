<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserReviewController extends Controller
{
    public function review(){
        return view('user.review_mobil');
    }

    public function reviewAdd(){
        return view('user.review_add');
    }
}
