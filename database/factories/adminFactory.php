<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admin>
 */
class adminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'c_name' => 'construct',
            'fullname' => 'admin',
            'phone' => '1234567890',
            'email' => 'admin@gmail.com',
            'address' => 'nepal',
            'username' => 'admin',
            'password' => Hash::make('admin')          //this was added
        ];
    }
}
