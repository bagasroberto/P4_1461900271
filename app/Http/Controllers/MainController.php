<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainControll extends Controller
{
   public function index(){
        return view('index0271');
    }
    public function databuku(){
        return view('databuku0271');
    }
    public function rakbuku(){
        return view('rakbuku0271');
    }   
        public function datauser(){
        return view('datauser0271');
    }  
        public function create(){
            return view('tambah_data');
        }

        public function store(Request $request){
            
        }
}
