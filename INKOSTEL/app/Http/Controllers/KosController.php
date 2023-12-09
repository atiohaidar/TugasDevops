<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kos;
use App\Models\Detail;

class KosController extends Controller
{
    public function getKosData()
    {
        $kosData = Kos::all(); // Sesuaikan dengan model dan kolom Anda


        return response()->json($kosData);
    }
}