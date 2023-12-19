@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Edit Pegawai</h2>

        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" required>
            </div>
            <div class="form-group">
                <label for="position">Jabatan:</label>
                <input type="text" class="form-control" id="position" name="position" value="{{ $employee->position }}"
                    required>
            </div>
            <div class="form-group">
                <label for="salary">Gaji:</label>
                <input type="text" class="form-control" id="salary" name="salary" value="{{ $employee->salary }}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
