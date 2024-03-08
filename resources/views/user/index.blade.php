@extends('admin.template')
@section('konten')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Users</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Users</a></li>
                    <li class="breadcrumb-item active">Dashboard Admin</li>
                </ol>
            </nav>
            {{-- <button class="btn btn-secondary bi bi-plus" type="submit">Tambah</button> --}}
            <a class="btn btn-secondary bi bi-plus" title="Create" role="button" aria-disabled="true"
                href="{{ route('user.create') }}" type="submit">Tambah</a>
        </div><!-- End Page Title -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Role</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @forelse ($users as $item)
                    <tr>
                        <th>{{ $i }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->telpon }}</td>
                        <td>{{ $item->role }}</td>
                        <td>
                            <a href="{{ 'user/' . $item->id . '/edit' }}" class="btn btn-primary btn-sm"
                                title="show"><i class="bi bi-pen"></i></a>
                            @if ($item->role != 'admin')
                                <form action="{{ url('user/' . $item->id) }}" class="d-inline" method="post"
                                    onsubmit="return confrim('yakin akan menghapus data ini')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Delete" name="submit" class="btn btn-danger btn-sm"><i
                                            class="bi bi-trash"></i></button>
                                </form>
                            @endif
                        </td>
                    </tr>
                    <?php $i++; ?>
                @empty
                    <div class="alert alert-danger">
                        Kategori Belum Tersedia
                    </div>
                @endforelse
            </tbody>
        </table>
        {{ $users->render() }}
    </main>
@endsection
