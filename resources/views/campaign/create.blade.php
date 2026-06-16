@extends('app')

@section('content')

<form action="/campaign" method="POST" class="max-w-2xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-6">
    @csrf

    <div class="space-y-4">
        <h2 class="text-xl font-bold border-b-2 border-green-500 pb-2">Informasi Kampanye</h2>
        <input type="text" name="title" placeholder="Judul Kampanye" class="border p-2 w-full rounded focus:ring-2 focus:ring-green-400 outline-none" required>
        <textarea name="description" placeholder="Deskripsi Lengkap" class="border p-2 w-full rounded h-32 focus:ring-2 focus:ring-green-400 outline-none" required></textarea>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="text-sm text-gray-600">Target Dana (Rp)</label>
                <input type="number" name="target_donation" placeholder="Contoh: 10000000" class="border p-2 w-full rounded focus:ring-2 focus:ring-green-400 outline-none" required>
            </div>
            <div>
                <label class="text-sm text-gray-600">Dana Terkumpul (Rp)</label>
                <input type="number" name="collected_donation" placeholder="Contoh: 1000000" class="border p-2 w-full rounded focus:ring-2 focus:ring-green-400 outline-none" required>
            </div>
        </div>
        <div>
            <label class="text-sm text-gray-600">Batas Waktu</label>
            <input type="date" name="deadline" class="border p-2 w-full rounded focus:ring-2 focus:ring-green-400 outline-none" required>
        </div>
    </div>

    <div class="space-y-4 bg-gray-50 p-4 rounded-lg">
        <h3 class="text-lg font-bold text-blue-600 uppercase text-sm tracking-wider">Info Rekening Pencairan (1:1)</h3>
        <input type="text" name="bank_name" placeholder="Nama Bank (Misal: BRI, BNI, BCA)" class="border p-2 w-full rounded focus:ring-2 focus:ring-blue-400 outline-none" required>
        <div class="grid grid-cols-2 gap-4">
            <input type="text" name="account_number" placeholder="Nomor Rekening" class="border p-2 w-full rounded focus:ring-2 focus:ring-blue-400 outline-none" required>
            <input type="text" name="account_holder" placeholder="Nama Pemilik Rekening" class="border p-2 w-full rounded focus:ring-2 focus:ring-blue-400 outline-none" required>
        </div>
    </div>

    <div class="space-y-4">
        <h3 class="text-lg font-bold text-emerald-600 uppercase text-sm tracking-wider">Pilih Kategori (M:M)</h3>
        <div class="flex flex-wrap gap-4">
            <label class="inline-flex items-center">
                <input type="checkbox" name="categories[]" value="1" class="form-checkbox text-green-500">
                <span class="ml-2 text-gray-700">Kesehatan</span>
            </label>
            <label class="inline-flex items-center">
                <input type="checkbox" name="categories[]" value="2" class="form-checkbox text-green-500">
                <span class="ml-2 text-gray-700">Bencana Alam</span>
            </label>
            <label class="inline-flex items-center">
                <input type="checkbox" name="categories[]" value="3" class="form-checkbox text-green-500">
                <span class="ml-2 text-gray-700">Pendidikan</span>
            </label>
            <label class="inline-flex items-center">
                <input type="checkbox" name="categories[]" value="4" class="form-checkbox text-green-500">
                <span class="ml-2 text-gray-700">Panti Asuhan</span>
            </label>
        </div>
        <p class="text-xs text-gray-500 italic">*Anda bisa memilih lebih dari satu kategori</p>
    </div>

    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold px-6 py-3 rounded-lg w-full transition duration-200">
        🚀 Publikasikan Kampanye Sosial
    </button>
</form>

@endsection