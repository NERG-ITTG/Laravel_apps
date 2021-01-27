<?php

namespace Database\Seeders;
//use App\Models\Entities\Admin\User;
use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // Model ::unguard();

       // try{
         //   Schema::disableForeignKeyConstrainsts();

            $this->call(UsersTableSeeder::class);

             //Schema::enableForeignKeyConstrainsts();

       // }catch (\Throwable $th){
            //return $th->getMessage();

        //}
        //\App\Models\Entities\Admin\User::factory(10)->create();
         //factory(User::class, 10)->create();

       // $this->call(UsersTableSeeder::class);
    }
}
