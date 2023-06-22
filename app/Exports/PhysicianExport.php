<?php

namespace App\Exports;

use App\Models\Physician;
use Maatwebsite\Excel\Concerns\FromCollection;

class PhysicianExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Physician::all();
    }
}
