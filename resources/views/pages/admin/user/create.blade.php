@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Tambah User</h2>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
