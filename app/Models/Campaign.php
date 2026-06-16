<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'title',
        'description',
        'target_donation',
        'collected_donation',
        'deadline'
    ];

    // Relasi One-to-One
    public function account()
    {
        return $this->hasOne(CampaignAccount::class);
    }

    // Relasi One-to-Many
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

    // Relasi Many-to-Many (Pivot)
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'campaign_category');
    }
}