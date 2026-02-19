@extends('layout')
@section('title', "Shopping Cart")

@section('content')

<!-- Cart Section -->
<section class="py-5">
  <div class="container">
    <h2 class="mb-4 fw-bold">Keranjang Belanja</h2>

    <div class="row">
      
      <!-- Cart Items -->
      <div class="col-lg-8">
        <div class="table-responsive">
          <table class="table align-middle">
            <thead class="table-light">
              <tr>
                <th>Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="d-flex align-items-center gap-3">
                  <img src="https://via.placeholder.com/80" class="cart-img" alt="">
                  <div>
                    <h6 class="mb-0">Smartphone X</h6>
                    <small class="text-muted">Warna: Hitam</small>
                  </div>
                </td>
                <td>Rp 3.999.000</td>
                <td>
                  <input type="number" class="form-control" value="1" min="1" style="width: 80px;">
                </td>
                <td class="fw-bold">Rp 3.999.000</td>
                <td>
                  <button class="btn btn-sm btn-danger">Hapus</button>
                </td>
              </tr>

              <tr>
                <td class="d-flex align-items-center gap-3">
                  <img src="https://via.placeholder.com/80" class="cart-img" alt="">
                  <div>
                    <h6 class="mb-0">Headphone Wireless</h6>
                    <small class="text-muted">Warna: Putih</small>
                  </div>
                </td>
                <td>Rp 899.000</td>
                <td>
                  <input type="number" class="form-control" value="2" min="1" style="width: 80px;">
                </td>
                <td class="fw-bold">Rp 1.798.000</td>
                <td>
                  <button class="btn btn-sm btn-danger">Hapus</button>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>

      <!-- Summary -->
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="fw-bold mb-3">Ringkasan Belanja</h5>
            <div class="d-flex justify-content-between">
              <span>Subtotal</span>
              <span>Rp 5.797.000</span>
            </div>
            <div class="d-flex justify-content-between">
              <span>Ongkir</span>
              <span>Rp 20.000</span>
            </div>
            <hr>
            <div class="d-flex justify-content-between fw-bold">
              <span>Total</span>
              <span class="text-primary">Rp 5.817.000</span>
            </div>

            <a href="#" class="btn btn-primary w-100 mt-3">Lanjut ke Checkout</a>
            <a href="index.html" class="btn btn-outline-secondary w-100 mt-2">Lanjut Belanja</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection
