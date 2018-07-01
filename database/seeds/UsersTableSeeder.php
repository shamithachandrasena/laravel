<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name'=>"Kamal",
                'last_name'=>"Perera",
                'username'=>"admin",
                'password'=>bcrypt('admin123'),
                'created_at'=>Carbon::now(),
            ],[
                'first_name'=>"Kasun",
                'last_name'=>"Silva",
                'username'=>"admin2",
                'password'=>bcrypt('admin2123'),
                'created_at'=>Carbon::now(),
            ]
        ]);
    }
}
