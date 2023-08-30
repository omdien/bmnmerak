<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ruangan;
use App\Models\masterbmn;

class RoomsController extends Controller
{
    public function index($room)
    {
        $ruang  = ruangan::firstwhere('ru_kode', $room);
        return view('room', [
            "ruang" => $ruang,
            "barangs" => $ruang->masterbmn
        ]);
    }
}
