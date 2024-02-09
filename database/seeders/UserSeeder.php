<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => fake()->phoneNumber(),
            'password' => bcrypt('admin12345'),
        ]) ;

        User::create([
            'name' => 'Admin2',
            'email' => 'admin2@gmail.com',
            'phone' => fake()->phoneNumber(),
            'password' => bcrypt('admin12345'),
        ]) ;

        User::factory(10)->create();
    }
}
