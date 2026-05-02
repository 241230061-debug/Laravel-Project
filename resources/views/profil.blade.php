@extends('app')

@section('title', 'Home')

@section('content')

<div class="max-w-4xl mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row items-center md:items-start gap-8 bg-white p-8 rounded-3xl shadow-md border border-gray-100">
        
        <div class="flex-shrink-0">
            <div class="relative">
                <div class="w-40 h-40 rounded-full p-1 bg-gradient-to-b from-green-400 to-green-600 shadow-xl">
                    <img 
                        src="https://ui-avatars.com/api/?name=Donasi+Bol&background=ffffff&color=059669&size=160" 
                        alt="Profile Picture" 
                        class="w-full h-full rounded-full object-cover border-4 border-white"
                    >
                </div>
                <span class="absolute bottom-3 right-3 w-7 h-7 bg-green-500 border-4 border-white rounded-full shadow-sm"></span>
            </div>
        </div>

        <div class="text-left">
            <h1 class="text-3xl font-extrabold text-green-600 mb-2">
                Selamat Datang di Halaman Profil
            </h1>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-widest mb-4">
                Platform Donasi Online
            </p>
            
            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    Di halaman ini, Anda dapat menemukan informasi lebih lanjut tentang kami, misi kami, dan bagaimana kami berkomitmen untuk memberikan dampak positif melalui platform donasi online kami.
                </p>
                <p>
                    Kami percaya bahwa setiap kontribusi, besar atau kecil, dapat membuat perbedaan dalam kehidupan mereka yang membutuhkan. Terima kasih telah bergabung dengan kami dalam perjalanan ini untuk menciptakan dunia yang lebih baik!
                </p>
            </div>

            <div class="mt-6 flex gap-3">
                <button class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-full font-medium transition shadow-sm">
                    Edit Profil
                </button>
                <button class="border-2 border-gray-200 hover:border-gray-300 px-6 py-2 rounded-full font-medium transition text-gray-600">
                    Misi Kami
                </button>
            </div>
        </div>
        
    </div>
</div>

@endsection