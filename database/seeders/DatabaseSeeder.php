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
        $this->command->info("Iniciando creacion de ventas");
        \App\Models\Sale::factory(1000)->create()->each(function ($sale) {
            \App\Models\Saledetail::factory( mt_rand(1,30))->create(['sale_id'=>$sale->id]);
        }
        );
        $this->command->info("Finalizando creacion de ventas");
    }
}
