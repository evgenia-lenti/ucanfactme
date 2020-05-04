<?php

use Illuminate\Database\Seeder;
use App\FactTag;

class FactTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(FactTag::class, 100)->create();
    }
}
