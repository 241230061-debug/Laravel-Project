<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    // READ (list)
    public function index()
    {
        $campaigns = Campaign::all();
        return view('campaign.index', compact('campaigns'));
    }

    // CREATE (form)
    public function create()
    {
        return view('campaign.create');
    }

    // STORE (insert)
    public function store(Request $request)
    {
        Campaign::create($request->all());
        return redirect('/campaign')->with('success', 'Data berhasil ditambahkan');
    }

    // EDIT (form)
    public function edit($id)
    {
        $campaign = Campaign::findOrFail($id);
        return view('campaign.edit', compact('campaign'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $campaign = Campaign::findOrFail($id);
        $campaign->update($request->all());

        return redirect('/campaign')->with('success', 'Data berhasil diupdate');
    }

    // DELETE
    public function destroy($id)
    {
        Campaign::destroy($id);
        return redirect('/campaign')->with('success', 'Data berhasil dihapus');
    }
}