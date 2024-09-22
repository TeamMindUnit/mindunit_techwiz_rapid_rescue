<?php

namespace App\Exports;

use App\Models\contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ContactExport implements FromCollection
{
    /**
    * @return Collection
    */
    public function collection()
    {
        return collect(Contact::getallcontacts());

    }
    public function heading():array{
        return[
            'id',
            'Name',
            'Email',
            'Number',
            'Gender',
            'Message'
        ];
    }
}
