<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;


class NilaiCon extends Controller
{
    public function index()
    {
        if(Auth::user()->role == 'admin'){
            $nilai = DB::table('nilai')->join('users','users.id','=','nilai.iduser')->get();
            return view('nilai',['nilai' => $nilai]);
        }else{
            $nilai = DB::table('nilai')->join('users','users.id','=','nilai.iduser')->where('iduser',Auth::user('id'))->get();
        }
    }
    public function storeupdate(Request $request)
    {
        DB::table('nilai')->where('idnilai',$request->idnnilai)->update([
            'status' => 'selesai',
            'nilai' => $request->nilai
        ]);
        return redirect('/nilai');
    }

    public function storenput(Request $request)
    {
        DB::table('nilai')->insert([
            'idsoal' => $request->idsoal,
            'iduser' => Auth::user()->id,
            'jawabansoal' => $request->jawabansoal,
            'status' => 'Menunggu Penilaian',
            'nilai'=> '0'
        ]);

        Session::flash('message','Input wis bener');
        return redirect('/nilai');
    }
}
