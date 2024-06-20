<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function harga()
    {
        return view("harga", [
            "title" => "Harga",
            "paket" => Paket::all(),
            "css" => "/css/harga.css",
        ]);
    }

    public function detail(Paket $paket)
    {
        return view("detail", [
            "title" => $paket->nama,
            "paket" => $paket,
            "css" => "/css/detail.css",
        ]);
    }

    public function pembayaran_berhasil()
    {
        return view("pembayaran-berhasil", [
            "title" => "Pembayaran Berhasil",
            "css" => "/css/pembayaran-berhasil.css",
        ]);
    }
}
