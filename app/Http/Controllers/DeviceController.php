<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\device;

class DeviceController extends Controller
{
    //
    function list()
    {
        return Device::all();
    }
    function search($POI_N_Eng)
    {
    return Device::where("POI_N_Eng","like","%".$POI_N_Eng."%")->get();
    }
}
