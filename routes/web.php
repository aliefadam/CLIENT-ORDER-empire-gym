<?php

use App\Http\Controllers\PaketController;
use Illuminate\Support\Facades\Route;


Route::get("/", [PaketController::class, "harga"])->name("harga");
Route::get("/detail/{paket}", [PaketController::class, "detail"])->name("detail");
Route::get("/pembayaran-berhasil", [PaketController::class, "pembayaran_berhasil"])->name("pembayaran-berhasil");
