@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Register</h1>

    <form action="{{ url('/contact') }}" method="GET">
        <div class="mb-4">
            <label class="block text-gray-700">Nama</label>
            <input type="text" class="border rounded w-full py-2 px-3" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" class="border rounded w-full py-2 px-3" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Password</label>
            <input type="password" class="border rounded w-full py-2 px-3" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Register</button>
    </form>
@endsection
