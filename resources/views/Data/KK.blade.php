@extends('master')

@section('content')
<div class="table-responsive p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="kartu-title kartu-link">Data Kartu Keluarga</h4>
        <a class="btn btn-outline-primary" href="{{ route('tmbh_kk') }}">
            <i class="fa-sharp fa-solid fa-plus"> Tambah Data </i>
        </a>
    </div>
    <table id="example" class="display table table-bordered table-hover text-center" style="width:100%">
        <thead>
            <tr>
                <th>No. KK</th>
                <th>Foto</th>
                <th>Kepala Keluarga</th>
                <th>Desa</th>
                <th>RT</th>
                <th>RW</th>
                <th>Kecamatan</th>
                <th>Kabupaten</th>
                <th>Provinsi</th>
                <!-- Add other headers as needed -->
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dta_kk as $kk)
                <tr>
                    <td>{{ $kk->No_KK }}</td>
                    <td>
                        @if ($kk->Foto)
                            <img src="{{ asset($kk->Foto) }}" width="50px" />
                        @else
                            No Photo
                        @endif
                    </td>
                    <td>{{ $kk->Kepala_Keluarga }}</td>
                    <td>{{ $kk->Desa }}</td>
                    <td>{{ $kk->RT }}</td>
                    <td>{{ $kk->RW }}</td>
                    <td>{{ $kk->Kecamatan }}</td>
                    <td>{{ $kk->Kabupaten }}</td>
                    <td>{{ $kk->Provinsi }}</td>
                    <!-- Add other columns as needed -->
                    <td>
                        <a href="{{ url('/edit_kk/' . $kk->No_KK) }}">
                            <i class="fa-regular fa-pen-to-square fa-xl" style="color: #63E6BE;"></i>
                        </a>
                        <a href="{{ url('/del_kk/' . $kk->No_KK) }}" class="ms-3">
                            <i class="fa-solid fa-trash fa-xl" style="color: #f00018;"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
