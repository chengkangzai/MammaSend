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
            ],
            [
                'id'                => 2,
                'name'              => 'Staff',
                'email'             => 'staff@mammasend.com',
                'password'          => bcrypt('password'),
                'remember_token'    => null,
                'api_token'         => Str::random(10),
            ],
            [
                'id'                => 3,
                'name'              => 'Customer',
                'email'             => 'customer@mammasend.com',
                'password'          => bcrypt('password'),
                'remember_token'    => null,
                'api_token'         => Str::random(10),
            ],
            [
                'id'                => 4,
                'name'              => 'Rider',
                'email'             => 'rider@mammasend.com',
                'password'          => bcrypt('password'),
                'remember_token'    => null,
                'api_token'         => Str::random(10),
            ],

        ];

        User::insert($users);
    }
}
