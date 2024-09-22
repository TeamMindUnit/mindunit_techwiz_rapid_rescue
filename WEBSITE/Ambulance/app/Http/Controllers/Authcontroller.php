<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    public function logout()
{
Auth::logout();

    // You can add a redirect or any other logic after the user logs out
    return redirect('/');
}
}
