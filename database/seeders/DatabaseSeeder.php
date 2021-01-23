<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()

    {

       // \App\Models\User::factory(10)->create();
        \App\Models\Client::factory(1000)->create();
        \App\Models\Vendor::factory(10)->create();

        $this->call(ProductTableSeeder::class);

    }
}
