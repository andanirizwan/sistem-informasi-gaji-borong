<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Kerjaan;
use App\User;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = Kerjaan::all();
        return view('laporan', ['laporan'=>$laporan]);
    }
}
