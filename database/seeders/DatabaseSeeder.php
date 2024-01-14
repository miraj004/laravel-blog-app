<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Comment::factory(30)->create();
         Category::factory(10)->create();
         User::factory()->create([
             'name' => 'Admin',
             'username' => 'admin1212',
             'password' => bcrypt('admin@123'),
             'email' => 'admin@gmail.com'
         ]);
    }
}
