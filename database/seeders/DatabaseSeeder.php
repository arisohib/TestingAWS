<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $this->call(LaratrustSeeder::class);

        $user1 = User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => '12345678',
            'role' => 'superadmin',
        ]);
        // $user1->attachRole('superadmin');
        $user1->addRole('superadmin');

        $user2 = User::create([
            'name' => 'adminpln',
            'email' => 'adminpln@gmail.com',
            'password' => 'password',
            'role' => 'admin',
        ]);
        // $user1->attachRole('superadmin');
        $user2->addRole('admin');

        $user3 = User::create([
            'name' => 'yantekpln',
            'email' => 'yantekpln@gmail.com',
            'password' => 'rahasia',
            'role' => 'yantek',
        ]);
        // $user1->attachRole('superadmin');
        $user3->addRole('yantek');

        $user4 = User::create([
            'name' => 'fasoppln',
            'email' => 'fasoppln@gmail.com',
            'password' => 'secret',
            'role' => 'fasop',
        ]);
        // $user1->attachRole('superadmin');
        $user4->addRole('fasop');

    }
}
