<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: rgb(87, 137, 194)">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3>Tambah Buku</h3>
                        <form action="/buku" method="post" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label for="judul" class="form-lable">Judul Buku</label>
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Buku">
                            </div>
                            <div class="form-group">
                                <label for="penulis" class="form-lable">Penulis</label>
                                <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Masukkan Judul Buku">
                            </div>
                            <div class="form-group">
                                <label for="penerbit" class="form-lable">Penerbit</label>
                                <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukkan Judul Buku">
                            </div>
                            <div class="form-group">
                                <label for="tahun_terbit" class="form-lable">Tahun Terbit</label>
                                <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Masukkan Judul Buku">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi" class="form-lable">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Judul Buku">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-lable">Gambar</label>
                                <div class="col-cm-10">
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="stok" class="form-lable">Stok</label>
                                <input type="text" class="form-control" id="stok" name="stok" placeholder="Masukkan Stok Buku">
                            </div>
                            <div class="form-group mb-4">
                                <label for="id_kategori">Kategori</label>
                                <select class="form-control" id="id_kategori" name="id_kategori">
                                   @foreach ($kategori as $item)
                                      <option value="{{ $item->id_kategori }}">{{ $item->kategori }}</option>
                                   @endforeach 
                                </select>
                             </div>
                            <a href="{{ url('buku') }}" class="btn btn-md btn-secondary">kembali</a>
                            <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>
</body>
</html>

