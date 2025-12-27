@extends('layouts.admin')

@section('title', 'Users')

@section('content')
<a href="/admin/users/create"
   class="bg-blue-600 text-white px-4 py-2 rounded">
   Add User
</a>

<table class="mt-4 w-full bg-white shadow rounded">
    <tr class="bg-gray-200">
        <th class="p-2">Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    @foreach($users as $user)
    <tr class="border-t">
        <td class="p-2">{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td class="p-2">
            <a href="/admin/users/{{ $user->id }}/edit"
               class="text-blue-500">Edit</a>

            <form action="/admin/users/{{ $user->id }}"
                  method="POST" class="inline">
                @csrf @method('DELETE')
                <button class="text-red-500"
                        onclick="return confirm('Delete?')">
                        Delete
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
