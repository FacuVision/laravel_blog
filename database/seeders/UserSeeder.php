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
        User::factory(99)->create();
        User::create([
            "name" => "Emmanuel",
            "email" => "emmanuelgarayar@gmail.com",
            "password" => bcrypt("12345")
        ]);

    }
}
