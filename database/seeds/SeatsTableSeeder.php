<?php

use Illuminate\Database\Seeder;

class SeatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Seat::class, 100)->create();
    }
}
