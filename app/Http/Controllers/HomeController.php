<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Kerjaan;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::user()->id;

        $kerjaan = Kerjaan::where('status', 0)->get();
        $kerjaan2 = Kerjaan::where('status', 1)->where('user_id',$id)->get();
        $karyawan = User::where('role', 'karyawan')->get();
        return view('home', ['kerjaan'=>$kerjaan, 'kerjaan2'=>$kerjaan2, 'karyawan'=>$karyawan]);
    }
}
