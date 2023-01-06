<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bola;

class BolaController extends Controller
{
    public function BolaView()
    {
        $Bola = bola::all();
        return response()->json($Bola, 200);
    }

    public function BolaAdd(Request $request)
    {
        $validateData = $request->validate([
            'id_user' => 'required',
            'no_telpon' => 'required',
            'alamat' => 'required',
            'nama_perusahaan' => 'required',
        ]);

        // create user
        $Bola = new bola;
            $Bola->id_user = $request->id_user;
            $Bola->no_telpon = $request->no_telpon;
            $Bola->alamat = $request->alamat;
            $Bola->nama_perusahaan = $request->nama_perusahaan;
        $Bola->save();

        return response()->json($Bola, 201);
    }

    public function BolaUpdate(Request $request, $id)
    {
        $Bola = bola::find($id);
        $Bola->id_user = $request->input('id_user');
        $Bola->no_telpon = $request->input('no_telpon');
        $Bola->alamat = $request->input('alamat');
        $Bola->nama_perusahaan = $request->input('nama_perusahaan');

        $Bola->save();

        return response()->json($Bola, 201);
    }

    public function BolaDelete(Request $request, $id)
    {
        $Bola = bola::find($id);
        $Bola->delete();

        return response()->json($Bola, 201);
    }
}
