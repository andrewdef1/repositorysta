<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VersiController extends Controller
{
    public function indonesia()
    {
        // Kode untuk menangani permintaan ke versi Indonesia
        return view('versi-indonesia');
    }

    public function english()
    {
        // Kode untuk menangani permintaan ke versi English
        return view('versi-english');
    }
}