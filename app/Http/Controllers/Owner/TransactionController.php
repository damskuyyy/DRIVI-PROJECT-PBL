<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function listTransaksi(){
        $dataTransaksi['allDataTransaksi'] = Transaction::all();
        return view('transaction.transaction_list', $dataTransaksi);
    }
}
