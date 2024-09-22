<?php

namespace App\Exports;

use App\Models\receptionist;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReceptionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(receptionist::getallreceptionists());
    }
    public function heading():array{
        return[
            'id',
            'Name',
            'Email',
            'Password',
            'Profile',
        ];
    }
}
