<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = kategori::latest()->paginate(5);
        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = kategori::all();
        return view('kategori.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'kategori'     => 'required|min:5',
        ]);

        //create post
        kategori::create([
            'kategori'     => $request->kategori,
        ]);

        //redirect to index
        return redirect()->to('kategori')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = kategori::where("id_kategori", $id)->first();
        $updateId = $id;

        return view('kategori.edit', compact('kategori','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategori = kategori::where("id_kategori", $id);
        $dataKategori = $kategori->first();
        
        $kategori->update([
            'kategori' => $request->kategori,
        ]);
        return redirect()->to('kategori')->with('succes', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = kategori::where("id_kategori", $id)->first();
        kategori::where("id_kategori", $id)->delete();

        return redirect()->to('kategori')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
