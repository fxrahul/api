<?php

use Illuminate\Database\Seeder;

class apisTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Api::class, 30)->create();
    }
}
