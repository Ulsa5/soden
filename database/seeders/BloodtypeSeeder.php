<?php

namespace Database\Seeders;

use App\Models\Bloodtype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BloodtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bloodtype = new Bloodtype();
        $bloodtype->type = "A+";
        $bloodtype->description = "n/a";
        $bloodtype->save();

        $bloodtype = new Bloodtype();
        $bloodtype->type = "A-";
        $bloodtype->description = "n/a";
        $bloodtype->save();

        $bloodtype = new Bloodtype();
        $bloodtype->type = "B+";
        $bloodtype->description = "n/a";
        $bloodtype->save();

        $bloodtype = new Bloodtype();
        $bloodtype->type = "B-";
        $bloodtype->description = "n/a";
        $bloodtype->save();

        $bloodtype = new Bloodtype();
        $bloodtype->type = "AB+";
        $bloodtype->description = "n/a";
        $bloodtype->save();

        $bloodtype = new Bloodtype();
        $bloodtype->type = "AB-";
        $bloodtype->description = "n/a";
        $bloodtype->save();

        $bloodtype = new Bloodtype();
        $bloodtype->type = "O+";
        $bloodtype->description = "n/a";
        $bloodtype->save();

        $bloodtype = new Bloodtype();
        $bloodtype->type = "O-";
        $bloodtype->description = "n/a";
        $bloodtype->save();
    }
}
