@extends('app')

@section('title', 'Home')

@section('content')

<div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md">
    
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/documentation" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Nama Dokumen/Gambar</label>
            <input type="text" name="title" id="title" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <div class="mb-4">
            <label for="attachment" class="block text-gray-700 font-bold mb-2">Pilih File (PDF, DOCX, JPG, PNG. MAKS. 5MB)</label>
            <input type="file" name="attachment" id="attachment" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-6">Upload</button>
    </form> <hr class="my-8 border-gray-200">

    <div class="mt-8">
        <h3 class="text-xl font-bold mb-4 text-gray-800">Daftar File & Preview</h3>
        
        @if($files->isEmpty())
            <p class="text-gray-500 italic text-center py-4 bg-gray-50 rounded-lg">Belum ada dokumen yang diunggah.</p>
        @else
            <div class="overflow-x-auto">
                <table class="w-full table-auto border-collapse text-left text-sm text-gray-600">
                    <thead>
                        <tr class="bg-gray-100 text-gray-700 uppercase text-xs">
                            <th class="px-4 py-3 border-b font-bold">No</th>
                            <th class="px-4 py-3 border-b font-bold">Nama Dokumen</th>
                            <th class="px-4 py-3 border-b font-bold">Preview</th>
                            <th class="px-4 py-3 border-b font-bold">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($files as $index => $file)
                            @php
                                $extension = pathinfo($file->file_path, PATHINFO_EXTENSION);
                                $isImage = in_array(strtolower($extension), ['jpeg', 'jpg', 'png', 'gif']);
                            @endphp
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-4 py-4 align-top font-medium">{{ $index + 1 }}</td>
                                <td class="px-4 py-4 align-top font-medium text-gray-900">{{ $file->title }}</td>
                                <td class="px-4 py-4 align-top">
                                    @if($isImage)
                                        <div class="w-40 h-24 rounded border overflow-hidden bg-gray-100 shadow-sm">
                                            <img src="{{ asset('storage/' . $file->file_path) }}" alt="{{ $file->title }}" class="w-full h-full object-cover">
                                        </div>
                                    @elseif(strtolower($extension) === 'pdf')
                                        <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-semibold bg-red-100 text-red-800">
                                            📄 Dokumen PDF
                                        </span>
                                    @else
                                        <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-semibold bg-blue-100 text-blue-800">
                                            📝 Dokumen Word (.docx)
                                        </span>
                                    @endif
                                </td>
                                <td class="px-4 py-4 align-top">
                                    <a href="{{ asset('storage/' . $file->file_path) }}" target="_blank" class="text-blue-600 hover:text-blue-800 font-semibold inline-flex items-center">
                                        Lihat / Unduh
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>

@endsection