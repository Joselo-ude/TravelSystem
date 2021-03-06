<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Travel extends Controller
{
    public function getIndex(){
        return view('principal');
    }
}
