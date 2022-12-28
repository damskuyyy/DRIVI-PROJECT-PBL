<?php

namespace App\Http\Controllers\API\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    //View All

    public function TransactionView()
    {
        $transaction = Transaction::all();
        return response()->json($transaction, 200);
    }

    // Tambah transaksi

    public function TransactionAdd(Request $request)
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

    // Update transaksi
   
    public function TransactionUpdate(Request $request, $id)
    {   

        $transaction = Transaction::find($id);
        $transaction -> id_user = $request->input('id_user');
        $transaction -> id_mobil = $request->input('id_mobil');
        $transaction -> tanggal_transaksi = $request->input('tanggal_transaksi');
        $transaction -> status_transaksi = $request->input('status_transaksi');
        $transaction -> tanggal_sewa = $request->input('tanggal_sewa');
        $transaction -> tanggal_pengembalian = $request->input('tanggal_pengembalian');
        $transaction -> metode_pembayaran = $request->input('metode_pembayaran');
        $transaction -> status_pengembalian = $request->input('status_pengembalian');
        $transaction -> denda = $request->input ('denda');
        
        $transaction -> save();        

        return response()->json($transaction, 201);
    }

    public function TransactionDelete(Request $request, $id){
        $transaction = Transaction::find($id);
        $transaction->delete();
        return response()->json($transaction, 201);
    }
}