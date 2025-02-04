@extends('layouts.app')

@section('content')
    <h1>Daftar Kategori</h1>
    <a href="{{ route('kategori.create') }}">Tambah Kategori</a>
    <table>
        <thead>
            <tr>
                <th>Nama Kategori Jurnal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kategoris as $kategori)
                <tr>
                    <td>{{ $kategori->nama_kategori_jurnal }}</td>
                    <td>
                        <a href="{{ route('kategori.edit', $kategori->id) }}">Edit</a>
                        <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection