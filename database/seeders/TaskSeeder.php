<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $tasks = [];
        for($i = 0; $i < 100; $i++) {
            $tasks[] = [
                'title' => $faker->sentence(2),
                'description' => $faker->paragraph(),
                'long_description' => $faker->optional()->text(240),
                'completed' => $faker->boolean()
            ];
            DB::table('tasks')->insert($tasks);            
        }
    }
}
