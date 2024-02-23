<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class bukuController extends Controller
{
    public function index(): View{
        $buku = buku::latest()->paginate(5);
        return view('buku.index', compact('buku'));
    }

    public function create(): View{
        return view('buku.create');
    }

    public function store(Request $request): RedirectResponse 
    {
        $this->validate($request,[
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'kategori' => 'required',
        ], [
            'judul.required' => 'Isi Judul',
            'penulis.required' => 'Isi penulis',
            'penerbit.required' => 'Isi penerbit',
            'tahun_terbit.required' => 'Isi tahun_terbit',
            'deskripsi.required' => 'Isi deskripsi',
            'image.required' => 'Isi image',
            'kategori.required' => 'Isi kategori',
        ]);
        

        $image = $request->file('image');
        $image->storeAs('public/buku', $image->hashName());

        $buku =[
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'deskripsi' => $request->deskripsi,
            'image' => $request->image,
            'kategori' => $request->kategori,
        ];

        buku::create($buku);
        return redirect()->to('buku')->with('succes', 'Data Berhasil Ditambahkan');

    }

}
