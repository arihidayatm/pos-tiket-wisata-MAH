<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'MAHDEV FIC17',
            'email' => 'mahdev@fic17.com',
            'password' => Hash::make('qwerty123'),
        ]);

        //category factory 2
        Category::factory(2)->create();

        //product factory 100
        Product::factory(100)->create();
    }
}
