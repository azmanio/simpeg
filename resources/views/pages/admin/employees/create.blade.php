@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-2">
                <li class="breadcrumb-item"><a href="{{ route('employees.index') }}">Pegawai</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Pegawai</li>
            </ol>
        </nav>
        <div class="card my-4 mx-5 p-4 shadow">
            <h2 class="card-header bg-light mb-2">Tambah Pegawai</h2>
            <div class="card-body">
                <form action="{{ route('employees.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nip">NIP:</label>
                        <input type="number" class="form-control" id="nip" name="nip" required>
                    </div>
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
                        <input type="number" class="form-control" id="salary" name="salary" required>
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
        </div>
    </div>
@endsection
