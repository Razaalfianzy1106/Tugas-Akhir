@extends('master')

@section('content')
    <div class="card-body">
        <h4 class="card-title text-center">Input Data Penduduk</h4>
        <form id="ins_pdd" method="POST" action="{{ route('penduduk.insPenduduk') }}" enctype="multipart/form-data">

            @csrf
            <p class="card-description">Personal Info</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="NIK" name="NIK" required />
                        </div>
                        @error('NIK')
                            <div class="text-danger">{{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="Nama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Nama" name="Nama" required />
                        </div>
                        @error('Nama')
                            <div class="text-danger">{{ $message }} </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="Tempat_Lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Tempat_Lahir" name="Tempat_Lahir" required />
                        </div>
                        @error('Tempat_Lahir')
                            <div class="text-danger">{{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="Tanggal_Lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="Tanggal_Lahir" name="Tanggal_Lahir" required />
                        </div>
                        @error('Tanggal_Lahir')
                            <div class="text-danger">{{ $message }} </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="Jenis_Kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="Jenis_Kelamin" name="Jenis_Kelamin" required>
                                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                <option value="LK">LK</option>
                                <option value="PR">PR</option>
                            </select>
                        </div>
                        @error('Jenis_Kelamin')
                            <div class="text-danger">{{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="Desa" class="col-sm-3 col-form-label">Desa</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Desa" name="Desa" required />
                        </div>
                        @error('Desa')
                            <div class="text-danger">{{ $message }} </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="RT" class="col-sm-3 col-form-label">RT</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="RT" name="RT" required />
                        </div>
                        @error('RT')
                            <div class="text-danger">{{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="RW" class="col-sm-3 col-form-label">RW</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="RW" name="RW" required />
                        </div>
                        @error('RW')
                            <div class="text-danger">{{ $message }} </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="Agama" class="col-sm-3 col-form-label">Agama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Agama" name="Agama" required />
                        </div>
                        @error('Agama')
                            <div class="text-danger">{{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="Kawin" class="col-sm-3 col-form-label">Status Kawin</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Kawin" name="Kawin" required />
                        </div>
                        @error('Kawin')
                            <div class="text-danger">{{ $message }} </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="Pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Pekerjaan" name="Pekerjaan" required />
                        </div>
                        @error('Pekerjaan')
                            <div class="text-danger">{{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="foto" class="col-sm-3 col-form-label">Foto</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="foto" name="foto" />
                        </div>
                        @error('foto')
                            <div class="text-danger">{{ $message }} </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>
    </div>
@endsection
