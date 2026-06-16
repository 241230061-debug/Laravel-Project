<?php

namespace App\Http\Controllers; // Harus sama persis dengan folder lokasinya

use App\Models\Campaign;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller // Nama class harus sama dengan nama file
{
    public function create()
    {
        $campaigns = Campaign::all();
        return view('donation', compact('campaigns'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'campaign_id' => 'required|exists:campaigns,id',
            'donor_name'  => 'required|string|max:255',
            'amount'      => 'required|numeric|min:1000',
            'message'     => 'nullable|string',
        ]);

        $campaign = Campaign::findOrFail($request->campaign_id);

        $campaign->donations()->create([
            'donor_name' => $request->donor_name,
            'amount'     => $request->amount,
            'message'    => $request->message,
        ]);

        $campaign->increment('collected_donation', $request->amount);

        return redirect('/campaign')->with('success', 'Terima kasih! Donasi Anda berhasil dikirim.');
    }
}