@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <a href="{{ route('rumah.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Rumah</a>
    <table class="table-auto w-full mt-4">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Lokasi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rumahs as $rumah)
                <tr>
                    <td>{{ $rumah->nama }}</td>
                    <td>{{ $rumah->lokasi }}</td>
                    <td>{{ $rumah->harga }}</td>
                    <td>
                        <a href="{{ route('rumah.edit', $rumah) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                        <form action="{{ route('rumah.destroy', $rumah) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                        </form>
                        <form action="{{ route('rumah.index') }}" method="GET">
                            <input type="text" name="search" placeholder="Cari Rumah...">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded">Search</button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
