<?php

use App\City;
use App\Type;
use App\Color;
use App\Extra;
use App\Fuel;
use App\Make;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'city' => "Zagreb",
            'postcode' => "10000",
        ]);
        City::create([
            'city' => "Rijeka",
            'postcode' => "21000",
        ]);
        Color::create([
            'color' => "Phantom Black",
        ]);
        Color::create([
            'color' => "Sepang Blue",
        ]);
        Extra::create([
            'title' => "Osiguranje",
            'description' => "Dodatno osiguranje",
            'price' => 100,
        ]);
        Extra::create([
            'title' => "2. Osiguranje",
            'description' => "2. Dodatno osiguranje",
            'price' => 200,
        ]);
        Fuel::create([
            "fuel" => "Diesel"
        ]);
        Fuel::create([
            "fuel" => "Gasoline"
        ]);
        Make::create([
            "make" => "Audi"
        ]);
        Make::create([
            "make" => "VW"
        ]);
        Type::create([
            "class" => "Premium"
        ]);
        Type::create([
            "class" => "Middle"
        ]);
        User::create([
            "name" => "Toni",
            "email" => "test@mail.com",
            "password" => "$2y$10$9.uGMbXwMI9t9zJ4o1kp5uhOuM5s0o/aQ6Ge9FYbvE09GP7uG0vFW",
            "isAdmin" => 1,
            "address" => "FA 57",
            "phone" => "555-555"
        ]);

    }
}
