@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="text-center">
        <h1 class="text-4xl font-bold mb-6">Welcome to My Simple Web</h1>
        <p class="text-lg mb-4">This is a simple Laravel application with Tailwind CSS.</p>

        <div class="flex justify-center space-x-4">
            <a href="{{ url('/login') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Login</a>
            <a href="{{ url('/register') }}" class="bg-green-500 text-white px-4 py-2 rounded">Register</a>
            <a href="{{ url('/contact') }}" class="bg-purple-500 text-white px-4 py-2 rounded">Contact</a>
        </div>
    </div>
@endsection
