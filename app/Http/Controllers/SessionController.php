<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getContent(Request $get_content)
    {
        if ($get_content->paket_booking == "wisuda_family") {
            if ($get_content->jenis_paket == "bronze") {
                if ($get_content->option == "snk") {
                    $content = view('components/snk')->render();
                } else if ($get_content->option == "jadwal") {
                    $content = view('components/jadwal')->render();
                }
            }
        }


        return response()->json(['content' => $content]);
    }




    // public function getContent(string $paket_booking, string $jenis_paket, string $get_content)
    // {
    //     if ($paket_booking == "wisuda_family") {
    //         if ($jenis_paket == "bronze") {
    //             if ($get_content == "snk") {
    //                 $content = view('components/snk')->render();
    //             } else if ($get_content == "jadwal") {
    //                 $content = view('components/jadwal')->render();
    //             }
    //         }
    //     }


    //     return response()->json(['content' => $content]);
    // }
}
