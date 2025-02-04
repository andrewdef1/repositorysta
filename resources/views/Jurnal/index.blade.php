<x-app-layout>
@extends('layouts.app')

@section('content')
    <h1>Daftar Jurnal</h1>
    <a href="{{ route('jurnal.create') }}">Tambah Jurnal</a>
    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Abstrak</th>
                <th>Author</th>
                <th>Keyword</th>
                <th>Halaman</th>
                <th>Tanggal Publish</th>
                <th>File</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jurnals as $jurnal)
                <tr>
                    <td>{{ $jurnal->judul }}</td>
                    <td>{{ $jurnal->abstrak }}</td>
                    <td>{{ $jurnal->author }}</td>
                    <td>{{ $jurnal->keyword }}</td>
                    <td>{{ $jurnal->halaman }}</td>
                    <td>{{ $jurnal->date_publish }}</td>
                    <td>{{ $jurnal->file }}</td>
                    <td>
                        <a href="{{ route('jurnal.edit', $jurnal->id) }}">Edit</a>
                        <form action="{{ route('jurnal.destroy', $jurnal->id) }}" method="POST" style="display:inline;">
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
</x-app-layout>