<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function listTransaksi(){
        $user = Transaction::all();
        // .Transaction::all();
        // return dd($user);
        return view('transaction.transaction_list', compact('user'));
        // $dataTransaksi['allDataTransaksi'] = Transaction::all();
        // return view('transaction.transaction_list', $dataTransaksi);
    }

    public function listUpdate($id){
        $user_id = Auth::user();
        $transaction = Transaction::find($id);
        $transaction -> status_transaksi = 'Disetujui';
        $transaction->save();
        return Redirect()->route('transaksi.proses');

    }

    public function listDenied($id){
        $user_id = Auth::user();
        $transaction = Transaction::find($id);
        $transaction -> status_transaksi = 'Ditolak';
        $transaction->save();
        return Redirect()->route('transaksi.list');

    }

    public function prosesTransaksi(){
        $user = Transaction::all();
        // .Transaction::all();
        // return dd($user);
        return view('transaction.transaction_proses', compact('user'));
        // $dataTransaksi['allDataTransaksi'] = Transaction::all();
        // return view('transaction.transaction_list', $dataTransaksi);
    }

    public function prosesSelesai($id){
        $user_id = Auth::user();
        $transaction = Transaction::find($id);
        $transaction -> status_transaksi = 'Selesai';
        $transaction->save();
        return Redirect()->route('transaksi.selesai');

    }

    public function selesaiTransaksi(){
        $user = Transaction::all();
        // .Transaction::all();
        // return dd($user);
        return view('transaction.transaction_selesai', compact('user'));
        // $dataTransaksi['allDataTransaksi'] = Transaction::all();
        // return view('transaction.transaction_list', $dataTransaksi);
    }
}
