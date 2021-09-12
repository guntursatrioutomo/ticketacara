<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use Illuminate\Http\Request;

class KonserController extends Controller
{
    public function show(Konser $konser)
    {
        return view('konsers.show',['konser'=>$konser]);
    }
}
