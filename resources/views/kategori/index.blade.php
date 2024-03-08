@extends('admin.template')
@section('konten')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Kategori</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Kategori</a></li>
                    <li class="breadcrumb-item active">Dashboard Admin</li>
                </ol>
            </nav>
            {{-- <button class="btn btn-secondary bi bi-plus" type="submit">Tambah</button> --}}
            <a class="btn btn-secondary bi bi-plus" title="Create" role="button" aria-disabled="true"
                href="{{ route('kategori.create') }}" type="submit">Tambah</a>
        </div><!-- End Page Title -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @forelse ($kategori as $item)
                    <tr>
                        <th>{{ $i }}</th>
                        <td>{{ $item->kategori }}</td>
                        <td>
                            {{-- <a href="{{ route('kategori.show', $item->id_kategori) }}" class="btn btn-primary btn-sm" title="show">View</a> --}}
                            <a href="{{ 'kategori/' . $item->id_kategori . '/edit' }}" class="btn btn-primary btn-sm"
                                title="show"><i class="bi bi-pen"></i></a>
                            <form action="{{ url('kategori/' . $item->id_kategori) }}" class="d-inline" method="post"
                                onsubmit="return confrim('yakin akan menghapus data ini')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="Delete" name="submit"
                                    class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                            </form>
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
        {{ $kategori->render() }}
    </main>
@endsection
