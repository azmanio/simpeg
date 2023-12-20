@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="mt-3">Daftar Departemen</h2>
        <a class="btn btn-success my-2" href="{{ route('departments.create') }}">Tambah Departemen</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
            @foreach ($data as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <form action="{{ route('departments.destroy', $item->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('departments.edit', $item->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
