@extends('layouts.app')

@section('content')
    <h1>Tambah Jurnal</h1>
    <form action="{{ route('jurnal.store') }}" method="POST">
        @csrf
        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul" required>

        <label for="abstrak">Abstrak:</label>
        <textarea id="abstrak" name="abstrak" required></textarea>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required>

        <label for="keyword">Keyword:</label>
        <input type="text" id="keyword" name="keyword" required>

        <label for="halaman">Halaman:</label>
        <input type="number" id="halaman" name="halaman" required>

        <label for="date_publish">Tanggal Publish:</label>
        <input type="date" id="date_publish" name="date_publish" required>

        <label for="file">File:</label>
        <input type="file" id="file" name="file" required>

        <button type="submit">Kirim</button>
    </form>
@endsection