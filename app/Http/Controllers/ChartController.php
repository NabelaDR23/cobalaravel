<?php

namespace App\Http\Controllers;

use App\Models\chart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datadiri = DB::table('tbl_datadiri')->get();

        $nama ;

        foreach ($datadiri as $nm){
            $nama [] = $nm->nama;

        }

       // $nama = $datadiri->flatten(3)->pluck('nama');
       // $gaji   = $datadiri->flatten(3)->pluck('gaji');
        //$colors = $labels->map(function($item) {
           // return $rand_color = '#' . substr(md5(mt_rand()), 0, 6);
        //});

        //$chart = new GajiChart;
       // $chart->labels($labels);
       // $chart->dataset('gaji guru', 'pie', $gaji)->backgroundColor($colors);

        return view ('coba.chart', ['tbl_datadiri' => $datadiri, 'nama' => $nama, 'gaji' => $gaji]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
