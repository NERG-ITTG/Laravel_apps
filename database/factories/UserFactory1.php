<?php

namespace Database\Factories;

//use App\Models\User;
//use App\Models\Entities\Admin\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
//Use Illuminate\Support\Facades\DB;
//use Faker\Generator as Faker;
//use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * 
     * Define the model's default state.
     *
     * @return array
     */
    /**
         * 'name'
         * 'lastname'
         * 'email'
         * 'username'
         * 'password'
         * 'email_verified_at'
         * 'start_date'
         * 'end_date'
         * 
         * 'created_by'
         * 'updated_by'
         */

     public function definition()
    {
        //$factory->define(User::class, function (Faker $faker){
        return [
           // 'user_id'=> factory(User::class),
            'name' => $this->faker->firstName,

            'lastname' => $this->faker->lastName,

            'email' => $this->faker->unique()->safeEmail,

            'username' => $this->faker->unique()->word,  

            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

            'start_date'=> ($start = $faker->dateTimeBetween('-5 years','now')),

            'email_verified_at' => $faker->randomElement ([null,($validated = $faker->dateTimeBetween( $start,'now'))]),

            'end_date'=> $faker->randomElement ([null, $faker->dateTimeBetween( $validated,'now')]),

            'remember_token' => Str::random(10),

            'created_by' => 1,

            'updated_by' => 1,
        ];
       // });
    }
}

