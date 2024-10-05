<?php

namespace Database\Seeders;

use App\Models\Jumbotron;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class JumbotronSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jumbotron::create([
            'title' => 'GAMBAR UTAMA',
            'image_url' => 'images/jumbotron/1.jpg',
        ]);
    }
}
