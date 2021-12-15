<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    //
    function getData()
    {

        return['name'=>'Tom','email'=>'tom@hardy.com',];

    }
}
