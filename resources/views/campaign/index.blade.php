@extends('app')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-10">
    
    <div class="bg-white shadow-lg rounded-xl overflow-hidden border border-gray-100">
        
        <div class="flex justify-between items-center p-6 border-b border-gray-200 bg-gray-50/50">
            <h1 class="text-2xl font-bold text-gray-800">Daftar Campaign</h1>
            <a href="/campaign/create" class="bg-green-500 hover:bg-green-600 text-white font-medium px-5 py-2.5 rounded-lg shadow-sm transition duration-200 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Tambah Campaign
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-4 px-6 font-semibold">Judul Campaign</th>
                        <th class="py-4 px-6 font-semibold text-right">Target</th>
                        <th class="py-4 px-6 font-semibold text-right">Terkumpul</th>
                        <th class="py-4 px-6 font-semibold text-center w-32">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm">
                    @foreach($campaigns as $c)
                    <tr class="border-b border-gray-200 hover:bg-gray-50 transition duration-150">
                        <td class="py-4 px-6 font-medium text-gray-900">
                            {{ $c->title }}
                        </td>
                        <td class="py-4 px-6 text-right whitespace-nowrap">
                            Rp {{ number_format($c->target_donation, 0, ',', '.') }}
                        </td>
                        <td class="py-4 px-6 text-right whitespace-nowrap">
                            Rp {{ number_format($c->collected_donation, 0, ',', '.') }}
                        </td>
                        <td class="py-4 px-6 text-center">
                            <div class="flex item-center justify-center space-x-4">
                                <a href="/campaign/{{ $c->id }}/edit" class="text-blue-500 hover:text-blue-700 font-medium transition">
                                    Edit
                                </a>
                                
                                <form action="/campaign/{{ $c->id }}" method="POST" class="inline m-0 p-0" onsubmit="return confirm('Yakin ingin menghapus campaign ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 font-medium transition">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</div>
@endsection