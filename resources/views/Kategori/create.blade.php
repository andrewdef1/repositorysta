@extends('layouts.app')

@section('content')
    <h1>Tambah Kategori</h1>
    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf
        <label for="nama_kategori_jurnal">Nama Kategori Jurnal:</label>
        <input type="text" id="nama_kategori_jurnal" name="nama_kategori_jurnal" required>

        <button type="submit">Kirim</button>
    </form>
@endsection