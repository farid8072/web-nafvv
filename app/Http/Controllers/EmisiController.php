<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\EmisiHelper;

class EmisiController extends Controller
{
    public function hitung(Request $request)
    {
        $berat = $request->input('berat'); // input dari form
        $tipe = $request->input('tipe');   // 'rendah' atau 'tinggi'

        $emisi = EmisiHelper::hitungEmisi($berat, $tipe);

        return view('hasil', compact('emisi', 'berat', 'tipe'));
    }
}
