<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use Illuminate\Http\Request;

class KonserController extends Controller
{
    public function show($id)
    // public function show(Konser $konser)
    {
        $konser = Konser::published()->findOrFail($id);
        return view('konsers.show',['konser'=>$konser]);
    }
}
