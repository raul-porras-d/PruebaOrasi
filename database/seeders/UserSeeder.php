<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => 'Yadira',
            'email' => 'Yadira@gmail.com',
            'password' => '12345678',
        ]);

        User::create([
            'name' => 'Raul',
            'email' => 'Raul@gmail.com',
            'password' => '12345678',
        ]);

        User::create([
            'name' => 'Espana',
            'email' => 'Espana@gmail.com',
            'password' => '12345678',
        ]);

        User::create([
            'name' => 'JuanMa',
            'email' => 'JuanMa@gmail.com',
            'password' => '12345678',
        ]);

        User::create([
            'name' => 'Jonathan',
            'email' => 'Jonathan@gmail.com',
            'password' => '12345678',
        ]);
    }
}
