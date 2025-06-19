<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //use this seeder to create the admin user and access the admin dashboard
        //write this in your cmd "php artisan db:seed AdminUserSeeder" to add the admin user to the database
        User::create([
            'name' => 'Admin User',
            //this is your admin email change it if you want
            'email' => 'admin@admin',
            //this is your admin password change it if you want
            'password' => bcrypt('adminpassword'),
            'is_admin' => true,
        ]);

    }
}
