<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Str;
use Tests\TestCase;
use function bcrypt;
use function rand;

class LoginTest extends TestCase
{

    public function testLoginAsNewCustomer()
    {
        $customerDetail = [
            'name' => "I am MammaSend Customer",
            'email' => rand(1, 10) . "@mammasend.com",
            'email_verified_at' => "",
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'api_token' => Str::random(60),
            'phone_number' => "0127067086",
        ];
        $customer = User::create($customerDetail);
        //Open Role Management Page
        $response = $this->actingAs($customer)->get('/roles/1');
        //FORBIDDEN response ... since user is not allow to view the roles
        $response->assertStatus(403);
    }
}
