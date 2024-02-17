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
      <button class="btn btn-secondary bi bi-plus" type="submit">Tambah</button>
    </div><!-- End Page Title -->
    <table class="table table-striped">
      <thead>
         <tr>
            <th scope="col">No</th>
            <th scope="col">Id</th>
            <th scope="col">judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Tahun Terbit</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Gambar</th>
            <th scope="col">Stok</th>
            <th scope="col">Id Kategori</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
         </tr>
      </tbody>
    </table>
</main>
@endsection