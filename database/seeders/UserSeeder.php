<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin Users
        User::factory()->create([
            'name' => 'Admin One',
            'email' => 'admin@my-domain.eu',
        ]);
        User::factory()->create([
            'name' => 'Admin Two',
            'email' => 'admin2@my-domain.eu',
        ]);
        //Shark Users
        User::factory()->create([
            'name' => 'Shark ONE',
            'email' => 'shark_one@my-domain.eu',
        ]);
        User::factory()->create([
            'name' => 'Shark TWO',
            'email' => 'shark_two@my-domain.eu',
        ]);
        User::factory()->create([
            'name' => 'Shark THREE',
            'email' => 'shark_three@my-domain.eu',
        ]);
        //Fish Groups
        User::factory()->create([
            'name' => 'Fish Group RED',
            'email' => 'group_red@my-domain.eu',
        ]);
        User::factory()->create([
            'name' => 'Fish Group GREEN',
            'email' => 'group_green@my-domain.eu',
        ]);
        User::factory()->create([
            'name' => 'Fish Group YELLOW',
            'email' => 'group_yellow@my-domain.eu',
        ]);
        User::factory()->create([
            'name' => 'Fish Group BLUE',
            'email' => 'group_blue@my-domain.eu',
        ]);
    }
}
