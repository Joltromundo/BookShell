<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(
            [
                'name' => 'admin',
                'email' => 'bookshell@myspacegarden.com',
                'password' => Hash::make('admin1234')
            ]
        )->create();

        //Books
        \App\Models\Book::factory(50)->create();
    }
}
