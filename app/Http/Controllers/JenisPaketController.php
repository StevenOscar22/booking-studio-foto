<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisPaketController extends Controller
{
    public function index(string $paket_booking)
    {

        if ($paket_booking == 'wisuda') {
            return view("booking/paket_wisuda/");
        }
    }

    public function jenisPaket(string $paket_booking, string $jenis_paket)
    {

        if ($paket_booking == 'wisuda_family') {
            if ($jenis_paket == 'bronze') {
                return view("booking/paket_wisuda/paket_bronze");
            }
        }
    }
}
