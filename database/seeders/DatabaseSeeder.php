<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ArtTableSeeder::class);
         $this->call(CategoryTableSeeder::class);
         $this->call(ExtraImagesTableSeeder::class);




        // \App\Models\User::factory(10)->create();
    }
}
