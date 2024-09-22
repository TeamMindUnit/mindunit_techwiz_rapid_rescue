<?php

namespace App\Exports;

use App\Models\service;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ServiceExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(service::getallservices());
    }
    public function heading():array{
        return[
            'id',
            'service_name',
            'service_detail',
            'service_image',

        ];
    }
}
