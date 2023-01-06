<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\OwnerDetail;

class OwnerDetailController extends Controller
{
    public function OwnerDetail($id){
        // dd('berhasil edit');
        // $data=user::find($id);
        // return view('owner.ownerdetail', $data);
        $user = Auth::user();
        // $data['allDataUser'] = user::all();
        return view('owner.ownerdetail', compact('user'));
       }

    public function add(Request $request)
    {
        $validateData = $request->validate([
            'id_user' => 'required',
            'no_telpon' => 'required',
            'alamat' => 'required',
            'nama_perusahaan' => 'required',
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $owner = OwnerDetail::find($id);
        $owner->id_user = $request->input('id_user');
        $owner->no_telpon = $request->input('no_telpon');
        $owner->alamat = $request->input('alamat');
        $owner->nama_perusahaan = $request->input('nama_perusahaan');

        $data->save();

        return response()->json($owner, 201);
    }

    public function delete(Request $request, $id){
        $owner=OwnerDetail::find($id);
        $owner->delete();
        return response()->json($owner, 201);
    }
}