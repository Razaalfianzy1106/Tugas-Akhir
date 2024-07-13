@extends('master')

@section('content')
<div class="table-responsive p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="kartu-title kartu-link">Data Penduduk</h4>
        <a class="btn btn-outline-primary" href="{{ route('penduduk.tmbhPenduduk') }}">
            <i class="fa-sharp fa-solid fa-plus"> Tambah Data </i>
        </a>
    </div>
    <table id="example" class="display table table-bordered table-hover text-center" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIK</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Desa</th>
                <th>RT</th>
                <th>RW</th>
                <th>Agama</th>
                <th>Kawin</th>
                <th>Pekerjaan</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dta_penduduk as $pdd)
                <tr>
                    <td>{{ $pdd->id_pend }}</td>
                    <td>{{ $pdd->NIK }}</td>
                    <td class="text-center">
                        <img src="{{ $pdd->Foto }}" width="50px">
                    </td>
                    <td>{{ $pdd->Nama }}</td>
                    <td>{{ $pdd->Tempat_Lahir }}</td>
                    <td>{{ $pdd->Tanggal_Lahir }}</td>
                    <td>{{ $pdd->Jenis_Kelamin }}</td>
                    <td>{{ $pdd->Desa }}</td>
                    <td>{{ $pdd->RT }}</td>
                    <td>{{ $pdd->RW }}</td>
                    <td>{{ $pdd->Agama }}</td>
                    <td>{{ $pdd->Kawin }}</td>
                    <td>{{ $pdd->Pekerjaan }}</td>
                    <td>{{ $pdd->Status }}</td>
                    <td class="action-buttons">
                        <a href="/EditTRPL/{{ $pdd->NIK }}">
                            <i class="fa-regular fa-pen-to-square fa-xl" style="color: #63E6BE;"></i>
                        </a>
                        <a href="/DelTRPL/{{ $pdd->NIK }}" class="ms-3">
                            <i class="fa-solid fa-trash fa-xl" style="color: #f00018;"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
