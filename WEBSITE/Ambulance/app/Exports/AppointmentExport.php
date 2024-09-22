<?php

namespace App\Exports;

use App\Models\appointment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AppointmentExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(appointment::getallappointments());
    }
    public function heading():array{
        return[
            'id',
            'First_name',
            'Last_name',
            'Email',
            'Phone',
            'Category',
            'Date',
            'Time',
            'Status',

        ];
    }
}
