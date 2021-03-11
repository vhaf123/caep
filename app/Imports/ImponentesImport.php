<?php

namespace App\Imports;

use App\Models\Imponente;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

use Illuminate\Support\Carbon;

class ImponentesImport implements ToModel, WithHeadingRow, WithCustomCsvSettings
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Imponente([
            'rut' => $row['rut'],
            'user_id' => $row['user_id'],
            'fecha_nacimiento' => Carbon::createFromFormat('d/m/Y', $row['fecha_nacimiento']),
            'domicilio_particular' => $row['domicilio_particular'],
            'domicilio_comercial' => $row['domicilio_comercial'],
            'ciudad_id' => $row['ciudad_id'],
            'comuna_id' => $row['comuna_id'],
            'celular' => $row['celular'],
            'numero_imponente' => $row['numero_imponente'],
            'civil_id' => 1,
            'sexo_id' => 2,
            'cargo_id' => 1,
        ]);
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ";"
        ];
    }
}
