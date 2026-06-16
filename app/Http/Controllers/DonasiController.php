<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    // Menampilkan halaman form donasi
    public function create()
    {
        // Mengambil semua campaign untuk pilihan di select option form
        $campaigns = Campaign::all();
        
        return view('donation', compact('campaigns'));
    }

    // Menangani penyimpanan model donation (Relasi One-to-Many)
    public function store(Request $request)
    {
        // 1. Validasi input terlebih dahulu (Sangat disarankan)
        $request->validate([
            'campaign_id' => 'required|exists:campaigns,id',
            'donor_name'  => 'required|string|max:255',
            'amount'      => 'required|numeric|min:1000',
            'message'     => 'nullable|string',
        ]);

        // 2. Cari data campaign yang dituju
        $campaign = Campaign::findOrFail($request->campaign_id);

        // 3. Simpan data donasi melalu relasi hasMany milik Campaign
        $campaign->donations()->create([
            'donor_name' => $request->donor_name,
            'amount'     => $request->amount,
            'message'    => $request->message,
        ]);

        // 4. (Opsional) Kamu juga bisa menambahkan jumlah nominal ke kolom 'collected_donation' di tabel campaign
        $campaign->increment('collected_donation', $request->amount);

        return redirect('/campaign')->with('success', 'Terima kasih! Donasi Anda berhasil dikirim.');
    }
}