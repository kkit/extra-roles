<?php

namespace Database\Seeders;

use App\Models\Owner;

use Illuminate\Database\Seeder;

class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            Owner::firstOrCreate([
                'name' => 'Company-' . $i,
            ]);
        }
    }
}
