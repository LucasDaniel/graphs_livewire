<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->id_level = 1;
        $user->name = "God";
        $user->email = "a@bycoders.com";
        $user->password = Hash::make('a');
        $user->save();

        $user = new User();
        $user->id_level = 2;
        $user->name = "Admin 1";
        $user->email = "b@bycoders.com";
        $user->password = Hash::make('b');
        $user->save();

        $user = new User();
        $user->id_level = 2;
        $user->name = "Admin 2";
        $user->email = "c@bycoders.com";
        $user->password = Hash::make('c');
        $user->save();

        $user = new User();
        $user->id_level = 3;
        $user->name = "Employee 1";
        $user->email = "d@bycoders.com";
        $user->password = Hash::make('d');
        $user->save();

        $user = new User();
        $user->id_level = 3;
        $user->name = "Employee 2";
        $user->email = "e@bycoders.com";
        $user->password = Hash::make('e');
        $user->save();

        $user = new User();
        $user->id_level = 3;
        $user->name = "Employee 3";
        $user->email = "f@bycoders.com";
        $user->password = Hash::make('f');
        $user->save();
    }
}
