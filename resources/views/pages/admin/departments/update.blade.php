@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Edit Departemen</h2>

        <form action="{{ route('departments.update', $department->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $department->name }}"
                    required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi:</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ $department->description }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
