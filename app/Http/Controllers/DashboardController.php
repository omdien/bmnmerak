<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\masterbmn;
use App\Models\ruangan;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $roomCount = ruangan::count();
        $bmnCount = masterbmn::count();
        $userCount = User::count();
        
        return view('dashboard.index',[
            'roomCount' => $roomCount,
            'bmnCount' => $bmnCount,
            'userCount' => $userCount,
        ]);
    }
}
