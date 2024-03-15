<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Kartika Felicia',
            'email' => 'kartikafelicia.22023@mhs.unesa.ac.id',
            'password' => bcrypt('123')
        ]);

    }
}