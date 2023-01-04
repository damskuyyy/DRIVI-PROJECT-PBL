<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    public function list(){
        $user = Auth::user();
        // $data['allDataMobil'] = mobil::all();
        return view('owner.mobil_list', compact('user'));
    }

    public function UserEdit($id){
        // dd('berhasil edit');
        $editData=Mobil::find($id);
        return view('owner.edit_mobil', compact('editData'));
       }
    
       public function userUpdate(Request $request){
            $validateData=$request->validate([
                'id'=>'required|unique:mobil',
                // 'textNama'=>'required',
            ]);
    
            $data = Mobil::find($id);
            $data = 
            // $data->usertype=$request->selectUser;
            // $data->name=$request->textNama;
            // $data->email=$request->email;
            // if($request->password!=""){
            //     $data->password=bcrypt($request->password);
            // }
            $data->save();
    
    
            return redirect()->route('user.view')->with('fire','Tambah user berhasil');
        }

        
}
