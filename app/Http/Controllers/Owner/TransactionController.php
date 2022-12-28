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
        $user = Auth::user();
        // .Transaction::all();
        // return dd($user);
        return view('transaction.transaction_list', compact('user'));
        // $dataTransaksi['allDataTransaksi'] = Transaction::all();
        // return view('transaction.transaction_list', $dataTransaksi);
    }
}
