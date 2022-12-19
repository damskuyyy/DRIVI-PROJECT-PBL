<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SewaController extends Controller
{
    public function sewaAdd(Request $request)
    {   
        $validateData = $request->validate([
            'id_user' => 'required',
            'id_mobil'=> 'required',
            'tanggal_transaksi' => 'required',
            'status_transaksi' => 'required',
            'tanggal_sewa' => 'required',
            'tanggal_pengembalian' => 'required',
            'metode_pembayaran' => 'required',
            'status_pengembalian' => 'required',
            'denda' => 'required',
        ]);

        $transaction = new Transaction([
            'id_user' => $request->user_id=$user_id->id,
            'id_mobil' => $request->id_mobil,
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'status_transaksi' => $request->status_transaksi,
            'tanggal_sewa' => $request->tanggal_sewa,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status_pengembalian' => $request->status_pengembalian,
            'denda' => $request->denda,
        ]);
        dd($transaction);
        $transaction->save();
        return redirect()->route('usersewa.add');

    }
}
