@extends('layouts.app')

@section('title', 'Register Page')

@section('content')
<div class="bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-xl font-bold mb-4">Register</h2>
    <form action="/contact" method="GET">
        <div class="mb-4">
            <label for="name" class="block text-sm">Name:</label>
            <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm">Email:</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm">Password:</label>
            <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Register</button>
    </form>
</div>
@endsection
