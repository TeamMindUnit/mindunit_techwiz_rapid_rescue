<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    use HasFactory;
    public static function getallfeedbacks()
    {
        $result = DB::table('feedback')
        ->select('id','name','email','service','feedback')
        ->get()
        ->toarray();
        return $result;
    }
}
