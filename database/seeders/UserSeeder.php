<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory AS Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("id_ID");
        for($i = 0; $i<50; $i++){
        DB::table('user')->insert([
            "username" => $faker->userName,
            "password" => Hash::make("password"),
            "password_confirmation" => true,
            "email" => $faker->email(),
            "alamat" => $faker->address(),
        ]);
        }
    }
}
