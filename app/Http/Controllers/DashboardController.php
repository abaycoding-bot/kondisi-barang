<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalAset = Barang::count();
        $asetPerbaikan = Barang::where('kondisi', 'Perbaikan')->count();

        return view('admin.index', compact('totalAset', 'asetPerbaikan'));
    }
}