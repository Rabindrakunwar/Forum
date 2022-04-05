<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'      => 'Admin',
            'username'  => 'admin',
            'email'     => 'admin@example.com',
            'password'  => bcrypt('password'),
            'type'      => User::ADMIN,
        ]);

        User::factory()->create([
            'name'      => 'John Doe',
            'username'  => 'johndoe',
            'email'     => 'john@example.com',
            'password'  => bcrypt('password'),
            'type'      => User::DEFAULT,
        ]);

        User::factory()->create([
            'name'      => 'Maya Doe',
            'username'  => 'mayadoe',
            'email'     => 'maya@example.com',
            'password'  => bcrypt('password'),
            'type'      => User::DEFAULT,
        ]);
        User::factory()->create([
            'name'      => 'Rabindra Kunwar',
            'username'  => 'rkcb',
            'email'     => 'rabikunwar175@gmail.com',
            'password'  => bcrypt('Test@123'),
            'type'      => User::ADMIN,
        ]);

        User::factory()->count(10)->create();
    }
}
