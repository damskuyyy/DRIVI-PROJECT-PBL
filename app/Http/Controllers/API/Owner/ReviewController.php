<?php

namespace App\Http\Controllers\API\Owner;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $review = Review::all();
        return response()->json($review, 200);
    }

    public function add(Request $request)
    {
        $validateData = $request->validate([
            'id_detail_user' => 'required',
            'id_mobil' => 'required',
            // 'tanggal_review' => 'required',
            'bintang' => 'required',
            'komentar' => 'required',
        ]);

        // create user
        $review = new Review([
            'id_detail_user' => $request->id_detail_user,
            'id_mobil' => $request->id_mobil,
            // 'tanggal_review' => $request->tanggal_review,
            'bintang' => $request->bintang,
            'komentar' => $request->komentar,
        ]);

        $review->save();

        return response()->json($review, 201);
    }
}
 

