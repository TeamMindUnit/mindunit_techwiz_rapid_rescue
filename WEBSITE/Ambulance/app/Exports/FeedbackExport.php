<?php

namespace App\Exports;

use App\Models\feedback;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class FeedbackExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(feedback::getallfeedbacks());
    }
    public function heading():array{
        return[
            'id',
            'name',
            'email',
            'message',
            'rating'
        ];
}
}