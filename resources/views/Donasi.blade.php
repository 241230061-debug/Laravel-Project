@extends('app')

@section('title', 'Home')

@section('content')

<div class="mt-12 max-w-md mx-auto p-6 bg-white rounded-2xl shadow-lg border border-gray-100" x-data="{ method: 'qris' }">
    <h2 class="text-2xl font-bold text-gray-800 mb-2">Salurkan Bantuan Anda</h2>
    <p class="text-sm text-gray-500 mb-6">Pilih metode pembayaran dan masukkan nominal.</p>

    <div class="flex space-x-2 mb-6 bg-gray-100 p-1 rounded-xl">
        <button @click="method = 'qris'" :class="method === 'qris' ? 'bg-white shadow-sm' : ''" class="flex-1 py-2 text-xs font-bold rounded-lg transition">QRIS</button>
        <button @click="method = 'bank'" :class="method === 'bank' ? 'bg-white shadow-sm' : ''" class="flex-1 py-2 text-xs font-bold rounded-lg transition">Bank</button>
        <button @click="method = 'dana'" :class="method === 'dana' ? 'bg-white shadow-sm' : ''" class="flex-1 py-2 text-xs font-bold rounded-lg transition">DANA</button>
    </div>

    <div x-show="method === 'qris'" class="text-center animate-fade-in">
        <div class="inline-block p-4 bg-white border-2 border-dashed border-gray-200 rounded-xl mb-4">
            <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=Donasibol-QRIS" alt="QRIS" class="w-40 h-40">
            <p class="mt-2 font-mono text-[10px] font-bold text-gray-400 uppercase">Scan QRIS Donasibol</p>
        </div>
    </div>

    <div x-show="method === 'bank'" class="text-left space-y-3 mb-6 bg-blue-50 p-4 rounded-xl border border-blue-100">
        <div>
            <p class="text-[10px] text-blue-600 font-bold uppercase">Bank Mandiri</p>
            <p class="text-lg font-mono font-bold text-gray-800">123-000-987-6543</p>
            <p class="text-xs text-gray-600">a.n. Yayasan Donasibol</p>
        </div>
        <hr class="border-blue-200">
        <div>
            <p class="text-[10px] text-blue-600 font-bold uppercase">Bank BCA</p>
            <p class="text-lg font-mono font-bold text-gray-800">887-221-0099</p>
            <p class="text-xs text-gray-600">a.n. Yayasan Donasibol</p>
        </div>
    </div>

    <div x-show="method === 'dana'" class="text-center mb-6 bg-orange-50 p-4 rounded-xl border border-orange-100">
        <p class="text-[10px] text-orange-600 font-bold uppercase mb-1">Nomor DANA</p>
        <p class="text-2xl font-mono font-bold text-gray-800">0812-3456-7890</p>
        <p class="text-xs text-gray-600">a.n. Donasibol Admin</p>
    </div>

    <div class="space-y-4">
        <div class="relative">
            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-bold">Rp</span>
            <input type="number" id="nominal_input" placeholder="Masukkan Nominal" 
                   class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-0 outline-none text-lg font-semibold">
        </div>

        <button class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 rounded-xl shadow-md transition-all active:scale-95">
            Konfirmasi Donasi
        </button>
    </div>
</div>

<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endsection