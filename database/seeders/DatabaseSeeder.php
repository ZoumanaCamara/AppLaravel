<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Zoumana Camara', 
            'email' => 'camarazou@gmail.com', 
            'password' => Hash::make('password')
        ]); 

        $categories = collect(["Lait", "Boissons"]); 

        $categories->each(
            
            fn ($category) => Category::create([
                'name' => $category
            ])
        ); 

        $this->call([
            PostSeeder::class
        ]); 
    }
}
