<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'image' => $image->hashName(),
            'kategori' => $request->kategori,
        ];

        buku::create($buku);
        return redirect()->to('buku')->with('succes', 'Data Berhasil Ditambahkan');
        
    }

    public function show(string $id): View
    {
        //get post by ID
        $buku = buku::findOrFail($id);

        //render view with post
        return view('buku.show', compact('buku'));
    }

    public function update($id, Request $request): RedirectResponse 
    {
     
        $imageName = "";
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image->storeAs('public/buku', $image->hashName());  
            $imageName = $image->hashName();         
        }
        
        $buku = buku::where("id_buku", $id);
        $dataBuku = $buku->first();
        
        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'deskripsi' => $request->deskripsi,
            'image' => $imageName == "" ? $dataBuku->image : $imageName,
            'kategori' => $request->kategori,
        ]);
        return redirect()->to('buku')->with('succes', 'Data Berhasil Ditambahkan');
        
    }

    public function edit(string $id): View {
                
        $buku = buku::where("id_buku", $id)->first();
        $updateId = $id;

        return view('buku.edit', compact('buku','id'));
    }

    public function destroy(string $id): RedirectResponse {

        $buku = buku::where("id_buku", $id)->first();
        
        Storage::delete('public/buku/'. $buku->image);
        buku::where("id_buku", $id)->delete();

        return redirect()->to('buku')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
