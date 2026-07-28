<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index() {
        // return "Halo kami sedang belajar laravel";
        $title = "Belajar Matematika Dasar";
        return view('belajar', compact('title'));
    }

    // PENJUMLAHAN
    public function tambah()
    {
        $jumlah = 0;
        $title = "Data Penjumlahan";
        return view('tambah', compact('jumlah','title'));
    }

    public function storeTambah(Request $request) // --> cara penulisan ke dua
    {
        // $request = new Request(); -->cara penulisan pertama
        $angka1 = $request->angka1;
        $angka2 = $request->input('angka2');

        $jumlah = $angka1 + $angka2;
        return view('tambah', compact('jumlah'));
    }


    // PENGURANGAN
    public function kurang()
    {
        $jumlah = 0;
        $title = "Data Pengurangan";
        return view('kurang', compact('jumlah','title'));
    }

    public function storeKurang(Request $request) // --> cara penulisan ke dua
    {
        // $request = new Request(); -->cara penulisan pertama
        $angka1 = $request->angka1;
        $angka2 = $request->input('angka2');

        // $jumlah = max(0,$angka1 - $angka2); --> JIKA TIDAK INGIN HASILNYA 0 / MINUS
        $jumlah = $angka1 - $angka2;
        return view('kurang', compact('jumlah'));
    }


    // PERKALIAN
    public function kali()
    {
        $jumlah = 0;
        $title = "Data Perkalian";
        return view('kali', compact('jumlah','title'));
    }

    public function storeKali(Request $request) // --> cara penulisan ke dua
    {
        // $request = new Request(); -->cara penulisan pertama
        $angka1 = $request->angka1;
        $angka2 = $request->input('angka2');

        $jumlah = $angka1 * $angka2;
        return view('kali', compact('jumlah'));
    }


    // PEMBAGIAN
    public function bagi()
    {
        $jumlah = 0;
        $title = "Data Pembagian";
        return view('bagi', compact('jumlah','title'));
    }

    public function storeBagi(Request $request) // --> cara penulisan ke dua
    {
        // $request = new Request(); -->cara penulisan pertama
        $angka1 = $request->angka1;
        $angka2 = $request->input('angka2');

        $jumlah = $angka1 / $angka2;
        return view('bagi', compact('jumlah'));
    }

}
