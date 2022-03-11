<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tarif;

class TarifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {$data = Tarif::create([
        'daya' => 450,
        'tarifperkwh' => 900
    ]);

    $data2 = Tarif::create([
        'daya' => 900,
        'tarifperkwh' => 1000
    ]);

    $data3 = Tarif::create([
        'daya' => 1300,
        'tarifperkwh' => 1345
    ]);
        //
    }
}
