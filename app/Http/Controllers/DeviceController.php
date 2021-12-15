<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    //
    function list()
    {
        return Device::all();
    }

    function delete($id)
    {
        return ["result" =>"record has been deleted"];

    }
}
