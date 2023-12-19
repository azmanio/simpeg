@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Daftar Pegawai</h2>
        <a class="btn btn-success" href="{{ route('employees.create') }}">Tambah Pegawai</a>

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
                <th>Action</th>
            </tr>
            @foreach ($employees as $index => $employee)
                <tr>
                    <td>{{ ++$index }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>{{ $employee->salary }}</td>
                    <td>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('employees.show', $employee->id) }}">Detail</a>
                            <a class="btn btn-primary" href="{{ route('employees.edit', $employee->id) }}">Edit</a>
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
