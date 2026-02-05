@extends('layouts.app')
@section('title', 'Register')

@section('register')

<h2 class="text-xl mb-4 text-center">Register</h2>

<form method="POST" action="/register" class="space-y-3">
    @csrf


    <input name="name" type="text" placeholder="Name" class="bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 shadow-sm p-2 w-full rounded-md px-2 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300  focus:shadow">
    <input name="email" type="email" placeholder="Email" class="bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 shadow-sm p-2 w-full rounded-md px-2 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300  focus:shadow">
    <input name="password" type="password" placeholder="Password" class="bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 shadow-sm p-2 w-full rounded-md px-2 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300  focus:shadow">
    <input name="password_confirmation" type="password" placeholder="Confirm Password" class="bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 shadow-sm p-2 w-full rounded-md px-2 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300  focus:shadow">

    <button class="bg-blue-500 text-white px-4 py-2 mt-2 rounded-md w-full hover:bg-blue-600 transition duration-300 ease cursor-pointer">
        Register
    </button>
</form>
@endsection