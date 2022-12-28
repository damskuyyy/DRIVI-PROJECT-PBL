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
        // return view ('user.sewa_list', compact('user_id'));
        return Redirect()->route('user.sewa.list');

    }

    public function sewaList(){
        $user_id = Auth::user();
        // return dd ($user);
        return view('user.sewa_list', compact('user_id'));
    }


    public function sewaEdit($id){
        $user_id = Auth::user();
        $editData=Transaction::find($id);
        return view('user.sewa_edit', compact('editData','user_id'));
       }

       public function sewaUpdate(Request $request, $id){
        $user_id = Auth::user();
        $transaction = Transaction::find($id);
        $transaction -> tanggal_sewa = $request->tanggal_sewa;
        $transaction -> tanggal_pengembalian = $request->tanggal_pengembalian;
        $transaction->save();

        return Redirect()->route('user.sewa.list')->with('info','Jadwal Sewa Berhasil Diupdate!!');
        
    }

    public function sewaDelete($id){
        $editData=Transaction::find($id);
        $editData->delete();
        return redirect()->route('user.sewa.list')->with('info','Sewa Dibatalkan');
    }
}
