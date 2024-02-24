<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Post - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h4>Judul :{{ $buku->judul }}</h4>
                        <h4>Penulis :{{ $buku->penulis }}</h4>
                        <h4>Penerbit :{{ $buku->penerbit }}</h4>
                        <h4>Tahun Terbit :{{ $buku->tahun_terbit }}</h4>
                        <img src="{{ url('storage/buku/'.$buku->image) }}" class="w-100 rounded" style="height: 500px; object-fit: contain">
                        <h4>Deskripsi Buku :{{ $buku->deskripsi }}</h4>
                        <h4>Kategori Buku :{{ $buku->kategori }}</h4>
                        <a href="{{ url('buku') }}" class="btn btn-md btn-secondary">kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

{{-- @extends('admin.template')
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
      {{-- <a class="btn btn-secondary bi bi-plus" title="Create" role="button" aria-disabled="true" href="{{ url('create') }}" type="submit">Tambah</a>
    </div><!-- End Page Title -->
    <table class="table table-striped">
        <thead>
           <tr>
              <th scope="col">#</th>
              <th scope="col">judul</th>
              <th scope="col">Penulis</th>
              <th scope="col">Penerbit</th>
              <th scope="col">Tahun Terbit</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Gambar</th>
              <th scope="col">Kategori</th>
              <th scope="col">Aksi</th>
           </tr>
        </thead>
        <tbody>
              <tr>
                  <th>{{ $buku->id_buku }}</th>
                  <td>{{ $buku->judul }}</td>
                  <td>{{ $buku->penulis }}</td>
                  <td>{{ $buku->penerbit }}</td>
                  <td>{{ $buku->tahun_terbit }}</td>
                  <td>{{ $buku->deskripsi }}</td>
                  <th><img src="{{ url('storage/buku/'.$buku->image) }}" class="rounded" style="width: 100px"></th>
                  <td>{{ $buku->kategori }}</td>
                  <td>
                    <a href="{{ route('buku.show', $buku->id_buku) }}" class="btn btn-primary btn-sm" title="show">View</a>
                    <a href="{{ ('/edit/'. $buku->id_buku) }}" class="btn btn-info btn-sm" title="show">Edit</a>
                    <form action="{{ url('buku/'. $buku->id_buku) }}" class="d-inline" method="post" onsubmit="return confrim('yakin akan menghapus data ini')">
                      @csrf
                      @method('DELETE')
                      <button type="submit" title="Delete" name="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                  </td>
              </tr> 
        </tbody>
    </table>
</main>
@endsection --}}
