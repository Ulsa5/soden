<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Attentioncall;
use App\Models\Bankaccount;
use App\Models\Comment;
use App\Models\Congratulation;
use App\Models\Contract;
use App\Models\Digecamcredential;
use App\Models\Digesspcredential;
use App\Models\Dpi;
use App\Models\Drivelicense;
use App\Models\Employee;
use App\Models\Familiar;
use App\Models\Firegun;
use App\Models\Igssaffiliation;
use App\Models\Insurance;
use App\Models\Miss;
use App\Models\Ornatbolet;
use App\Models\Permission;
use App\Models\Poligraph;
use App\Models\Position;
use App\Models\Scanneddocument;
use App\Models\Suspension;
use App\Models\Training;
use App\Models\Ubication;
use App\Models\Vacation;
use App\Models\Vaccine;
use App\Models\Verification;
use Illuminate\Auth\Events\Verified;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Saul Escobar',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UserSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(BloodtypeSeeder::class);
        $this->call(CarrierSeeder::class);
        $this->call(UbicationtypeSeeder::class);
        $this->call(CivilstatusSeeder::class);
        Position::factory(15)->create();

        //Relacionados
        $this->call(MunicipalitySeeder::class);
        $this->call(EnterpriseSeeder::class);
        Employee::factory(50)->create();
        Ubication::factory(20)->create();
        Address::factory(60)->create();
        Contract::factory(35)->create();
        Vaccine::factory(85)->create();
        Igssaffiliation::factory(15)->create();
        Bankaccount::factory(50)->create();
        Attentioncall::factory(125)->create();
        Congratulation::factory(100)->create();
        Miss::factory(100)->create();
        Permission::factory(300)->create();
        Firegun::factory(75)->create();
        Training::factory(89)->create();
        Comment::factory(325)->create();
        Suspension::factory(35)->create();
        Vacation::factory(85)->create();
        Verification::factory(15)->create();
        Poligraph::factory(35)->create();
        Drivelicense::factory(28)->create();
        Insurance::factory(35)->create();
        Digesspcredential::factory(28)->create();
        Digecamcredential::factory(29)->create();
        Familiar::factory(29)->create();
        Ornatbolet::factory(50)->create();
        Scanneddocument::factory(198)->create();
        Dpi::factory(50)->create();






    }
}
