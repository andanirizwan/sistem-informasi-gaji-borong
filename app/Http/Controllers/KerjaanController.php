<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Kerjaan;
use App\User;

class KerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kerjaan = Kerjaan::all();
        return view('kerjaan', ['kerjaan'=>$kerjaan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_kerjaan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'file' => 'mimes:jpg,jpeg,png|max:2000'
        ]);

        //upload
        $name_barang = time() .'.jpg';
        $request->file('foto')->storeAs('public', $name_barang);

        if ($request->jenis == 'plastik') {
            $gaji = $request->qty * 20;
        } elseif($request->jenis == 'kardus') {
            $gaji = $request->qty * 50;
        }else{
            $gaji = $request->qty * 80;
        }
        

        $kerjaan = new Kerjaan;
        $kerjaan->barang = $request->barang;
        $kerjaan->jenis = $request->jenis;
        $kerjaan->qty = $request->qty;
        $kerjaan->harga = $request->harga;
        $kerjaan->gaji = $gaji;
        $kerjaan->gaji = '0';
        $kerjaan->foto = $name_barang;
        $kerjaan->status = '1';
        $kerjaan->user_id = Auth::user()->id;

        $kerjaan->save();

        return redirect('/kerjaan');
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
