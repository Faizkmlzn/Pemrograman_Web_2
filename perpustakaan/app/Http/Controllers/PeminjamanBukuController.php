<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeminjamanBukuController extends Controller
{
    public function index1(){
        return view('peminjaman_buku');
    }
    public function hasil1(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:5',
            'jenis_kelamin' => 'required',
            'tanggal' => 'required',
            'tema' => 'required',
            'isbn' => 'required',
        ]);

        return view('hasil_peminjaman', [
            'data' => $request
        ]);
    }
}
