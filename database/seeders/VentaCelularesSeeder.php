<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Celulares;
use App\Models\User;


class VentaCelularesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    
    {

        User::truncate();
        Celulares::truncate();
        
        User::factory(5)->create();
        Celulares::factory(20)->create();
    }
}
