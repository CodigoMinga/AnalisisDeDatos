<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;



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
        //\App\Models\Product::factory(100)->create();
        $this->call(ProductTableSeeder::class);

        $mytime = Carbon::now();


        $this->command->info("Iniciando creacion de ventas: ".$mytime->toString());
        \App\Models\Sale::factory(5000)->create()->each(function ($sale) {
            \App\Models\Saledetail::factory( mt_rand(1,5))->create(['sale_id'=>$sale->id]);
        }
        );

        $mytime = Carbon::now();
        $this->command->info("Finalizando creacion de ventas :".$mytime->toString());
    }
}
