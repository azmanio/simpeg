@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4 px-5">
        <h2 class="card-header bg-light mt-3 mb-1 shadow">Daftar Pegawai</h2>
        <a class="btn btn-success my-2" href="{{ route('employees.create') }}">
            <i class="fa-solid fa-user-plus"></i>
            Tambah Pegawai
        </a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="card shadow mb-5">
            <div class="card-body table-responsive">
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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($data as $index => $item)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $item->nip }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->position }}</td>
                            <td>{{ $item->salary }}</td>
                            <td>{{ $item->department ? $item->department->name : '-' }}</td>
                            <td class="text-center">
                                <div class="custom-control custom-switch">
                                    <input onclick="window.location.href='{{ route('employees.status', $item) }}'"
                                        {{ $item->status ? 'checked' : '' }} type="checkbox" class="custom-control-input"
                                        id="customSwitch{{ $index }}">
                                    <label class="custom-control-label" for="customSwitch{{ $index }}">
                                        {{ $item->status ? 'Aktif' : 'Cuti' }}
                                    </label>
                                </div>
                            </td>
                            <td>
                                <form action="{{ route('employees.destroy', $item->id) }}" method="POST">
                                    <div class="d-flex flex-column text-center d-md-block">
                                        <a class="btn btn-secondary mb-1 mb-md-0"
                                            href="{{ route('employees.edit', $item->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
