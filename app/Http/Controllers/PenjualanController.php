<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = DB::table('penjualans')->get();

        return view ('PenjualanKomputer.penjualan', 
        ['penjualans' => $penjualan]);

    }
}
