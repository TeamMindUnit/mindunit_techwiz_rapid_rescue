<?php

namespace App\Exports;

use App\Models\user;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(User::getallusers());
    }
    public function heading():array{
        return[
            'id',
            'name',
            'email',
            'role',
            'email_verified_at',
            'password'
        ];
    }
}
