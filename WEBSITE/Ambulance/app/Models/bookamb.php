<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class bookamb extends Model
{
    use HasFactory;
    public static function getallbookambs()
    {
        $result = DB::table('appointments')
        ->select('id',
        'Full_name',
        'Email',
        'Date',
        'Time',
        'Phone',
        'Drivers',
        'Address',
        'Condition',
        'Status')
        ->get()
        ->toarray();
        return $result;
    }
}
