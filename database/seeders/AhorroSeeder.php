<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AhorroImport;

class AhorroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new AhorroImport, 'ahorros.csv', 'local');
    }
}
