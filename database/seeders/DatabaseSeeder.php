<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

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
            'name' => Str::random(10),
            'username' => 'username',
            'email' => 'admin@email.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);

        Product::factory(10)->create();
    }
}
