<?php

namespace App\Imports;

use App\Models\Physician;
use Maatwebsite\Excel\Concerns\ToModel;

class PhysicianImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Physician([
            'Title' =>$row[0],
            'First Name' =>$row[1],
            'Last Name' =>$row[2],
            'Full Name' =>$row[3],
            'Gender' =>$row[4],
            'Specialty' =>$row[5],
            'Practice' =>$row[6],
            'Phone' =>$row[7],
            'Fax' =>$row[8],
            'Email' =>$row[9],
            'Address' =>$row[10],
            'City' =>$row[11],
            'Country' =>$row[12],
            'State' =>$row[13],
            'Zip' =>$row[14],
            'Latitude' =>$row[15],
            'Longitude' =>$row[16],
            'SIC Code' =>$row[17],
            'Website' =>$row[18],
        ]);
    }
}
