@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Tambah Pegawai</h2>

        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="position">Jabatan:</label>
                <input type="text" class="form-control" id="position" name="position" required>
            </div>
            <div class="form-group">
                <label for="salary">Gaji:</label>
                <input type="text" class="form-control" id="salary" name="salary" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
