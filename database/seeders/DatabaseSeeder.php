<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $roles = [
            Role::factory()->create(["name" => "Admin"]),
            Role::factory()->create(["name" => "Member"]),
        ];

        User::factory(2)->create(["role_id" => $roles[0]['id']]);
        User::factory(2)->create(["role_id" => $roles[1]['id']]);
    }
}
