<?php

namespace Database\Seeders;

use App\Models\Ubicationtype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UbicationtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ubicationtype = new Ubicationtype();
        $ubicationtype->name = "Bancaria";
        $ubicationtype->save();

        $ubicationtype = new Ubicationtype();
        $ubicationtype->name = "Comercial";
        $ubicationtype->save();
    }
}
