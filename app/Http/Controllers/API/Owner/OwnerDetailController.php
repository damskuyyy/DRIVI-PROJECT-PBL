<?php

namespace App\Http\Controllers\API\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ownerdetail;

class OwnerDetailController extends Controller
{
    public function index()
    {
        $ownerdetail = ownerdetail::all();
        return response()->json($ownerdetail, 200);
    }

    public function add(Request $request)
    {
        $validateData = $request->validate([
            'id_user' => 'required',
            'no_telpon' => 'required',
            'alamat' => 'required',
            'nama_perusahaan' => 'required',
        ]);

        // create user
        $ownerdetail = new ownerdetail;
            $ownerdetail->id_user =  $request->id_user;
            $ownerdetail->no_telpon = $request->no_telpon;
            $ownerdetail->alamat =  $request->alamat;
            $ownerdetail->nama_perusahaan = $request->nama_perusahaan;
        $ownerdetail->save();

        return response()->json($ownerdetail, 201);
    }

    public function update(Request $request)
    {
        $validateData = $request->validate([
            'id_user' => 'required',
            'no_telpon' => 'required',
            'alamat' => 'required',
            'nama_perusahaan' => 'required',
        ]);

        // create user
        $ownerdetail = ownerdetail::where('id_user', '=', $request->id_user)->first();
        $ownerdetail->id_user =  $request->id_user;
        $ownerdetail->no_telpon = $request->no_telpon;
        $ownerdetail->alamat =  $request->alamat;
        $ownerdetail->nama_perusahaan = $request->nama_perusahaan;

        $ownerdetail->save();

        return response()->json($ownerdetail, 201);
    }

    public function delete(Request $request)
    {
        $ownerdetail = ownerdetail::where('id_user', '=', $request->id_user)->first();

        if (!empty($ownerdetail)) {
            $ownerdetail->delete();

            return response()->json($ownerdetail, 200);
        } else {
            return response()->json([
                'error' => 'data tidak ditemukan'
            ], 404);
        }
    }
}
