<?php

namespace App\Http\Controllers;

use App\Models\masterbmn;
use App\Models\ruangan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DashboardBMNsController extends Controller
{
    public function index()
    {
        return view('dashboard.bmns.index', [
            'bmns' => masterbmn::paginate(10)
        ]);
    }

    public function show(masterbmn $bmn)
    {
        masterbmn::where('id',$bmn->id)->update(['ruangan_id' => 26]);
        $slice =  'https://drive.google.com/uc?export=view&id=' .
            Str::between($bmn->br_link_photo, 'd/', '/');
        return view('dashboard.bmns.show', [
            "bmn" => $bmn,
            "src" => $slice,
        ]);
    }

    public function tambah(int $room)
    {
        $ruangan = ruangan::find($room);
        $barang = masterbmn::where('ruangan_id','!=',$room);

        if(request('search')) {
           $barang->where('br_nama','like','%'.request('search') .'%');
        //    dd($barang);
        }

        return view('dashboard.rooms.add', [
            "room" => $ruangan,
            "bmns" => $barang->paginate(10),
        ]);
    }

    public function nambah(int $bmn, int $room){
        $barang = masterbmn::find($bmn);
        $ruangan = ruangan::find($room);
        
        if($barang) {
            $barang->ruangan_id = $room;
            $barang->save();
        }

        return view('dashboard.rooms.show', [
            "room" => $ruangan,
            "barangs" => $ruangan->masterbmn()->paginate(10),
        ]);
    }

    public function pindah(int $bmn, int $room)
    {
        $barang = masterbmn::find($bmn);
        $ruangan = ruangan::find($room);
        
        if($barang) {
            $barang->ruangan_id = 26;
            $barang->save();
        }

        return view('dashboard.rooms.show', [
            "room" => $ruangan,
            "barangs" => $ruangan->masterbmn()->paginate(10),
        ]);

        
    }
}
