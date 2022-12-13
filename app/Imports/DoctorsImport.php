<?php

namespace App\Imports;

use App\Models\Doctor;
use Maatwebsite\Excel\Concerns\ToModel;

class DoctorsImport implements ToModel
{
    // composer require maatwebsite/excel --ignore-platform-reqs
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Doctor([
            'id' => $row[0],
            'name' => $row[1],
            'email' => $row[2],
            'phone' => $row[3],
            'mobile' => $row[4],
            'city' => $row[5],
            'district' => $row[6],
            'specialist' => $row[7],
            'clinic_number' => $row[8],
            'address' => $row[9],
        ]);
    }
}
