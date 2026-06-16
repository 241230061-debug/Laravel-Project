<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'campaign_id',
        'donor_name',
        'amount',
        'message'
    ];

    // Donasi ini dikirim untuk (belongsTo) Campaign yang mana?
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}