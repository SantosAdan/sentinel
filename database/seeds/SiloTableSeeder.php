<?php

use App\Silo;
use Illuminate\Database\Seeder;

class SiloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataArray = [
        	'name' => 'Silo Exemplo',
        	'channel_id' => 282931,
        	'user_id' => 1
        ];

        Silo::create($dataArray);
    }
}
