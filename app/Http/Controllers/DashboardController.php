<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Kuliner;
use App\Models\Kesenian;
use App\Models\Fasilitas;
use App\Models\Kerajinan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class DashboardController extends Controller
{
    
    public function index()
    {
        $jumlah_wisata = Wisata::count();
        $jumlah_kesenian = Kesenian::count();
        $jumlah_kuliner = Kuliner::count();
        $jumlah_kerajinan = Kerajinan::count();
        $jumlah_fasilitas = Fasilitas::count();

        return view('home', compact('jumlah_wisata', 'jumlah_kesenian', 'jumlah_kuliner', 'jumlah_kerajinan', 'jumlah_fasilitas'));
    }



}
