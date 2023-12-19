@extends('layouts.home')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">Dashboard</div>

                    <div class="card-body">
                        <h5 class="card-title">Selamat datang di Sistem Informasi Manajemen Pegawai!</h5>
                        <p class="card-text">Anda dapat mengelola data pegawai dan departemen dengan mudah melalui sistem
                            ini.</p>
                        <a href="{{ route('employees.index') }}" class="btn btn-success">Manajemen Pegawai</a>
                        <a href="" class="btn btn-info">Manajemen Departemen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
