<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
 User::create([
    'name' => 'Admin',
    'email' => 'admin@example.com',
    'password' => Hash::make('admin123'),
]);

        $this->call([
            UserSeeder::class,
            FoodMenuSeeder::class,
            SpecialDishesSeeder::class,
            TestimonialSeeder::class
        ]);
    }
}
