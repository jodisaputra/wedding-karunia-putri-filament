@extends('layouts.main')
@section('title', 'Cerita Kami')
@section('content')
    <!-- start wpo-page-title -->
    <section class="wpo-page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Galeri</h2>
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="{{ route('/')  }}">Beranda</a></li>
                            <li>Galeri Foto Kami</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- start wpo-product-section -->
    <section class="wpo-product-section section-padding pb-0">
        <div class="container">
            <div class="wpo-product-wrap">
                <div class="row">
                    @forelse($galleries as $gallery)
                        <div class="col col-lg-3 col-md-6 col-sm-6 col-12 moreload">
                            <div class="wpo-product-item">
                                <div class="wpo-product-img">
                                    <img src="{{ asset('storage/') }}/{{ $gallery->image  }}" alt="">
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                            Tidak ada gambar tersedia!
                        </div>
                    @endforelse
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-product-section -->
@endsection
