<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function auth(Request $request){
        $username = $request->username;
        $password = $request->password;
        $data= Pegawai::where('username',$username)->first();
        if ($data) {
                    Session::put('username',$data->username);
                    Session::put('jabatan',$data->jabatan);
                    Session::put('login',TRUE);
            if ($data->password == $password ){
                if ($data->jabatan == 'admin') {
                    return redirect('pegawai');
                }else{
                    return redirect('koki');
                }
                
            }else{
                return "password salah";
            }
        }else{
            return "user tidak ditemukan";
        }

    }
    public function logout()
    {
        Session::put('login',FALSE);
        Session::put('loginError',FALSE);
        

        return redirect('pesanan');
    }
    public function index()
    {
        //
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
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        //
    }
    
}
