<?php


namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Str;
use function bcrypt;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                => 1,
                'name'              => 'Admin',
                'email'             => 'admin@mammasend.com',
                'password'          => bcrypt('password'),
                'remember_token'    => null,
                'api_token'         => Str::random(10),
                'phone_number'      => '0127067086',
            ],
            [
                'id'                => 2,
                'name'              => 'Staff',
                'email'             => 'staff@mammasend.com',
                'password'          => bcrypt('password'),
                'remember_token'    => null,
                'api_token'         => Str::random(10),
                'phone_number'      => '0127067086',
            ],
            [
                'id'                => 3,
                'name'              => 'Customer',
                'email'             => 'customer@mammasend.com',
                'password'          => bcrypt('password'),
                'remember_token'    => null,
                'api_token'         => Str::random(10),
                'phone_number'      => '0127067086',
            ],
            [
                'id'                => 4,
                'name'              => 'Driver',
                'email'             => 'driver@mammasend.com',
                'password'          => bcrypt('password'),
                'remember_token'    => null,
                'api_token'         => Str::random(10),
                'phone_number'      => '0127067086',
            ],
            [
                'id'                => 5,
                'name'              => 'Driver 2',
                'email'             => 'driver2@mammasend.com',
                'password'          => bcrypt('password'),
                'remember_token'    => null,
                'api_token'         => Str::random(10),
                'phone_number'      => '0127067086',
            ],
            [
                'id'                => 6,
                'name'              => 'Driver 3',
                'email'             => 'driver3@mammasend.com',
                'password'          => bcrypt('password'),
                'remember_token'    => null,
                'api_token'         => Str::random(10),
                'phone_number'      => '0127067086',
            ],
        ];

        User::insert($users);
    }
}
