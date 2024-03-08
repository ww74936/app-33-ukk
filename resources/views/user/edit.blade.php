<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: rgb(87, 137, 194)">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3>Edit User</h3>
                        <form action="{{ url('user/' . $user->id) }}" method="post" enctype="multipart/form-data">
                        
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name" class="form-lable">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" placeholder="Masukkan Tanggal Pinjam">
                            </div>

                            <div class="form-group">
                                <label for="username" class="form-lable">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="{{ old('username', $user->username) }}" placeholder="Masukkan Tanggal Kembali">
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-lable">email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" placeholder="Masukkan email ">
                            </div>
                            <div class="form-group">
                                <label for="telpon" class="form-lable">Telepon</label>
                                <input type="text" class="form-control" id="telpon" name="telpon" value="{{ old('telpon', $user->telpon) }}" placeholder="Masukkan Telpon">
                            </div>
                            <div class="form-group">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm-example"
                                    name="role" id="role">
                                    <option selected>Open this select role</option>
                                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="petugas" {{ $user->role == 'petugas' ? 'selected' : '' }}>Petugas</option>
                                    <option value="peminjam" {{ $user->role == 'peminjam' ? 'selected' : '' }}>Peminjam</option>
                                </select>
                            </div>
                            <a href="{{ url('user') }}" class="btn btn-md btn-secondary">kembali</a>
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

