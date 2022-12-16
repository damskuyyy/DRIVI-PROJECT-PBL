<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function mobilDelete($id){
        // dd('berhasil edit');
        $deleteData=Mobil::find($id);
        $deleteData->delete();
        return redirect()->route('owner.list');
    }
}
