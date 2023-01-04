<?php

namespace App\Http\Controllers\owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OwnerDetailController extends Controller
{
    public function OwnerDetail(){

        $data['allDataOwnerDetail']=Karyawan::all();
        return view('owner.ownerdetail.view', $data);
    
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

}