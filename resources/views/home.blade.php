@extends('app')

@section('title', 'Home')

@section('content')

<div class="text-center max-w-2xl mx-auto py-10">
    <h1 class="text-3xl font-bold text-green-600 mb-4">
        Selamat Datang di Donasibol
    </h1>
    <p class="text-lg text-gray-700 mb-8">
        Platform donasi online yang memudahkan Anda untuk memberikan bantuan kepada mereka yang membutuhkan. Bergabunglah dengan kami dalam misi kebaikan dan buat perbedaan hari ini!
    </p>

    <div class="flex justify-center">
        <a href="/donasi" class="inline-flex items-center bg-green-600 hover:bg-green-700 text-white font-bold py-4 px-8 rounded-full shadow-lg transform transition hover:scale-105 duration-300">
            Donasi Sekarang
        </a>
    </div>
</div>

@endsection