<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['id' => 1, 'name' => 'Kesehatan'],
            ['id' => 2, 'name' => 'Bencana Alam'],
            ['id' => 3, 'name' => 'Pendidikan'],
            ['id' => 4, 'name' => 'Panti Asuhan'],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(['id' => $category['id']], $category);
        }
    }
}