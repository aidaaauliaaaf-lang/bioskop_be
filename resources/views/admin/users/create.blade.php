@extends('layouts.admin')

@section('title', 'Create User')

@section('content')
<form method="POST" action="/admin/users" class="bg-white p-6 rounded shadow w-96">
@csrf

<input name="name" placeholder="Name"
 class="border p-2 w-full mb-3">

<input name="email" placeholder="Email"
 class="border p-2 w-full mb-3">

<input name="password" type="password" placeholder="Password"
 class="border p-2 w-full mb-3">

<button class="bg-blue-600 text-white px-4 py-2 rounded">
 Save
</button>

</form>
@endsection
