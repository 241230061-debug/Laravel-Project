<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campaign::create([
            'title' => 'Bantu Anak Yatim Piatu',
            'description' => 'Mari kita bantu anak-anak yatim piatu untuk mendapatkan pendidikan yang layak dan masa depan yang cerah.',
            'target_donation' => 10000000,
            'collected_donation' => 0,
            'deadline' => '2026-12-31',
        ]);
        Campaign::create([
                'title' => 'Bantu Korban Bencana Alam',
                'description' => 'Bersama-sama kita bisa membantu korban bencana alam untuk mendapatkan bantuan dan pemulihan yang mereka butuhkan.',
                'target_donation' => 5000000,
                'collected_donation' => 0,
                'deadline' => '2026-11-30',
            ]);
    }
}
