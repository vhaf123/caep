<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImponentesImport;

class ImponenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new ImponentesImport, 'imponentes.csv', 'local');
    }
}
