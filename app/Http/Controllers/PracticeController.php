<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    //
    function add(Request $req)
    {
        $device = new Device();
        $device->name = $req->name;
        $device->member_id = $req->member_id;
        $result = $device->save();

        if ($result) {
            return ['Result' => 'Data has been saved'];
        } else {
            return ['Result' => 'Operation failed'];

        }
    }


}
