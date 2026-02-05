@extends('layouts.app');
@section('title', 'Register');

@section('content')

<h2 class="text-xl mb-4">Register</h2>

<form method="POST" action="/register" class="space-y-3">
    @csrf

    <input name="name" placeholder="Name" class="border p-2 w-full">
    <input name="email" type="email" placeholder="Email" class="border p-2 w-full">

    <input name="password" type="password" placeholder="Password" class="border p-2 w-full">
    <input name="password_confirmation" type="password" placeholder="Confirm Password" class="border p-2 w-full">

    <button class="bg-green-500 text-white px-4 py-2 rounded">
        Register
    </button>
</form>
@endsection