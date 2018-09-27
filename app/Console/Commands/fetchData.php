<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Kota;
use App\Provinsi;
use RajaOngkir;

class fetchData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menyimpan data provinsi dan kota ke dalam database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $provinsi = RajaOngkir::Provinsi()->all();
      provinsi::truncate();
      while($provinsi){
        $data = new provinsi;
        $data->province = $provinsi['province'];
        $data->save();
      }
       $this->info("Seluruh Data Provinsi Tersimpan");


      $kota = RajaOngkir::Kota()->all();
      kota::truncate();
      while($kota) {
        $data = new kota;
        $data->province_id = $kota['province_id'];
        $data->province = $kota['province'];
        $data->type = $kota['type'];
        $data->city_name = $kota['city_name'];
        $data->postal_code = $kota['postal_code'];
        $data->save();
      }
        $this->info("Seluruh Data Kota Tersimpan");

      $this->info('Pengambilan Data Berhasil');
    }
}
