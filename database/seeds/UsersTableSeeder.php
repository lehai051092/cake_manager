<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = "admin";
        $admin->email = "admin@gmail.com";
        $admin->password = Hash::make("12345678");
        $admin->save();
    }
}
