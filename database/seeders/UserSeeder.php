<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user->name = 'Tinara Nathania';
        $user->email = 'tinaraadmin@gmail.com';
        $user->password = Hash::make('tinaraadmin');
        $user->role = '1';
        $user->save();

        $user = new User();
        $user->name = 'Tinara Nathania';
        $user->email = 'tinarauser@gmail.com';
        $user->password = Hash::make('tinarauser');
        $user->role = '0';
        $user->save();
        
    }
}
