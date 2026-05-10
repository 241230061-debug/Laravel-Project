@extends('app')

@section('content')

<form action="/campaign" method="POST" class="space-y-3">
    @csrf

    <input type="text" name="title" placeholder="Judul" class="border p-2 w-full">
    <textarea name="description" placeholder="Deskripsi" class="border p-2 w-full"></textarea>
    <input type="number" name="target_donation" placeholder="Target Donasi" class="border p-2 w-full">
    <input type="number" name="collected_donation" placeholder="Dana Terkumpul" class="border p-2 w-full">
    <input type="date" name="deadline" class="border p-2 w-full">

    <button class="bg-green-500 text-white px-4 py-2">Simpan</button>
    <a href="/campaign" class="bg-gray-500 text-white px-4 py-2 rounded ml-2">Batal</a>
</form>

@endsection