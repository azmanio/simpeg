@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Tambah Departemen</h2>

        <form action="{{ route('departments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi:</label>
                <input type="text" class="form-control" id="description" name="description" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
