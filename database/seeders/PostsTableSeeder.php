<?php

namespace Database\Seeders;

use App\Models\Owner;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $owners = Owner::all();

        foreach ($owners as $owner) {
            Post::factory()->count(20)->create([
                'owner_id' => $owner->id,
            ]);
        }
    }
}
