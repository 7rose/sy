<?php

use App\User;
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
        User::create([
            'name' => 'Alvin',
            'mobile' => '13774305917',
            'password' => bcrypt('123456'),
            'root' => true,
        ]);

        User::create([
            'name' => 'Fraiman',
            'mobile' => '13000000000',
            'password' => bcrypt('123456'),
            'admin' => true,
        ]);

        User::create([
            'name' => '测试员',
            'mobile' => '13999999999',
            'password' => bcrypt('123456'),
        ]);
    }
}
