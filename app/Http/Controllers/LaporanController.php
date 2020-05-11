<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(Type $var = null)
    {
        return 'laporan';
    }
}
