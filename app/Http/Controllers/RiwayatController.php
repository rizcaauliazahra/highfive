<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monitoring;

class RiwayatController extends Controller
{
    public function index()
    {
         $monitorings = Monitoring::orderBy('recorded_at', 'desc')->paginate(20);
        return view('riwayat', compact('monitorings')); 
    }
}
