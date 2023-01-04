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
            'bintang' => 'required',
            'komentar' => 'required',
            // 'tanggal_review' => 'required',

        ]);

        // create user
        $review = new Review([
            'id_detail_user' => $request->id_detail_user,
            'id_mobil' => $request->id_mobil,
            'bintang' => $request->bintang,
            'komentar' => $request->komentar,
            // 'tanggal_review' => $request->tanggal_review,
            
        ]);

        $review->save();

        return response()->json($review, 201);

    }
    public function update(Request $request, $id)
    {
        $review = Review::find($id);
        $review->id_detail_user  = $request->input('id_detail_user');
        $review->id_mobil        = $request->input('id_mobil');
        $review->bintang         = $request->input('bintang');
        $review->komentar        = $request->input('komentar');

        $review->save();

        return response()->json($review, 201);
    }
    public function delete(Request $request, $id)
    {
        $review = Review::find($id);
        $review->delete();

        return response()->json($review, 201);
    }
}
 

