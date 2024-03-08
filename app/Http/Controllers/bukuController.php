<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function list(){
        $buku = buku::latest()->with('kategori')->paginate(5);
        return view('peminjaman', compact('buku'));
     }

     public function landing(){
        $buku = buku::latest()->paginate(10);
        return view('welcome', compact('buku'));
     }

    public function index()
    {
        $buku = buku::latest()->paginate(5);
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = kategori::all();
        return view('buku.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'stok' => 'required',
            'id_kategori' => 'required|max:500',
        ], [
            'judul.required' => 'Isi Judul',
            'penulis.required' => 'Isi penulis',
            'penerbit.required' => 'Isi penerbit',
            'tahun_terbit.required' => 'Isi tahun_terbit',
            'image.required' => 'Isi image',
            'stok.required' => 'Isi stok',
            'id_kategori.required' => 'Isi kategori',
        ]);
        

        $image = $request->file('image');
        $image->storeAs('public/buku', $image->hashName());

        $buku =[
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'deskripsi' => $request->deskripsi,
            'image' => $image->hashName(),
            'stok' => $request->stok,
            'id_kategori' => $request->id_kategori,
        ];

        buku::create($buku);
        return redirect()->to('buku')->with('succes', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         //get post by ID
         $buku = buku::findOrFail($id);

         //render view with post
         return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $buku = buku::findorFail($id);
        $kategori = kategori::orderBy('kategori')
            ->get();
        // dd($buku);

        return view('buku.edit', compact('buku', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $imageName = "";
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image->storeAs('public/buku', $image->hashName());  
            $imageName = $image->hashName();         
        }
        
        $buku = buku::where("id", $id);
        $dataBuku = $buku->first();
        
        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'deskripsi' => $request->deskripsi,
            'image' => $imageName == "" ? $dataBuku->image : $imageName,
            'stok' => $request->stok,
            'id_kategori' => $request->id_kategori,
        ]);
        return redirect()->to('buku')->with('succes', 'Data Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = buku::where("id", $id)->first();
        buku::where("id", $id)->delete();

        return redirect()->to('buku')->with('succes', 'Data Berhasil Dihapus');
    }
}
