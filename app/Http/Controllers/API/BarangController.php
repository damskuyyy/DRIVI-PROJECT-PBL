<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
class BarangController extends Controller
{
    public function BarangView()
    {
        $Barang = barang::all();
        return response()->json($Barang, 200);
    }

    public function BarangAdd(Request $request)
    {
        $validateData = $request->validate([
            'id_user' => 'required',
            'no_telpon' => 'required',
            'alamat' => 'required',
            'nama_perusahaan' => 'required',
        ]);

        // create user
        $Barang = new barang;
            $Barang->id_user =  $request->id_user;
            $Barang->no_telpon = $request->no_telpon;
            $Barang->alamat =  $request->alamat;
            $Barang->nama_perusahaan = $request->nama_perusahaan;
        $Barang->save();

        return response()->json($Barang, 201);
    }

    public function BarangUpdate(Request $request, $id)
    {
        $Barang = barang::find($id);
        $Barang->id_user = $request->input('id_user');
        $Barang->no_telpon = $request->input('no_telpon');
        $Barang->alamat = $request->input('alamat');
        $Barang->nama_perusahaan = $request->input('nama_perusahaan');

        $Barang->save();

        return response()->json($Barang, 201);
    }

    public function BarangDelete(Request $request, $id)
    {
        $Barang = barang::find($id);
        $Barang->delete();

        return response()->json($Barang, 201);
    }
}
