<?php

namespace App\Http\Controllers;
use App\Models\Monitoring;
use Illuminate\Http\Request;

class RiwayatmonitoringController extends Controller
{
     public function index()
    {
        $monitorings = Monitoring::orderBy('recorded_at', 'desc')->paginate(20);
        return view('monitoring.index', compact('monitorings'));
    }
}
