<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class UserReviewController extends Controller
{
    public function ReviewRead(){
        $data['allDataReview'] = Review::all();
        return view('user.read_review_mobil', $data);
    }

<<<<<<< HEAD
    public function ReviewAdd(){
        return view('user.add_review_mobil');
    }

    public function ReviewRequest(Request $request){
            $data = new Review();
            $data->id_detail_user = $request->id_detail_user;
            $data->id_mobil = $request->id_mobil;
            $data->bintang = $request->bintang;
            $data->komentar = $request->komentar;
            $data->save();
            return redirect()->route('user.read_review_mobil')->with('info', 'Tambah Review Berhasil');
    }

    public function ReviewDelete($id)
    {
        $deleteData = Review::find($id);
        $deleteData->delete();


        return redirect()->route('user.read_review_mobil')->with('info', 'Delete Review Berhasil');
    }
}
=======
    public function reviewAdd(){
        return view('user.review_add');
    }
}
>>>>>>> origin/transaksi
