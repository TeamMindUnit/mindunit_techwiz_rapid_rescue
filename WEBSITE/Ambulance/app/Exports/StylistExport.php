<?php

namespace App\Exports;

use App\Models\stylist;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class StylistExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(stylist::getallstylists());
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
