@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-2">
                <li class="breadcrumb-item"><a href="{{ route('departments.index') }}">Departemen</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Departemen</li>
            </ol>
        </nav>
        <div class="card m-5 p-4 shadow">
            <h2 class="card-header bg-light mb-2">Edit Departemen</h2>
            <div class="card-body mb-2">
                <form action="{{ route('departments.update', $department->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nama:</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $department->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi:</label>
                        <input type="text" class="form-control" id="description" name="description"
                            value="{{ $department->description }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
