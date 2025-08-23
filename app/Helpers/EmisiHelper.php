<?php

namespace App\Helpers;

class EmisiHelper
{
    public static function hitungEmisi($beratKg, $tipe = 'rendah')
    {
        $faktor = $tipe === 'tinggi' ? 6 : 2.9;
        return $beratKg * $faktor;
    }
}
