<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    public function index()
    {
        $jurnals = Jurnal::all(); // Ambil semua data jurnal
        return view('jurnal.index', compact('jurnals')); // Kirim data ke view
    }

    public function create()
    {
        return view('jurnal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'abstrak' => 'required|string',
            'author' => 'required|string',
            'keyword' => 'required|string',
            'halaman' => 'required|integer',
            'date_publish' => 'required|date',
            'file' => 'required|mimes:pdf,docx,doc|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('files'), $fileName);
            $jurnal = Jurnal::create([
                'judul' => $request->judul,
                'abstrak' => $request->abstrak,
                'author' => $request->author,
                'keyword' => $request->keyword,
                'halaman' => $request->halaman,
                'date_publish' => $request->date_publish,
                'file' => $fileName,
            ]);
        }

        return redirect()->route('jurnal.index')->with('success', 'Jurnal berhasil ditambahkan.');
    }
}