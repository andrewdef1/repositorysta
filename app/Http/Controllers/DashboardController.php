<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurnal; // Pastikan model Jurnal sudah di-import

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung total jurnal yang sudah dipublikasikan
        $totalJurnalPublish = Jurnal::where('status', 'published')->count();

        return view('dashboard', compact('totalJurnalPublish'));
    }
}