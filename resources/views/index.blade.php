@extends('layouts.app')

@section('content')
    <h2>Users List</h2>
    <a href="{{ route('users.create') }}"> Create User </a>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                    <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                        @csrf @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
  