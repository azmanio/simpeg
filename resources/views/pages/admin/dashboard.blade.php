@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-5">
        <div class="card p-3 my-5">
            <div class="card-header bg-dark text-white mt-2">
                <h1>Dashboard</h1>
            </div>
            <div class="row p-3 mb-5">

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body bg-primary text-white shadow rounded">
                            <h1>
                                <i class="fa-solid fa-users"></i>
                            </h1>
                            <h3 class="card-title">Jumlah Pegawai:</h3>
                            <h5 class="card-subtitle mb-5">{{ $employeeCount }}</h5>
                            <a href="{{ route('employees.index') }}" class="card-link text-white">
                                Lihat Detail
                                <i class="fa-solid fa-circle-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body bg-primary text-white shadow rounded">
                            <h1>
                                <i class="fa-solid fa-building"></i>
                            </h1>
                            <h3 class="card-title">Jumlah Departemen:</h3>
                            <h5 class="card-subtitle mb-5">{{ $departmentCount }}</h5>
                            <a href="{{ route('departments.index') }}" class="card-link text-white">
                                Lihat Detail
                                <i class="fa-solid fa-circle-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body bg-primary text-white shadow rounded">
                            <h1>
                                <i class="fa-solid fa-user-gear"></i>
                            </h1>
                            <h3 class="card-title">Jumlah User:</h3>
                            <h5 class="card-subtitle mb-5">{{ $userCount }}</h5>
                            <a href="{{ route('user.index') }}" class="card-link text-white">
                                Lihat Detail
                                <i class="fa-solid fa-circle-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
