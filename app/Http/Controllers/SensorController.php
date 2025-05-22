<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensor;

class SensorController extends Controller
{
    public function store(Request $request)
    {
        $data = Sensor::create([
            'suhu' => $request->suhu,
            'kelembapan' => $request->kelembapan,
            // 'temperature' => $request->temperature,
            // 'humidity' => $request->humidity,
        ]);

        return response()->json(['status' => 'success', 'data' => $data]);
    }
}
