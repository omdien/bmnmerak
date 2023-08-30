<?php

namespace App\Http\Controllers;

use App\Models\ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class DashboardRoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = ruangan::withCount(['masterbmn'])->get();
        return view('dashboard.rooms.index', compact('rooms'));
        // return view('dashboard.rooms.index', [
        // 'rooms' => ruangan::all()
        // 'rooms' => compact('rooms')
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ddd($request);
        // return $request->file('ru_barcode')->store('post-images');
        $validateData = $request->validate([
            'nl_nup' => 'required',
            'nl_lantai' => 'required',
            'nl_luas' => 'required',
            'ru_type' => 'required',
            'nl_ruang' => 'required',
            'ru_kode' => 'required',
            'ru_nama' => 'required',
            'ru_ket' => 'required',
            'ru_barcode' => 'image|file|max:2048'
        ]);

        $validateData['ru_dbr'] = '-';
        $validateData['ru_barcode'] = $request->file('ru_barcode')->store('bar_img');
        ruangan::create($validateData);

        return redirect('dashboard/rooms')->with('success', 'Butir baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(ruangan $room)
    {
        return view('dashboard.rooms.show', [
            "room" => $room,
            "barangs" => $room->masterbmn()->paginate(10),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ruangan $room)
    {
        return view('dashboard.rooms.edit', [
            "room" => $room,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ruangan $room)
    {
        $rules = [
            'nl_nup' => 'required',
            'nl_lantai' => 'required',
            'nl_luas' => 'required',
            'ru_type' => 'required',
            'nl_ruang' => 'required',
            'ru_kode' => 'required',
            'ru_nama' => 'required',
            'ru_ket' => 'required'
        ];
        $validateData = $request->validate($rules);
        if ($request->file('ru_barcode')) {
            if ($request->bar_lama) {
                File::delete(public_path("storage/" . $request->bar_lama));
            }
            $validateData['ru_barcode'] = $request->file('ru_barcode')->store('bar_img');
        }

        ruangan::where('id', $room->id)
            ->update($validateData);
        return redirect("dashboard/rooms")->with('success', 'Ruangan telah di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $ruangan)
    {
        $cari = ruangan::find($ruangan);
        Storage::delete($cari->ru_barcode);
        ruangan::destroy($ruangan);
        return redirect("dashboard/rooms");
    }
}
