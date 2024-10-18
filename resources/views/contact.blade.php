@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Daftar Kontak</h1>

    <table class="table-auto w-full bg-white shadow-md rounded">
        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="px-4 py-2">No</th>
                <th class="px-4 py-2">Nama</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Email</th>
            </tr>
        </thead>
        <tbody>
            @php
                $data = [
                    ['nama' => 'Andi', 'status' => 'Mahasiswa', 'email' => 'andi@mail.com'],
                    ['nama' => 'Budi', 'status' => 'Karyawan', 'email' => 'budi@mail.com'],
                    ['nama' => 'Siti', 'status' => 'Dosen', 'email' => 'siti@mail.com'],
                ];
            @endphp
            @foreach($data as $key => $person)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $key + 1 }}</td>
                    <td class="px-4 py-2">{{ $person['nama'] }}</td>
                    <td class="px-4 py-2">{{ $person['status'] }}</td>
                    <td class="px-4 py-2">{{ $person['email'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
