<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'first_name' => 'Allejo Chris',
            'last_name' => 'Velarde',
            'email' => 'chris.velarde@chromedia.com',
            'password' => bcrypt('secret'),
        ]);

    }
}
