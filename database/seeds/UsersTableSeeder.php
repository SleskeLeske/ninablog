<?php

use Illuminate\Database\Seeder;
use App\User;
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
            'name' => 'Nina',
            'email' => 'noffel@live.no',
            'password' => bcrypt('Ola1'),
            'role' => 'admin',
        ]);
    }
}
