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
            <div class="form-group">
                <label for="department_id">Departemen:</label>
                <select name="department_id" id="department_id" class="form-control">
                    <option value="" selected disabled>Pilih Departemen</option>
                    @foreach ($department as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
