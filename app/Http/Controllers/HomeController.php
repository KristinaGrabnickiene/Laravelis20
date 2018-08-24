<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Ieskome view failo /resources/views folderyje
        return view('contacts');
    }

    public function skaiciuokle() {
        return view('skaiciuokle');
    }

    public function suma(Request $request) {
        $x = $request->input('x'); //$_POST['x'];
        $y = $request->input('y');
        $suma = $x + $y;
        // Perdudu kintamuosius is controllerio i view dali
        return view('suma', ["skaicius1" => $x, "y" => $y, "suma" => $suma]);
    }
}


