<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Memanggil seeder kategori yang barusan kita buat
        $this->call([
            CategorySeeder::class,
        ]);
        
        // 2. Membuat user jagoan untuk testing (Aman dari error duplikat email)
        /*User::updateOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'), // Tambahkan password bawaan jika dibutuhkan login
            ]
        );
        */
    }
}