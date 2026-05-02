@extends('app')

@section('title', 'Home')

@section('content')

<div class= "text-center">
    <h1 class="text-3xl font-bold text-green-600">
        Selamat Datang di Donasibol
    </h1>
    <p class="text-lg text-gray-700">
       <strong>Kontak Kami</strong><br>
         Jika Anda memiliki pertanyaan, saran, atau ingin berkontribusi dalam misi kebaikan kami, jangan ragu untuk menghubungi kami melalui informasi berikut:<br><br>
        <a href="https://wa.me/6285348337753" target="_blank" class="block">
        <input type="text" value="WhatsApp: 0853-4833-7753 (Klik untuk Chat)" readonly 
           class="border-2 border-green-500 rounded px-4 py-2 mb-4 w-full text-center cursor-pointer hover:bg-green-50 text-green-700 font-semibold">
        </a>
        <a href="https://www.instagram.com/nabbiiil_/" target="_blank" class="block">
        <input type="text" value="Instagram: @nabbiiil_ (Klik untuk Follow)" readonly 
           class="border-2 border-green-500 rounded px-4 py-2 mb-4 w-full text-center cursor-pointer hover:bg-green-50 text-green-700 font-semibold">
        </a>    
    </p>
</div>
@endsection