@extends('master')

@section('content')
    <div class="card-body">
        <h4 class="card-title text-center">Input Data Kartu Keluarga</h4>
        <form id="ins_kk" method="POST" action="{{ route('kk.insKartuKeluarga') }}" enctype="multipart/form-data">

            @csrf
            <p class="card-description">Family Card Info</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="No_KK" class="col-sm-3 col-form-label">Nomor KK</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="No_KK" name="No_KK" required />
                        </div>
                        @error('No_KK')
                            <div class="text-danger">{{ $message }} <br></div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="Kepala_Keluarga" class="col-sm-3 col-form-label">Kepala Keluarga</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Kepala_Keluarga" name="Kepala_Keluarga" required />
                        </div>
                        @error('Kepala_Keluarga')
                            <div class="text-danger">{{ $message }} <br></div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="Desa" class="col-sm-3 col-form-label">Desa</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Desa" name="Desa" required />
                        </div>
                        @error('Desa')
                            <div class="text-danger">{{ $message }} <br></div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="RT" class="col-sm-3 col-form-label">RT</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="RT" name="RT" required />
                        </div>
                        @error('RT')
                            <div class="text-danger">{{ $message }} <br></div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="RW" class="col-sm-3 col-form-label">RW</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="RW" name="RW" required />
                        </div>
                        @error('RW')
                            <div class="text-danger">{{ $message }} <br></div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="Kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Kecamatan" name="Kecamatan" required />
                        </div>
                        @error('Kecamatan')
                            <div class="text-danger">{{ $message }} <br></div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="Kabupaten" class="col-sm-3 col-form-label">Kabupaten</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Kabupaten" name="Kabupaten" required />
                        </div>
                        @error('Kabupaten')
                            <div class="text-danger">{{ $message }} <br></div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="Provinsi" class="col-sm-3 col-form-label">Provinsi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Provinsi" name="Provinsi" required />
                        </div>
                        @error('Provinsi')
                            <div class="text-danger">{{ $message }} <br></div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="foto" class="col-sm-3 col-form-label">Foto</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="foto" name="foto" />
                        </div>
                        @error('foto')
                            <div class="text-danger">{{ $message }} <br></div>
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
