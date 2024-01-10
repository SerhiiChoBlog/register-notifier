<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create(['email' => 'user1@mail.com']);
        User::factory()->create(['email' => 'user2@mail.com']);
    }
}
