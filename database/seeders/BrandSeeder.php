<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['Samsung', 'Dell', 'Apple'];

        foreach ($names as $name) {
            Brand::create([
                'name' => $name,
                'slug' => Str::slug($name)
            ]);
        }

    }
}
