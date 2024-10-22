<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Celulares;
use App\Models\User;
use App\Models\Categoria;


class VentaCelularesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    
    {

        Celulares::query()->delete();
        User::query()->delete();
        Categoria::query()->delete();

        Categoria::factory(5)->create(); 
        User::factory(5)->create();
        Celulares::factory(20)->create();
    }
}
