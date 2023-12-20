@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Edit User</h2>

        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? $user->name }}"
                    required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email"
                    value="{{ old('email') ?? $user->email }}" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" class="form-control" id="password" name="password" value="{{ $user->password }}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
