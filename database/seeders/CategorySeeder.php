<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use constant\CategoryCode;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Category::create([
             'code' =>CategoryCode::UMUM,
             'name' => 'umum',
         ]);
        Category::create([
            'code' =>CategoryCode::EVENT,
            'name' => 'event',
        ]);
        Category::create([
            'code' =>CategoryCode::KEAMANAN,
            'name' => 'keamanan',
        ]);
    }
}
