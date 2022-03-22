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
            'first_name' => 'Biraj',
            'last_name' => 'Shrestha',
            'status' => 1,
            'phone_number' => 9844390741,
            'details' => 'Hi! Its me Biraj Shrestha'

        ]);
    }
}
