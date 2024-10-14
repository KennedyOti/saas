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
                'client_id' => 1,
                'name' => 'Sample App',
                'description' => 'This is a sample app description.',
                'status' => 'private',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => 2,
                'name' => 'Another App 1',
                'description' => 'This is another app description.',
                'status' => 'private',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => 3,
                'name' => 'Another App 2',
                'description' => 'This is another app description.',
                'status' => 'private',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => 4,
                'name' => 'Another App 3',
                'description' => 'This is another app description.',
                'status' => 'private',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => 5,
                'name' => 'Another App 4',
                'description' => 'This is another app description.',
                'status' => 'private',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
