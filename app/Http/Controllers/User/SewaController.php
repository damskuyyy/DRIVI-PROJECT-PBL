<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mobil;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;


class SewaController extends Controller
{
    public function sewaAdd($id)
    {   
        $user_id = Auth::user();
        $sewaMobil=Mobil::find($id);
        // return dd($user_id);
        return view ('user.sewa_mobil', compact('sewaMobil','user_id'));
        // return dd($editData);
    }
    public function sewaCreate(Request $request){
            
        $user_id = Auth::user();
        $validateData = $request->validate([
            'user_id' => 'required',
        ]);
        // dd ($user_id);
        $transaction = new Transaction();
            $transaction -> user_id =$user_id->id;
            $transaction -> mobil_id = $request->mobil_id;
            $transaction -> tanggal_sewa = $request->tanggal_sewa;
            $transaction -> tanggal_pengembalian = $request->tanggal_pengembalian;
            $transaction->save();
        return view ('user.index') -> with('Sukses');

    }
}
