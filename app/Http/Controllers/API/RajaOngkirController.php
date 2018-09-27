<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use RajaOngkir;
use Validator;

class ProductController extends BaseController
{
    public function index(){
      return view('index');
    }

    public function cariProvinsi(Request $request){
      $provinsi = RajaOngkir::Provinsi()->find($request->id);
      return view('provinsi', compact('provinsi'));
    }

    public function cariKota(Request $request){
      $kota = RajaOngkir::Kota()->find($request->id);
      return view('kota', compact('kota'));
    }

}