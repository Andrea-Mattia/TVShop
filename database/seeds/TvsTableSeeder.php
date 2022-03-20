<?php

use Illuminate\Database\Seeder;
use App\Tv;

class TvsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tvs = [
            [
                'name' => 'Tv1',
                'description' => 'Lorem ipsum dolor sit amet',
                'inch' => 30,
                'price' => 800.00
            ],
            [
                'name' => 'Tv2',
                'description' => 'Lorem ipsum dolor s,ldmfl,m sdm flsmd lms d sit',
                'inch' => 40,
                'price' => 950.00
            ],
            [
                'name' => 'Tv3',
                'description' => 'Lorem ipsum dolor sit',
                'inch' => 22,
                'price' => 150.00
            ],
        ];

        foreach ($tvs as $tv) {
            // creazione nuova istanza
            $new_tv = new Tv;

            $new_tv->name = $tv['name'];
            $new_tv->description = $tv['description'];
            $new_tv->inch = $tv['inch'];
            $new_tv->price = $tv['price'];

            $new_tv->save();
        }
    }
}
