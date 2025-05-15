<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Riwayatmonitoring extends Model
{
      protected $fillable = ['location', 'temperature', 'humidity', 'recorded_at'];
}
