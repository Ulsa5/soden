<?php

namespace Database\Seeders;

use App\Models\Civilstatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CivilstatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $civilStatus = new Civilstatus();
        $civilStatus->civilstatus = "soltero";
        $civilStatus->observations = "comentario_soltero";
        $civilStatus->save();

        $civilStatus2 = new Civilstatus();
        $civilStatus2->civilstatus = "casado";
        $civilStatus2->observations = "comentario_casado";
        $civilStatus2->save();

        $civilStatus3 = new Civilstatus();
        $civilStatus3->civilstatus = "viudo";
        $civilStatus3->observations = "comentario_viudo";
        $civilStatus3->save();

        $civilStatus4 = new Civilstatus();
        $civilStatus4->civilstatus = "divorciado";
        $civilStatus4->observations = "comentario_divorciado";
        $civilStatus4->save();

        $civilStatus5 = new Civilstatus();
        $civilStatus5->civilstatus = "separado";
        $civilStatus5->observations = "comentario_separado";
        $civilStatus5->save();
    }
}
