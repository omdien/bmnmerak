<?php

namespace App\Http\Controllers;

use App\Models\masterbmn;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class BMNsController extends Controller
{
    public function index($id)
    {
        $bmn  = masterbmn::firstwhere('id', $id);
        $slice =  'https://drive.google.com/uc?export=view&id=' .
            Str::between($bmn->br_link_photo, 'd/', '/');
        return view('barang', [
            "bmn" => $bmn,
            "src" => $slice,
        ]);
    }
}
