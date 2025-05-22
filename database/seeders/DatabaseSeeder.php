<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

       DB::table('recettes')->insert([
            ['title' => 'lasagne'],
            ['title' => 'riz au lait'],
            ['title' => 'riz au curry'],
            ['description' => 'plat trop bon'],
            ['description' => 'dessert pas trop mal'],
            ['description' => 'un delice pour vos papilles'],
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
