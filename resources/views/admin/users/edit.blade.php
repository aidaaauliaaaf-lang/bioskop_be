@extends('layouts.admin')

@section('title', 'Edit User')

@section('content')
<form method="POST" action="/admin/users/{{ $user->id }}"
 class="bg-white p-6 rounded shadow w-96">
@csrf @method('PUT')

<input name="name" value="{{ $user->name }}"
 class="border p-2 w-full mb-3">

<input name="email" value="{{ $user->email }}"
 class="border p-2 w-full mb-3">

<button class="bg-green-600 text-white px-4 py-2 rounded">
 Update
</button>

</form>
@endsection
