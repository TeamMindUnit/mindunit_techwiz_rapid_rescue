<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class drivers extends Model
{
    use HasFactory;
    public static function getalldrivers()
    {
        $result = DB::table('drivers')
        ->select('id',
        'Name',
        'Email',
        'Status',
        'Phone',
        'Password',
        'Profile')
        ->get()
        ->toarray();
        return $result;
    }
}
