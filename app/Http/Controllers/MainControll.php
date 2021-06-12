<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainControll extends Controller
{
   public function index(){
        return view('index0271');
    }
    public function databuku(){
        $item = DB::table('buku')
            ->select('*')
            ->get();
        return view('databuku0271',compact('item'));
    }
    public function datapelanggan(){
        $item = DB::table('pelanggan')
            ->select('*')
            ->get();        
        return view('datapelanggan0271',compact('item'));
    }   
    public function rakbuku(){
        $item = DB::table('rak_buku as t')
            ->select('t.*', 'p.*','b.jenis as NamaBuku')
            ->leftjoin('buku as p', 'p.id', '=', 't.id_buku')
            ->leftjoin('jenis_buku as b', 'b.id', '=', 't.id_jenis_buku')
            ->get();

        return view('rakbuku0271',compact('item'));
    }   
    public function datauser(){
        $item = DB::table('user')
            ->select('*')
            ->get(); 
        return view('datauser0271',compact('item'));
    }  
}
