<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\provinsi;
use App\kota;


class APIController extends Controller
{
    public function index(){
      return view('index');
    }

    public function cariProvinsi(Request $request){
      $provinsi = provinsi::find($request->id);
      return view('provinsi', compact('provinsi'));
    }

    public function cariKota(Request $request){
      $kota = kota::find($request->id);
      return view('kota', compact('kota'));
    }
}
