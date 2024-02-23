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
        <?php $i = 1; ?> 
        @forelse ($buku as $item)
            <tr>
                <th>{{ $i }}</th>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->penulis }}</td>
                <td>{{ $item->penerbit }}</td>
                <td>{{ $item->tahun_terbit }}</td>
                <td>{{ $item->deskripsi }}</td>
                <th><img src="{{ url('storage/buku/'.$item->image) }}" class="rounded" style="width: 100px"></th>
                <td>{{ $item->kategori }}</td>
                <td>
                  <a href="{{ ('/show'. $item->id_buku) }}" class="btn btn-primary btn-sm" title="show">View</a>
                  <a href="{{ ('/edit/'. $item->id_buku) }}" class="btn btn-info btn-sm" title="show">Edit</a>
                  <form action="{{ url('buku/'. $item->id_buku) }}" class="d-inline" method="post" onsubmit="return confrim('yakin akan menghapus data ini')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" title="Delete" name="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>
                </td>
            </tr> 
            <?php $i++; ?>            
        @empty
        <div class="alert alert-danger">
            Data Buku Belum Tersedia
        </div> 
        @endforelse
      </tbody>
    </table>
    {{ $buku->render() }}
</main>
@endsection