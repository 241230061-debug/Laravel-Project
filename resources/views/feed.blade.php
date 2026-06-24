@extends('app')

@section('title', 'Feeds')

@section('content')

<div class="max-w-6xl mx-auto space-y-8">

    <div class="text-center">
        <h1 class="text-3xl font-bold text-slate-800">Daftar Feed Sosial Aktif</h1>
        <p class="text-slate-500 text-sm mt-1">Simulasi Pengelolaan Big Data Sistem Informasi (500 Records)</p>
    </div>

    <form action="/feeds" method="GET" class="bg-white p-4 rounded-xl shadow-sm border flex flex-col md:flex-row gap-4">
        <div class="flex-1">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari judul aksi sosial..."
                class="w-full border border-slate-300 rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-emerald-400 outline-none">
        </div>
        
        <div class="w-full md:w-64">
            <select name="min_like" class="w-full border border-slate-300 rounded-lg px-4 py-2 text-sm bg-white outline-none">
                <option value="">Semua Like</option>
                <option value="500" {{ request('min_like') == '500' ? 'selected' : '' }}>&gt; 500 Like</option>
                <option value="5000" {{ request('min_like') == '5000' ? 'selected' : '' }}>&gt; 5.000 Like</option>
                <option value="8000" {{ request('min_like') == '8000' ? 'selected' : '' }}>&gt; 8.000 Like</option>
                <option value="10000" {{ request('min_like') == '10000' ? 'selected' : '' }}>&gt; 10.000 Like</option>
            </select>
        </div>
        
        <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-medium text-sm px-6 py-2 rounded-lg transition">
            Terapkan Filter
        </button>
        
        @if(request()->has('search') || request()->has('min_like'))
            <a href="/feeds" class="bg-slate-200 hover:bg-slate-300 text-slate-700 text-sm px-4 py-2 rounded-lg text-center flex items-center justify-center">
                Reset
            </a>
        @endif
    </form>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @forelse($feeds as $cp)
            <div class="bg-white border rounded-xl p-5 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <span class="text-xs font-bold text-emerald-600 tracking-wide uppercase">Feed AKTIF</span>
                    <h3 class="font-bold text-slate-800 text-lg mt-1 line-clamp-1">{{ $cp->title }}</h3>
                    <p class="text-sm text-slate-500 mt-2 line-clamp-3">{{ $cp->statusFeed }}</p>
                </div>
                
                <div class="mt-4 pt-4 border-t border-slate-100 flex justify-between items-center">
                    <span class="text-xs text-slate-400">Jumlah Like:</span>
                    <span class="font-bold text-slate-700 text-sm">{{ number_format($cp->likeFeed, 0, ',', '.') }}</span>
                </div>
            </div>
        @empty
            <div class="col-span-3 text-center py-12 bg-white rounded-xl border">
                <p class="text-slate-400 italic">Data Feed tidak ditemukan.</p>
            </div>
        @endforelse
    </div>

    <div class="bg-white p-4 rounded-xl border shadow-sm">
        {{ $feeds->links() }}
    </div>

</div>

@endsection