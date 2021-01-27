<?php

namespace Database\Factories\Entities\Admin;

//use App\Models\User;
use App\Models\Entities\Admin\User;
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
      
        return [
           
            'name' => $this->faker->firstName,

            'lastname' => $this->faker->lastName,

            'email' => $this->faker->unique()->safeEmail,

            'username' => $this->faker->unique()->word,  

            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

            'start_date'=> $this->faker->randomElement([null,($start = $this->faker->dateTimeBetween('-5 years','now'))]),

            'email_verified_at' => $this->faker->randomElement ([null,($validated = $this->faker->dateTimeBetween( $start,'now'))]),

            'end_date'=> $this->faker->randomElement ([null, $this->faker->dateTimeBetween( $validated,'now')]),

            'remember_token' => Str::random(10),

            'created_by' => 1,

            'updated_by' => 1,
        ];
       
    }
}