<?php

namespace App\Http\Controllers\API\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::all();
        return response()->json($transaction, 200);
    }

    public function add(Request $request)
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
        // Tambah transaksi
        $transaction = new Transaction([
            'id_user' => $request->id_user,
            'id_mobil' => $request->id_mobil,
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'status_transaksi' => $request->status_transaksi,
            'tanggal_sewa' => $request->tanggal_sewa,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status_pengembalian' => $request->status_pengembalian,
            'denda' => $request->denda,
        ]);

        $transaction->save();

        return response()->json($transaction, 201);
    }
   
}
