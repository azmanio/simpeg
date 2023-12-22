@extends('layouts.home')

@section('content')
    <div class="container-fluid my-5">
        <div class="card mx-4">
            <div class="card-body shadow">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('assets/img/main-image.jpg') }}" alt="Main Image" class="img-fluid"
                            style="width: 90%">
                    </div>
                    <div class="col-md-6 text-center">
                        <h1 class="mb-4">Sistem Informasi Manajemen Pegawai</h1>
                        <p>
                            Selamat datang di Sistem Informasi Manajemen Pegawai (SIMPEG). SIMPEG adalah sistem yang
                            dirancang untuk memudahkan manajemen data pegawai dan departemen dalam suatu organisasi.
                        </p>
                        <p>
                            Dengan SIMPEG, Anda dapat dengan mudah mengelola informasi pegawai, data departemen, dan melihat
                            statistik secara cepat melalui dashboard admin.
                        </p>

                        <h4 class="pt-4">Cari Data</h4>
                        <form action="{{ route('search') }}" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Masukkan Nama Pegawai/Departemen"
                                    name="search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
