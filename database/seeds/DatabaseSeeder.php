<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Nicolas Navarrete Clemente',
            'nickname' => 'nicosli',
            'email' => 'nicosli@gmail.com',
            'password' => bcrypt('tamales'),
        ]);

        DB::table('users')->insert([
            'name' => 'Abril Rosado Huerta',
            'nickname' => 'lirba',
            'email' => 'lirba304@hotmail.com',
            'password' => bcrypt('atardecer3004'),
        ]);
    }
}
