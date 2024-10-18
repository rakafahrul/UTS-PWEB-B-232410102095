@extends('layouts.app')

@section('title', 'Contact Page')

@section('content')
<div class="bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-xl font-bold mb-4">Contact List</h2>

    <table class="table-auto w-full border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Role</th>
                <th class="border px-4 py-2">Email</th>
            </tr>
        </thead>
        <tbody>
            @php
                $contacts = [
                    ['name' => 'John Doe', 'role' => 'Mahasiswa', 'email' => 'john@example.com'],
                    ['name' => 'Jane Smith', 'role' => 'Karyawan', 'email' => 'jane@example.com'],
                    ['name' => 'Mike Johnson', 'role' => 'Dosen', 'email' => 'mike@example.com'],
                ];
            @endphp
            @foreach($contacts as $contact)
                <tr>
                    <td class="border px-4 py-2">{{ $contact['name'] }}</td>
                    <td class="border px-4 py-2">{{ $contact['role'] }}</td>
                    <td class="border px-4 py-2">{{ $contact['email'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
