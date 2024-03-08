@extends('admin.template')
@section('konten')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Peminjaman</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Peminjaman</a></li>
                    <li class="breadcrumb-item active">Dashboard Admin</li>
                </ol>
            </nav>
            {{-- <button class="btn btn-secondary bi bi-plus" type="submit">Tambah</button> --}}
            <a class="btn btn-secondary bi bi-plus" title="Create" role="button" aria-disabled="true"
                href="{{ url('peminjaman/create') }}" type="submit">Tambah</a>
            <a class="btn btn-primary bi bi-printer" title="Create" role="button" aria-disabled="true"
                href="{{ url('cetak') }}" type="submit"> Cetak</a>
        </div><!-- End Page Title -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">peminjaman</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col">jumlah</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = $peminjaman->firstItem(); ?>
                @forelse ($peminjaman as $item)
                    <tr>
                        <th>{{ $i }}</th>
                        @if ($item->buku)
                            <td>{{ $item->buku->judul }}</td>
                        @else
                            <td>[Buku Dihapus]</td>
                        @endif
                        @if ($item->user)
                            <td>{{ $item->user->name }}</td>
                        @else
                            <td>Akun di Hapus</td>
                        @endif
                        <td>{{ $item->tgl_pinjam }}</td>
                        <td>{{ $item->tgl_kembali }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>
                            @if ($item->status === '0')
                                Belum di Kembalikan
                            @else
                                Sudah di Kembalikan
                            @endif
                        </td>
                        <td>
                            {{-- <a href="{{ route('buku.show', $item->id) }}" class="btn btn-primary btn-sm" title="show"><i class="bi bi-eye"></i></a> --}}
                            <a href="{{ 'peminjaman/' . $item->id . '/edit' }}" class="btn btn-primary btn-sm"
                                title="edit"><i class="bi bi-pen"></i></a>
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
        {{ $peminjaman->links() }}
    </main>
@endsection
