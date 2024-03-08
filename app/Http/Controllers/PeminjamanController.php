<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\peminjaman;
use App\Models\User;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman = peminjaman::latest()->paginate(5);
        return view('peminjaman.index', compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peminjamanList = User::where('role', 'peminjam')->get();
        $bukuList = buku::all();

        return view('peminjaman.create', compact('peminjamanList', 'bukuList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valiadateData = $request->validate([
            'id_user' => 'required',
            'id_buku' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'jumlah' => 'required',
        ]);

        peminjaman::create($valiadateData);
        return redirect()->to('peminjaman')->with('success', 'Berhasil di Tambah');
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
        $peminjamanList = User::where('role', 'peminjam')->get();
        $bukuList = buku::all();
        $peminjaman = peminjaman::findOrFail($id);

        return view('peminjaman.edit', compact('peminjamanList', 'bukuList', 'peminjaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'status' => 'required'
        ]);

        $peminjaman = peminjaman::findOrFail($id);

        $peminjaman->update([
            'status' => $request->status,
        ]);

        return redirect()->to('peminjaman')->with('success', 'Berhasil edit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peminjaman = peminjaman::findorFail($id);

        $peminjaman->delete();
        return redirect()->to('peminjaman')->with('success', 'Berhasil Hapus Data');
    }

    public function cetak()
    {
        $peminjaman = peminjaman::latest()->with('user')->with('buku')->paginate(200);
        return view('peminjaman.cetak', compact('peminjaman'));
    }
}
