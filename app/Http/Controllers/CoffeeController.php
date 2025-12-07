<?php

namespace App\Http\Controllers;

use App\Models\MenuKopi;
use App\Models\JenisKopi;
use App\Models\Barista;

class CoffeeController extends Controller
{
    // Halaman Menu Kopi
    public function menuKopi()
    {
        $menu = MenuKopi::all();
        return view('Menu-kopi', compact('menu'));  // Sesuai nama file Blade
    }

    // Halaman Jenis Kopi
    public function jenisKopi()
    {
        $jenis = JenisKopi::all();
        return view('Jenis-kopi', compact('jenis')); // Sesuai nama file Blade
    }

    // Halaman Barista
    public function barista()
    {
        $barista = Barista::all();
        return view('Barista', compact('barista')); // Sesuai nama file Blade
    }
}
