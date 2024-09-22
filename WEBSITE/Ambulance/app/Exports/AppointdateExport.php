<?php

namespace App\Exports;

use App\Models\appointdate;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AppointdateExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(appointdate::getallappointdates());
    }
    public function heading():array{
        return[
            'id',
            'date',
            'time',
            'category',

        ];
    }
}
