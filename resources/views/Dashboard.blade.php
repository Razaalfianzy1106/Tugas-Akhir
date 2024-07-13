@extends('Master')

@section('card')
    <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <a href="/TRPL" class="text-decoration-none">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Mahasiswa</p>
                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{ $Jml_pdd }}</h3>
                            <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <a href="/DosenTRPL" class="text-decoration-none">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">kartu Keluarga</p>
                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{ $Jml_kk }}</h3>
                            <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <a href="/MatkulTRPL" class="text-decoration-none">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Laki-laki</p>
                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            {{-- <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{ $Jml_lk }}</h3> --}}
                            <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <a href="/NilaiTRPL"  class="text-decoration-none">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Perempuan</p>
                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            {{-- <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{ $Jml_pr }}</h3> --}}
                            <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <a href="/TRPL" class="text-decoration-none">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Lahir</p>
                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            {{-- <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{ $Jml_pdd }}</h3> --}}
                            <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <a href="/DosenTRPL" class="text-decoration-none">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Meninggal</p>
                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            {{-- <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{ $Jml_kk }}</h3> --}}
                            <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <a href="/MatkulTRPL" class="text-decoration-none">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Pendatang</p>
                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            {{-- <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{ $Jml_lk }}</h3> --}}
                            <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <a href="/NilaiTRPL"  class="text-decoration-none">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Pindah</p>
                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            {{-- <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{ $Jml_pr }}</h3> --}}
                            <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
