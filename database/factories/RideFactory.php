<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Ride;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RideFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ride::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker = \Faker\Factory::create('ms_MY');
//        Address::orderBy('created_at', 'desc')->take(2)->get();
        return [
            'price'=>$this->faker->randomFloat(2,5,30).".".$this->faker->randomFloat(2,5,30),
            'rider_id'=>Role::where('title', 'Driver')->first()->users()->inRandomOrder()->first()->id,
            'pickup_address_id'=>Address::inRandomOrder()->first()->id,
            'dropoff_address_id'=>Address::inRandomOrder()->first()->id,
        ];
    }
}
