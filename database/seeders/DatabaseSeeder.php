<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\datatable;
use App\Models\admin;
use App\Models\teacher;
use App\Models\student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        //datatable::factory()->count(10)->create();
        //admin::factory()->count(100)->create();
        //teacher::factory()->count(25000)->create();
        teacher::factory()->count(50000)->create();


    }
}
