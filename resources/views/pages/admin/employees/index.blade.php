@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="mt-3">Daftar Pegawai</h2>
        <a class="btn btn-success my-2" href="{{ route('employees.create') }}">Tambah Pegawai</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Gaji</th>
                <th>Departemen</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->position }}</td>
                    <td>{{ $item->salary }}</td>
                    <td>{{ $item->department ? $item->department->name : '-' }}</td>
                    <td>
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
                            <a class="btn btn-primary" href="{{ route('employees.edit', $item->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
