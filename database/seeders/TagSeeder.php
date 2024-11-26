<?php

namespace Database\Seeders;

use App\Models\TagSpesifikasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TagSpesifikasi::insert([
            ['nama_tag' => 'Full-Time'],
            ['nama_tag' => 'Part-Time'],
            ['nama_tag' => 'On-site'],
            ['nama_tag' => 'Work From Home'],
            ['nama_tag' => '1 year'],
            ['nama_tag' => '2 year'],
            ['nama_tag' => '1 - 2 year'],
        ]);
    }
}
