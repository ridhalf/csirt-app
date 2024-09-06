<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use constant\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::create([
             'username' => 'admin',
             'name' => 'admin',
             'password' => bcrypt('password'),
             'role'=> Role::SUPERADMIN,
         ]);
        $this->call(CategorySeeder::class);
    }
}
