@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-2">
                <li class="breadcrumb-item"><a href="{{ route('employees.index') }}">Pegawai</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Pegawai</li>
            </ol>
        </nav>
        <div class="card m-5 p-4 shadow">
            <h2 class="card-header bg-light mb-2">Edit Pegawai</h2>
            <div class="card-body mb-2">
                <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nip">NIP:</label>
                        <input type="text" class="form-control" id="nip" name="nip"
                            value="{{ $employee->nip }}" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama:</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $employee->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="position">Jabatan:</label>
                        <input type="text" class="form-control" id="position" name="position"
                            value="{{ $employee->position }}" required>
                    </div>
                    <div class="form-group">
                        <label for="salary">Gaji:</label>
                        <input type="text" class="form-control" id="salary" name="salary"
                            value="{{ $employee->salary }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
