@extends('app')

@section('title', 'Home')

@section('content')

<form action="/documentations" method = "POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
        <label for="title" class="block text-gray-700 font-bold mb-2">Nama Dokumen/Gambar</label>
        <input type="text" name="title" id="title" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
    </div>
    <div class="mb-4">
        <label for="attachment" class="block text-gray-700 font-bold mb-2">Pilih File (PDF, DOCX, JPG, PNG. MAKS. 5MB)</label>
        <input type="file" name="attachment" id="" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
    </div>
    
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload</button>


@endsection