<?php

namespace App\Exports;

use App\Models\checkin;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CheckoutExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(checkin::getallcheckins());
    }
    public function heading():array{
        return[
            'id',
            'state',
            'fname',
            'lname',
            'city',
            'country',
            'category',
            'zipcode',
            'email',
            'phone',

        ];
    }
}
