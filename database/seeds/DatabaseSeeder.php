<?php

use run;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('Users')->insert([
            'name' => 'yazid',
            'email' => 'yazid@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
