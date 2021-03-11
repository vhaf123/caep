<?php

namespace Database\Seeders;

use App\Models\Cargo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CiudadSeeder::class);
        $this->call(ComunaSeeder::class);
        $this->call(CivilSeeder::class);
        $this->call(SexoSeeder::class);
        Cargo::factory(5)->create();
        $this->call(ChequeSeeder::class);
        $this->call(BancarioSeeder::class);
        $this->call(ImponenteSeeder::class);
        $this->call(PrestamoSeeder::class);
        $this->call(SolicitudSeeder::class);
        $this->call(AhorroSeeder::class);
    }
}
