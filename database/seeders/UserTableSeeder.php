<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Md. Shahriar Kabir',
            'role'=>'Admin',
            'email'=>'shahriar@gmail.com',
            'password' =>bcrypt('1234'),
        ]);

}
}

