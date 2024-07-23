<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = User::query()
            ->find(1);
        $user2 = User::query()
            ->find(2);


//        Collection::make([
//            ['name' => 'Admin'],
//            ['name' => 'Dokter'],
//        ])->each(fn($role)=>Role::query()->create($role));

        $user1->role()->attach(Role::query()->find(1));
        $user2->role()->attach(Role::query()->find(2));
    }
}
