<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
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

    public function confirmBookingPage(string $paket_booking, ?string $jenis_paket = null) {
        return view('confirm_booking', ['title' => 'Confirm Booking']);
    }

    public function submitBookingAction(Request $data) {

    }
}
