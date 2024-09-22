<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    public static function getallcontacts()
    {
        $result = DB::table('contacts')
        ->select('id',
        'Name',
        'Email',
        'Phone',
        'Subject',
        'Message')
        ->get()
        ->toarray();
        return $result;
    }
}
