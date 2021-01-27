<?php

namespace Database\Seeders;
use App\Models\Entities\Admin\User;
use Illuminate\Database\Seeder;
//Use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
         *
         * $root = new User();
         * $root->email = "root@misitio2.com";
         * $root->username = "root";
         * $root->name = "root";
         * $root->password = "password";
         * $root->created_by = 1;
         * $root->updated_by = 1;
         * $root->save();
         *
         *
          *$user = new User();
          * $user->email = "normae8011@gmail.com";
          *  $user->username = "NERG_ITTG";
          * $user->name = "Norma";
          * $user->lastname = "Ruiz";
          * $user->password = bcrypt("password");
          * $user->created_by = $root->id;
          * $user->updated_by = $root->id;
          * $user->save();
        **/
        //User::truncate();
         //User:: factory(10)->create([
         //     'created_by' =>$user_id,
         //    'updated_by' => $user_id,
          // ]);
         //  $user = User::factory()->create([
          //  'created_by' =>$user_id,
          //  'updated_by' => $user_id ,
       // ]);

          User::factory(10)->create();
            //factory(User::class, 10)->create();
            //\App\Models\Entities\Admin\User::factory(10)->create();

    }
}
