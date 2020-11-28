<?php


namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 4; $i++) {
            User::findOrFail($i)->roles()->sync($i);
        }
        for ($i = 5; $i <= 6; $i++) {
            User::findOrFail($i)->roles()->sync(4);
        }

    }
}
