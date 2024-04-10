<?php

namespace Database\Seeders;

use App\Models\Carrier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarrierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carrier = new Carrier();
        $carrier->name = "Aseguradora Rural";
        $carrier->contactname = "nombre del asesor";
        $carrier->contactemail = "correodelasesor@segurosuniversales.com";
        $carrier->contactphone = "77777777";
        $carrier->save();

        $carrier = new Carrier();
        $carrier->name = "Seguros Universales";
        $carrier->contactname = "nombre del asesor";
        $carrier->contactemail = "correodelasesor@segurosuniversales.com";
        $carrier->contactphone = "77777777";
        $carrier->save();

    }
}
