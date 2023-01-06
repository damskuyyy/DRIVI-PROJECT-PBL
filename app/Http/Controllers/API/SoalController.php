<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\soal;

class SoalController extends Controller
{
    public function SoalView()
    {
        $Soal = soal::all();
        return response()->json($Soal, 200);
    }

    public function SoalAdd(Request $request)
    {
        $validateData = $request->validate([
            'no_Soal' => 'required',
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);

        // create user
        $Soal = new soal;
            $Soal->no_Soal = $request->no_Soal;
            $Soal->pertanyaan = $request->pertanyaan;
            $Soal->jawaban = $request->jawaban;
        $Soal->save();

        return response()->json($Soal, 201);
    }

    public function SoalUpdate(Request $request, $id)
    {
        $Soal = soal::find($id);
        $Soal->no_Soal = $request->input('no_Soal');
        $Soal->pertanyaan = $request->input('pertanyaan');
        $Soal->jawaban = $request->input('jawaban');

        $Soal->save();

        return response()->json($Soal, 201);
    }

    public function SoalDelete(Request $request, $id)
    {
        $Soal = soal::find($id);
        $Soal->delete();

        return response()->json($Soal, 201);
    }
}
