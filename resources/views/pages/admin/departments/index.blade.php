@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4 px-5">
        <h2 class="card-header bg-light mt-3 mb-1 shadow">Daftar Departemen</h2>
        <a class="btn btn-success my-2" href="{{ route('departments.create') }}">
            <i class="fa-solid fa-square-plus"></i>
            Tambah Departemen
        </a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="card shadow mb-5">
            <div class="card-body table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($data as $index => $item)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <form action="{{ route('departments.destroy', $item->id) }}" method="POST">
                                    <div class="d-flex flex-column text-center d-md-block">
                                        <a class="btn btn-secondary mb-1 mb-md-0"
                                            href="{{ route('departments.edit', $item->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
