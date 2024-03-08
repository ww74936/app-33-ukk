<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Peminjaman</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: rgb(87, 137, 194)">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3>Edit Peminjaman</h3>
                        <form action="{{ url('peminjaman/' . $peminjaman->id) }}" method="post" enctype="multipart/form-data">
                        
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="id_buku" class="form-lable">Judul Buku :</label>
                                <select class="form-control form-select-sm" aria-label=".form-select-sm example" id="id_buku" name="id_buku">
                                    @foreach ($bukuList as $buku)
                                        <option value="{{ $buku->id == $peminjaman->id ? 'selected' : '' }}">
                                        {{ $buku->judul }}</option>
                                    @endforeach
                                </select>      
                            </div>
                            
                            <div class="form-group">
                                <label for="id_user" class="form-lable">User :</label>
                                <select class="form-control form-select-sm" aria-label=".form-select-sm example" id="id_user" name="id_user">
                                    @foreach ($peminjamanList as $peminjam)
                                        <option value="{{ $peminjam->id == $peminjaman->id ? 'selected' : '' }}">
                                        {{ $peminjam->name }}</option>
                                    @endforeach
                                </select>      
                            </div>

                            <div class="form-group">
                                <label for="tgl_pinjam" class="form-lable">Tanggal Pinjam</label>
                                <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="{{ old('tgl_pinjam', $peminjaman->tgl_pinjam) }}" placeholder="Masukkan Tanggal Pinjam">
                            </div>

                            <div class="form-group">
                                <label for="tgl_kembali" class="form-lable">Tanggal Kembali</label>
                                <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" value="{{ old('tgl_kembali', $peminjaman->tgl_kembali) }}" placeholder="Masukkan Tanggal Kembali">
                            </div>
                            <div class="form-group">
                                <label for="jumlah" class="form-lable">Jumlah</label>
                                <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{ old('jumlah', $peminjaman->jumlah) }}" placeholder="Masukkan Jumlah Pinjam ">
                            </div>
                            <fieldset class="row mb-3 mt-4">
                                <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="status" value="0" {{ $peminjaman->status == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status">Belum Dikembalikan</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="status" value="1" {{ $peminjaman->status == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status">SudahDikembalikan</label>
                                    </div>
                                </div>
                            </fieldset>
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

