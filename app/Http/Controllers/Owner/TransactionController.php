<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function listTransaksi(){

        // $namausers = DB::table('users')
        //         ->join('transactions', 'transactions.user_id', '=', 'users.id')
        //         ->where('status_transaksi', '=', 'Dipesan')
        //         ->get();

        $users = DB::table('mobils')
                ->join('transactions', 'transactions.mobil_id', '=', 'mobils.id')
                ->where('status_transaksi', '=', 'Dipesan')
                ->get();
        $users1 = DB::table('mobils')
                ->join('transactions', 'transactions.mobil_id', '=', 'mobils.id')
                ->where('status_transaksi', '=', 'Ditolak')
                ->get();

                
        // $user = Transaction::all();
        // $NamaMobils = Transaction::all();
        // .Transaction::all();
        // return dd($namausers);
        return view('transaction.transaction_list', compact('users','users1'));
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
        $transaction -> status_pengembalian = 'Ditolak Owner(Mobil Dalam Perbaikan)';
        $transaction -> status_transaksi = 'Ditolak';
        $transaction->save();
        return Redirect()->route('transaksi.list');

    }

    public function prosesTransaksi(){
        // $user = Transaction::all();
        $users = DB::table('mobils')
                ->join('transactions', 'transactions.mobil_id', '=', 'mobils.id')
                ->where('status_transaksi', '=', 'Disetujui')
                ->get();
        // .Transaction::all();
        // return dd($user);
        return view('transaction.transaction_proses', compact('users'));
        // $dataTransaksi['allDataTransaksi'] = Transaction::all();
        // return view('transaction.transaction_list', $dataTransaksi);
    }

    public function prosesSelesai($id){
        $user_id = Auth::user();
        $transaction = Transaction::find($id);
        $transaction -> status_pengembalian = 'Dikembalikan';
        $transaction -> status_transaksi = 'Selesai';
        $transaction->save();
        return Redirect()->route('transaksi.selesai');

    }

    public function selesaiTransaksi(){
        // $user = Transaction::all();
        $users = DB::table('mobils')
                ->join('transactions', 'transactions.mobil_id', '=', 'mobils.id')
                ->where('status_transaksi', '=', 'Selesai')
                ->get();
        // .Transaction::all();
        // return dd($user);
        return view('transaction.transaction_selesai', compact('users'));
        // $dataTransaksi['allDataTransaksi'] = Transaction::all();
        // return view('transaction.transaction_list', $dataTransaksi);
    }
}
