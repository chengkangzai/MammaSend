<?php

namespace Database\Seeders;

use App\Models\Ride;
use Illuminate\Database\Seeder;

class BUser extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        User::factory()->count(10)->create();
//        Address::factory()->count(10)->create();
        Ride::factory()->count(10)->create();
    }
}
