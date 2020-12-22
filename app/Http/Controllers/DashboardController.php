<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $masterbarang = DB::table('masterbarangs')->get();
        $penjualan = DB::table('penjualans')->get();


        //foreach ($penjualan as $pen){
            //$tglpenjualan [] = $pen->tglpenjualan;
            //$namakonsumen [] = $pen->namakonsumen;
          //  $alamat [] = $pen->alamat;

        //}

       // foreach ($penjualan as $pen) {
       //     echo $tglpenjualan->tglpenjualan;
       //     echo $pnamakonsumenen->namakonsumen;
        //    echo $alamat->alamat;
      // }

        return view ('PenjualanKomputer.dashboard', 
        ['penjualans' => $penjualan, 'masterbarangs' => $masterbarang]);

    }

}
