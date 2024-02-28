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
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => fake()->phoneNumber(),
            'password' => bcrypt('admin12345'),
        ]) ;
        $user->assignRole([1]) ;

        $user = User::create([
            'name' => 'Admin2',
            'email' => 'admin2@gmail.com',
            'phone' => fake()->phoneNumber(),
            'password' => bcrypt('admin12345'),
        ]) ;
        $user->assignRole([2]) ;

        $user = User::create([
            'name' => 'Admin3',
            'email' => 'admin3@gmail.com',
            'phone' => fake()->phoneNumber(),
            'password' => bcrypt('admin12345'),
        ]) ;
        $user->assignRole([3]) ;

        User::factory(10)->create();
    }
}
