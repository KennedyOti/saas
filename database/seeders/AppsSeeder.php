<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppsSeeder extends Seeder
{
    public function run()
    {
        DB::table('apps')->insert([
            [
                'clientid' => 1,
                'name' => 'Sample App',
                'description' => 'This is a sample app description.',
                'status' => 'private',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clientid' => 2,
                'name' => 'Another App',
                'description' => 'This is another app description.',
                'status' => 'private',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
