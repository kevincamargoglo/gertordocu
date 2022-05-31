<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Team;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'user_id'=>1,
            'name' => 'org',
            'personal_team' => 1
        ]);

        User::create([
            'name' => "Administrador sistema",
            'email' => "admin@admin.com",
            'email_verified_at' => now(),
            'password' => bcrypt("123456"),
            'remember_token' => Str::random(10),
            'current_team_id'=> "1"
        ])->assignRole('admin');

        User::create([
            'name' => "Usuario sistema",
            'email' => "user@user.com",
            'email_verified_at' => now(),
            'password' => bcrypt("123456"),
            'remember_token' => Str::random(10),
            'current_team_id'=> "1"
        ])->assignRole('cenabast');
    }
}
