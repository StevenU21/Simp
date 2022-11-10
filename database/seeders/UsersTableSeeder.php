<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'Steven Ulloa',
            'email' => 'stevenullos6@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('stevenullos6@gmail.com'), // password
            'address' => 'del panteoncito 3c sur, 3c oeste',
            'identity_card' => '161-210501-100K',
            'role' => 'admin',
        ]);
        User::factory()
            ->count(20000)
            ->create();
    }
}
