<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class KokiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->tombol == 'Tambah'){
            $hasil = $pertama + $kedua;
        }
        $pesanan = Pesanan::all();
        return view('koki.index',compact('pesanan'));
    }
    public function filter(Request $request)
    {
        $pertama = $request->pertama;
        $kedua = $request->kedua;
        $pesanan = Pesanan::whereBetween('tgl_pesan',[$pertama,$kedua])->get();
        return view('koki.index',compact('pesanan'));
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
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $data = Pesanan::where('kd_pesanan',$id)->first();
        $data->update([
            'keterangan'=>'sedang di proses']);
            return redirect()->back();
        // return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pesanan::where('kd_pesanan',$id)->first();
        $data->update([
            'keterangan'=>'selesai di proses']);
            return redirect()->back();
    }
    
}
