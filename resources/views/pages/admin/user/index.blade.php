@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="mt-3">Daftar User</h2>
        <a class="btn btn-success my-2" href="{{ route('user.create') }}">Tambah User</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <div class="custom-control custom-switch">
                            <input onclick="window.location.href='{{ route('user.status', $item) }}'"
                                {{ $item->status ? 'checked' : '' }} type="checkbox" class="custom-control-input"
                                id="customSwitch{{ $index }}">
                            <label class="custom-control-label" for="customSwitch{{ $index }}">
                                {{ $item->status ? 'Active' : 'Non Active' }}
                            </label>
                        </div>
                    </td>
                    <td>
                        <form action="{{ route('user.destroy', $item->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('user.edit', $item->id) }}">Edit</a>
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
