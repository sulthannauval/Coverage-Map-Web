@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Log</h1>
    <table class="table table-hover">
        <tr>
            <th>ID Log</th>
            <td>{{ $log->id_log }}</td>
        </tr>
        <tr>
            <th>Tanggal</th>
            <td>{{ $log->tanggal }}</td>
        </tr>
        <tr>
            <th>Admin</th>
            <td>{{ $log->admin->nama }}</td>
        </tr>
        <tr>
            <th>Aksi</th>
            <td>{{ $log->aksi->nama_aksi }}</td>
        </tr>
        <!-- Menambahkan kondisi berdasarkan id_aksi -->
        @if($log->aksi->id_aksi == 1 || $log->aksi->id_aksi == 2)
        <tr>
            <th>Nama Pemancar</th>
            <td>{{ $log->pemancar->nama_pemancar }}</td>
        </tr>
        <tr>
            <th>Provinsi</th>
            <td>{{ $log->pemancar->provinsi }}</td>
        </tr>
        <tr>
            <th>Latitude</th>
            <td>{{ $log->pemancar->latitude }}</td>
        </tr>
        <tr>
            <th>Longitude</th>
            <td>{{ $log->pemancar->longitude }}</td>
        </tr>
        @elseif($log->aksi->id_aksi == 3)
        <tr>
            <th>Nama File</th>
            <td>{{ $log->upload->nama_file }}</td>
        </tr>
        <tr>
            <th>Path File</th>
            <td>{{ $log->upload->path_file }}</td>
        </tr>
        @endif
        <tr>
            <th>Deskripsi Aksi</th>
            <td>{{ $log->deskripsi_aksi }}</td>
        </tr>
    </table>

    <a href="{{ route('histories') }}" class="btn btn-primary">Kembali ke Daftar Log</a>
</div>
@endsection