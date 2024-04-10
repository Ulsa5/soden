<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Enterprise;
use App\Models\Municipality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnterpriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $departments = Department::all();
        // $municipalities = Municipality::all();
        // Enterprise::all()->each(function ($enterprise) use($departments, $municipalities){
        //     $department = $departments->random();
        //     $municipality = $municipalities->random();
        //     $enterprise->departments()->attach($department);
        //     $enterprise->municipalities()->attach($municipality);
        // });


        $enterprise = new Enterprise();
        $enterprise->name = "Sistemas Integrales de Seguridad, S. A.";
        $enterprise->nit = "599191-9";
        $enterprise->address = "14 avenida 17-67, Zona 10";
        $enterprise->telephone = "596656";
        $enterprise->department_id = rand(1,22);
        $enterprise->municipality_id = rand(1,5);
        $enterprise->save();

        $enterprise2 = new Enterprise();
        $enterprise2->name = "Sistemas Globales de Seguridad, S. A.";
        $enterprise2->nit = "pendiente";
        $enterprise2->address = "14 avenida 17-67, Zona 10";
        $enterprise2->telephone = "2426-2426";
        $enterprise2->department_id = rand(1,22);
        $enterprise2->municipality_id = rand(1,5);
        $enterprise2->save();

        $enterprise3 = new Enterprise();
        $enterprise3->name = "Gold Eagle, S. A.";
        $enterprise3->nit = "pendiente";
        $enterprise3->address = "14 avenida 17-67, Zona 10";
        $enterprise3->telephone = "2426-2426";
        $enterprise3->department_id = rand(1,22);
        $enterprise3->municipality_id = rand(1,5);
        $enterprise3->save();

        $enterprise4 = new Enterprise();
        $enterprise4->name = "Antigua Memories Forever, S. A.";
        $enterprise4->nit = "pendiente";
        $enterprise4->address = "14 avenida 17-67, Zona 10";
        $enterprise4->telephone = "2426-2426";
        $enterprise4->department_id = rand(1,22);
        $enterprise4->municipality_id = rand(1,5);
        $enterprise4->save();

        $enterprise5 = new Enterprise();
        $enterprise5->name = "Fuelcheck Solutions, S. A.";
        $enterprise5->nit = "pendiente";
        $enterprise5->address = "14 avenida 17-67, Zona 10";
        $enterprise5->telephone = "2426-2426";
        $enterprise5->department_id = rand(1,22);
        $enterprise5->municipality_id = rand(1,5);
        $enterprise5->save();

        $enterprise6 = new Enterprise();
        $enterprise6->name = "Sherut, S. A.";
        $enterprise6->nit = "pendiente";
        $enterprise6->address = "14 avenida 17-67, Zona 10";
        $enterprise6->telephone = "2426-2426";
        $enterprise6->department_id = rand(1,22);
        $enterprise6->municipality_id = rand(1,5);
        $enterprise6->save();

    }
}
