@extends('layout')
@section('title', "E-commerce Website")

@section('content')
    <!-- Hero Section -->
    <section class="hero text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Selamat Datang di MyStore</h1>
        <p class="lead">Temukan produk terbaik dengan harga terbaik</p>
        <a href="#" class="btn btn-light btn-lg mt-3">Belanja Sekarang</a>
        </div>
    </section>

    <!-- Produk Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold">Produk Terbaru</h2>
            <div class="row g-4">

        <!-- Product 1 -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100">
            <span class="badge bg-danger position-absolute m-2">-20%</span>
            <img src="https://dummyimage.com/300x200/cccccc/000000&text=Smartphone X" class="card-img-top" alt="Produk 1">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Smartphone X</h5>
                <p class="card-text text-muted small">Smartphone terbaru dengan fitur canggih.</p>
                <div class="mb-2 text-warning">
                ★★★★☆
                </div>
                <p class="fw-bold text-primary">Rp 3.999.000</p>
                <a href="#" class="btn btn-primary mt-auto">Tambah ke Keranjang</a>
            </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100">
            <img src="https://dummyimage.com/300x200/cccccc/000000&text=Laptop Pro" class="card-img-top" alt="Produk 2">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Laptop Pro</h5>
                <p class="card-text text-muted small">Laptop performa tinggi untuk kerja dan gaming.</p>
                <div class="mb-2 text-warning">
                ★★★★★
                </div>
                <p class="fw-bold text-primary">Rp 12.499.000</p>
                <a href="#" class="btn btn-primary mt-auto">Tambah ke Keranjang</a>
            </div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100">
            <img src="https://dummyimage.com/300x200/cccccc/000000&text=Headphone Wireless" class="card-img-top" alt="Produk 3">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Headphone Wireless</h5>
                <p class="card-text text-muted small">Audio jernih dengan teknologi noise cancelling.</p>
                <div class="mb-2 text-warning">
                ★★★★☆
                </div>
                <p class="fw-bold text-primary">Rp 899.000</p>
                <a href="#" class="btn btn-primary mt-auto">Tambah ke Keranjang</a>
            </div>
            </div>
        </div>

        <!-- Product 4 -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100">
            <img src="https://loremflickr.com/300/200/Smartwatch" class="card-img-top" alt="Produk 4">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Smartwatch</h5>
                <p class="card-text text-muted small">Pantau kesehatan dan aktivitas harian Anda.</p>
                <div class="mb-2 text-warning">
                ★★★★☆
                </div>
                <p class="fw-bold text-primary">Rp 1.499.000</p>
                <a href="#" class="btn btn-primary mt-auto">Tambah ke Keranjang</a>
            </div>
            </div>
        </div>
    </section>
@endsection


