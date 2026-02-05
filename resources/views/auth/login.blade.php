@extends('layouts.app')

@section('title', 'Login')

@section('content')
<h2 class="text-xl mb-4">Login</h2>

<form method="POST" action="/login" class="space-y-3">
    @csrf

    <input name="email" type="email" placeholder="Email" class="border p-2 w-full">
    <input name="password" type="password" placeholder="Password" class="border p-2 w-full">

    <button class="bg-blue-500 text-white px-4 py-2 rounded">
        Login
    </button>
</form>
@endsection
