<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: rgb(87, 137, 194)">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3>Tambah User</h3>
                        <form action="/user" method="post" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group">
                                <label for="name" class="form-lable">Nama</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <label for="username" class="form-lable">Username</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Masukkan Username">
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-lable">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Masukkan Email">
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-lable">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Masukkan Password">
                            </div>
                            <div class="form-group">
                                <label for="telpon" class="form-lable">Telepon</label>
                                <input type="text" class="form-control" id="telpon" name="telpon"
                                    placeholder="Masukkan Password">
                            </div>
                            <div class="form-group">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm-example"
                                    name="role" id="role">
                                    <option selected>Open this select role</option>
                                    <option value="admin">Admin</option>
                                    <option value="petugas">Petugas</option>
                                    <option value="peminjam">Peminjam</option>
                                </select>
                            </div>
                            <a href="{{ url('user') }}" class="btn btn-md btn-secondary">kembali</a>
                            <button type="reset" class="btn btn-md btn-primary">Reset</button>
                            <button type="submit" class="btn btn-md btn-success">Simpan</button>
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
        CKEDITOR.replace('content');
    </script>
</body>

</html>
