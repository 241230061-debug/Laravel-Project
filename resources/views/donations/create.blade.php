@extends('app')

@section('content')

<form action="/donation" method="POST" class="max-w-2xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-6">
    @csrf

    <div class="space-y-4">
        <h2 class="text-xl font-bold border-b-2 border-blue-500 pb-2">Form Donasi Baru</h2>
        
        <div>
            <label class="text-sm text-gray-600 font-semibold">Pilih Program Kampanye</label>
            <select name="campaign_id" class="border p-2 w-full rounded focus:ring-2 focus:ring-blue-400 outline-none" required>
                <option value="">-- Pilih Kampanye Sosial --</option>
                @foreach($campaigns as $campaign)
                    <option value="{{ $campaign->id }}">{{ $campaign->title }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="text-sm text-gray-600 font-semibold">Nama Donatur</label>
            <input type="text" name="donor_name" placeholder="Nama Anda (bisa Anonim)" class="border p-2 w-full rounded focus:ring-2 focus:ring-blue-400 outline-none" required>
        </div>

        <div>
            <label class="text-sm text-gray-600 font-semibold">Jumlah Donasi (Rp)</label>
            <input type="number" name="amount" placeholder="Contoh: 50000" class="border p-2 w-full rounded focus:ring-2 focus:ring-blue-400 outline-none" required>
        </div>

        <div>
            <label class="text-sm text-gray-600 font-semibold">Pesan atau Doa Baik (Opsional)</label>
            <textarea name="message" placeholder="Tuliskan pesan atau doa dukunganmu..." class="border p-2 w-full rounded h-24 focus:ring-2 focus:ring-blue-400 outline-none"></textarea>
        </div>
    </div>

    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 py-3 rounded-lg w-full transition duration-200">
        Kirim Donasi Sekarang
    </button>
</form>

@endsection