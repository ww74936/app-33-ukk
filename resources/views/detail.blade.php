@extends('layout.template')
@section('konten')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                        <a href="{{ url('/detail-buku') }}">Detail Buku</a>
                        <span>Fiksi</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg"
                            data-setbg="{{ Storage::url('public/buku/' . $buku->image) }}">
                            {{-- <div class="comment"><i class="fa fa-comments"></i> 11</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div> --}}
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title justify-content-between d-flex">
                                <div class="">

                                    <h3>{{ $buku->judul }}</h3>
                                    <span>Deskripsi</span>
                                </div>
                                <div class="">
                                    <form action="/koleksi" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary mr-5"><i class="bi bi-bookmark-fill"></i></button>
                                    </form>
                                </div>
                            </div>
                            {{-- <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <span>1.029 Votes</span>
                            </div> --}}
                            <p>{{ $buku->deskripsi }}</p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Genre :</span>{{ $buku->kategori->kategori }}</li>
                                            <li><span>Penulis :</span>{{ $buku->penulis }}</li>
                                            <li><span>Penerbit :</span>{{ $buku->penerbit }}</li>
                                            <li><span>Tahun Terbit :</span>{{ $buku->tahun_terbit }}</li>
                                            <li><span>Stok Buku :</span>{{ $buku->stok }}</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="anime__detail__btn">
                                {{-- <form action="/koleksi" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Tambah Koleksi</button>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </section>
    <!-- Anime Section End -->
@endsection
