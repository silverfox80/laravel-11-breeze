<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class
        ]);
        //
        $this->call([
            RolesAndPermissionSeeder::class
        ]);
        //
        $userAdmin = User::where('name', 'like', 'Admin%')->get();
        foreach ($userAdmin as $user) {
            $user->assignRole('Admin');
        }
        //
        $userShark = User::where('name', 'like', 'Shark%')->get();
        foreach ($userShark as $user) {
            $user->assignRole('Shark');
        }
        //
        $userFish = User::where('name', 'like', 'Fish%')->get();
        foreach ($userFish as $user) {
            $user->assignRole('Fish');
        }
    }
}
