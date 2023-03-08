<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Duration;
use App\Models\Feature;
use App\Models\HostCategory;
use App\Models\HostPackage;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(1)->create();
        // Plan::factory(4)->create();
        // Duration::factory(4)->create();
        // HostCategory::factory(12)->create();     
        // HostPackage::factory(100)->create();
        Feature::factory(5)->create();
            
    }
}
