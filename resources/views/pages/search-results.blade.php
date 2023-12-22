@extends('layouts.search')

@section('content')
    <div class="container-fluid mt-4">
        <div class="card mx-4">
            <div class="card-body shadow">
                <h4>Cari Data</h4>
                <form action="{{ route('search') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Masukkan Nama Pegawai/Departemen"
                            name="search">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
                <h3 class="mt-3">Hasil Pencarian untuk "{{ $searchTerm }}"</h3>

                @if ($employees->count() > 0)
                    <h5 class="text-center">Nama Pegawai Ditemukan</h5>
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark text-center">
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Gaji</th>
                                <th>Departemen</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        @foreach ($employees as $index => $employee)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ $employee->nip }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->position }}</td>
                                <td>{{ $employee->salary }}</td>
                                <td>{{ $employee->department ? $employee->department->name : '-' }}</td>
                                <td class="text-center">
                                    <div class="custom-control custom-switch">
                                        <input {{ $employee->status ? 'checked' : '' }} type="checkbox"
                                            class="custom-control-input" id="customSwitch{{ $index }}" disabled>
                                        <label class="custom-control-label" for="customSwitch{{ $index }}">
                                            {{ $employee->status ? 'Aktif' : 'Cuti' }}
                                        </label>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                @elseif ($departments->count() > 0)
                    <h5 class="text-center">Nama Departemen Ditemukan</h5>
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                        @foreach ($departments as $index => $department)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ $department->name }}</td>
                                <td>{{ $department->description }}</td>
                            </tr>
                        @endforeach
                    </table>
                @else
                    <p>Tidak ditemukan sesuatu.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
