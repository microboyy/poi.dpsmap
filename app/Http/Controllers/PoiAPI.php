<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoiAPI extends Controller
{
    //
    function getData()
    {
        return ["name"=>"Hello","email"=>"hello@gnmail.com","age"=>22];
    }
}
