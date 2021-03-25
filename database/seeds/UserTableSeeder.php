<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();
        DB::table('users')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'admin',
                    'email' => '304913539@qq.com',
                    'password' => bcrypt('admin888'),
                    'remember_token' => NULL,
                    'phone' => NULL,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'deleted_at' => NULL,
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'admin1',
                    'email' => 'test@qq.com',
                    'password' => bcrypt('admin888'),
                    'remember_token' => NULL,
                    'phone' => NULL,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'deleted_at' => NULL,
                ),
        ));

    }
}
