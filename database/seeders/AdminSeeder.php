<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user =   User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'auth' => "'ADM'",
            'email_verified_at' => now(),
            'mobile' => '123123123',
            'password' => bcrypt('111')
        ]);

        $user->assignRole('Admin');
    }
}
