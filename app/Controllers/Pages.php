<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => "Selamat Datang",
            'subJudul' => "Ini adalah halaman selamat datang"
        ];
        return view('selamat', $data);
    }
}
