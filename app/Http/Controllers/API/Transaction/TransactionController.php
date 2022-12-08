<?php

namespace App\Http\Controllers\API\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Passport\Passport;
use App\Model\Transaction;

class TransactionController extends Controller
{
    public function createTransaction(Request $request)
    {
        // Tambah transaksi
        $transaction = new Transaksi();
        $transaction->id_user=$request->id_user;
        $transaction->id_mobil=$request->id_mobil;
        $transaction->tanggal_transaksi=$request->tanggal_transaksi;
        $transaction->status_transaksi=$request->status_transaksi;
        $transaction->tanggal_sewa=$request->tanggal_sewa;
        $transaction->tanggal_pengembalian=$request->tanggal_pengembalian;
        $transaction->metode_pembayaran=$request->metode_pembayaran;
        $transaction->status_pengembalian=$request->status_pengembalian;
        $transaction->denda=$request->denda;

        $transaction->save();

        return response()->json($transaction, 201);
    }
    //     public function UserView(){
    //     //$allDataUser=User::all();
    //     $data['allDataUser']=User::all();
    //     return view('backend.user.view_user',$data); 
    // }
}
