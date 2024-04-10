<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 22; $i++)
        {
            $department = new Department();
            // $department->code = json_encode('0'.$i+1);
            $department->code = $i+1;
            $department->name ='Departamento '.$i+1;
            $department->save();
        }
    }
}
