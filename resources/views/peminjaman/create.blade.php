<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Peminjaman</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: rgb(87, 137, 194)">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3>Tambah Buku</h3>
                        <form action="/peminjaman" method="post" enctype="multipart/form-data">                        
                            @csrf
                            <div class="form-group mb-4">
                                <label for="id_buku">Buku</label>
                                <select class="form-control" id="id_buku" name="id_buku">
                                   @foreach ($bukuList as $buku)
                                      <option value="{{ $buku->id }}">{{ $buku->judul }}</option>
                                   @endforeach 
                                </select>
                             </div>

                             <div class="form-group mb-4">
                                <label for="id_user">User</label>
                                <select class="form-control" id="id_user" name="id_user">
                                   @foreach ($peminjamanList as $peminjam)
                                      <option value="{{ $peminjam->id }}">{{ $peminjam->name }}</option>
                                   @endforeach 
                                </select>
                             </div>

                            {{-- <div class="form-group">
                                <label for="id_user" class="form-lable">User :</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="id_user" name="id_user">
                                    @foreach ($peminjamanList as $peminjam)
                                        <option value="{{ $peminjam->id }}">
                                        {{ $peminjam->name }}</option>
                                    @endforeach
                                </select>      
                            </div> --}}

                            <div class="form-group">
                                <label for="tgl_pinjam" class="form-lable">Tanggal Pinjam</label>
                                <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" placeholder="Tanggal Pinjam">
                            </div>

                            <div class="form-group">
                                <label for="tgl_kembali" class="form-lable">Tanggal Kembali</label>
                                <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" placeholder="Tanggal kembali">
                            </div>
                            <div class="form-group">
                                <label for="jumlah" class="form-lable">Jumlah</label>
                                <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Judul Buku">
                            </div>
                            <a href="{{ url('peminjaman') }}" class="btn btn-md btn-secondary">kembali</a>
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

