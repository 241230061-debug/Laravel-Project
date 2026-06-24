<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;

class FeedController extends Controller
{
    public function index(Request $request)
    {
        $feeds = Feed::query()
            // Fitur 1: Pencarian Berdasarkan Judul
            ->when($request->filled('search'), function ($query) use ($request) {
                return $query->where('title', 'like', '%' . $request->search . '%');
            })
            // Fitur 2: Filter Berdasarkan Minimal Jumlah Like Feed
            ->when($request->filled('min_like'), function ($query) use ($request) {
                return $query->where('likeFeed', '>=', $request->min_like);
            })
            ->latest()
            ->paginate(5) // Memotong data, hanya tampilkan 5 item per halaman
            ->withQueryString(); // KRUSIAL: Mengunci keyword pencarian saat pindah halaman

        return view('feed', compact('feeds'));
    }
}