@extends('app')

@section('content')

<h1 class="text-2xl font-bold mb-4">Edit Campaign</h1>

<form action="/campaign/{{ $campaign->id }}" method="POST" class="space-y-3">
    @csrf
    @method('PUT')

    <div>
        <label class="block text-gray-700">Judul</label>
        <input type="text" name="title" value="{{ $campaign->title }}" class="border p-2 w-full">
    </div>

    <div>
        <label class="block text-gray-700">Deskripsi</label>
        <textarea name="description" class="border p-2 w-full">{{ $campaign->description }}</textarea>
    </div>

    <div>
        <label class="block text-gray-700">Target Donasi</label>
        <input type="number" name="target_donation" value="{{ $campaign->target_donation }}" class="border p-2 w-full">
    </div>

    <div>
        <label class="block text-gray-700">Dana Terkumpul</label>
        <input type="number" name="collected_donation" value="{{ $campaign->collected_donation }}" class="border p-2 w-full">
    </div>

    <div>
        <label class="block text-gray-700">Deadline</label>
        <input type="date" name="deadline" value="{{ $campaign->deadline }}" class="border p-2 w-full">
    </div>

    <div class="pt-4">
       <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
        <a href="/campaign" class="bg-gray-500 text-white px-4 py-2 rounded ml-2">Batal</a>
    </div>
    </div>
</form>

@endsection