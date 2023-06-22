<?php

namespace Database\Seeders;

use App\Models\Owner;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$ItQxQ6Dr/FkqlbaD.28X0eH634IUfRn6CjHD33CrwkqcGsVB3zjsO', // password
                'created_at' => DB::raw('now()'),
                'updated_at' => DB::raw('now()'),
                'permissions' => '{"platform.systems.attachment":"1","platform.systems.users":"1","platform.systems.roles":"1","platform.index":"1"}',
                'owner_id' => 1,
            ],
        ]);

//        $owners = Owner::all();
//
//        foreach ($owners as $owner) {
//            User::factory()->count(10)->create([
//                'owner_id' => $owner->id,
//            ]);
//        }
    }
}
