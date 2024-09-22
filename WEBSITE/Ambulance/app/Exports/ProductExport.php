<?php

namespace App\Exports;

use App\Models\product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class ProductExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(product::getallproducts());
    }
    public function heading():array{
        return[
            'id',
            'Name',
            'Quantity',
            'Price',
            'Type',
            'Details',
            'Image',
        ];
    }
}
