<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginService extends Controller
{
    public function show()
    {        
        return view('/logapp');
    }
}
