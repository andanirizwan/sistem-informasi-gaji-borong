<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Kerjaan;
use App\User;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        

        $id = Auth::user()->id;
        $waktu1 = $request->waktu1;
        $waktu2 = $request->waktu2;

        if ($request->waktu1) {
            $laporan = Kerjaan::where('status', 1)
                                ->where('user_id', $id)
                                ->whereDate('updated_at', '>=' , $waktu1)
                                ->whereDate('updated_at', '<=' , $waktu2)
                                ->get();

            $gaji = Kerjaan::where('status', 1)
                            ->where('user_id', $id)
                            ->whereDate('updated_at', '>=' , $waktu1)
                            ->whereDate('updated_at', '<=' , $waktu2)
                            ->sum('gaji');
            $insentif = Kerjaan::where('status', 1)
                            ->where('user_id', $id)
                            ->whereDate('updated_at', '>=' , $waktu1)
                            ->whereDate('updated_at', '<=' , $waktu2)
                            ->sum('insentif');

            $total = $gaji + $insentif;

            return view('laporan', ['laporan'=>$laporan, 'total'=>$total]);

        } else {
            $laporan = Kerjaan::where('status', 1)->where('user_id', $id)->get();
            return view('laporan', ['laporan'=>$laporan]);
        }
        
        
        
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
