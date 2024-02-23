@extends('admin.template')
@section('konten')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Buku</h1>
      <nav>
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home Buku</a></li>
            <li class="breadcrumb-item active">Dashboard Admin</li>
         </ol>
      </nav>
      {{-- <button class="btn btn-secondary bi bi-plus" type="submit">Tambah</button> --}}
      <a class="btn btn-secondary bi bi-plus" title="Create" role="button" aria-disabled="true" href="{{ url('create') }}" type="submit">Tambah</a>
    </div><!-- End Page Title -->
    <table class="table table-striped">
      <thead>
         <tr>
            <th scope="col">Id</th>
            <th scope="col">judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Tahun Terbit</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Gambar</th>
            <th scope="col">Id Kategori</th>
         </tr>
      </thead>
      <tbody>
        @forelse ($buku as $item)
            <tr>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->penulis }}</td>
                <td>{{ $item->penerbit }}</td>
                <td>{{ $item->tahun_terbit }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td><img src="{{ url('storage/buku/'.$item->image) }}" class="rounded" style="width: 165px"></td>
                <td>{{ $item->kategori }}</td>

            </tr>            
        @empty
        <div class="alert alert-danger">
            Data Buku Belum Tersedia
        </div> 
        @endforelse
      </tbody>
    </table>
    {{ $buku->links() }}
</main>
@endsection