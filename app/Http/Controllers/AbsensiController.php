<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Absensi;
use App\User;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;

        $absensi = Absensi::where('user_id',$id)->get();
        return view('absensi', ['absensi'=>$absensi]);
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
        $user_id = Auth::user()->id;

        $cek = Absensi::where('waktu', $request->waktu)->where('user_id', $user_id)->get()->first();

        if ($cek == true) {
            return redirect('/home')->with('alert', 'anda sudah absen hari ini');
        } else {

            $absensi = new Absensi;
            $absensi->jam_masuk = $request->jam_masuk;
            $absensi->waktu = $request->waktu;
            $absensi->user_id = $user_id;

            $absensi->save();
            return redirect('/home')->with('alert', 'absen berhasil');
        }  
            
            
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
