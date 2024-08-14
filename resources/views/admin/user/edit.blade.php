@extends('admin.layout')

@section('title', 'Manage Programs')

@section('content')
<h1>Edit User</h1>

@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('admin.user.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <small>Leave blank to keep the current password</small>
    </div>
    <div>
        <label for="role">Role:</label>
        <select id="role" name="role" required>
            <option value="">Select a role</option>
            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
        </select>
    </div>
    <div>
        <button type="submit">Update User</button>
    </div>
</form>
@endsection