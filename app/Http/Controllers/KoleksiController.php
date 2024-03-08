<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    public function index()
    {
        $data = buku::all();
        return view('koleksi.index', compact('data'));
    }

    
}
