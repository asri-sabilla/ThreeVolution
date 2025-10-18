@extends('layout.master', ['title' => 'Program | Gree'])

@section('content')
<section class="program-section">
  <div class="program-header text-center">
    <h2>Program Kami</h2>
    <p>Solusi mewujudkan ekonomi pertanian yang berkelanjutan melalui koperasi digital</p>
  </div>

  <div class="program-cards">
    <div class="program-card">
      <img src="{{ asset('images/petani.jpg') }}" alt="Marketplace Pertanian">
      <h3>Marketplace Pertanian</h3>
      <p class="subtitle">Pemanfaatan Digital</p>
      <p class="desc">Petani menjual hasil panen langsung melalui koperasi digital dengan harga transparan.</p>
      <button>Detail Program</button>
    </div>

    <div class="program-card">
      <img src="{{ asset('images/petani.jpg') }}" alt="Dashboard Konsumen">
      <h3>Dashboard Konsumen</h3>
      <p class="subtitle">Keberlangsungan Manfaat</p>
      <p class="desc">Menampilkan riwayat transaksi, reward poin, dan data akun secara transparan.</p>
      <button>Detail Program</button>
    </div>

    <div class="program-card">
      <img src="{{ asset('images/petani.jpg') }}" alt="Flash Sale">
      <h3>Flash Sale</h3>
      <p class="subtitle">Win Win Solution</p>
      <p class="desc">Produk dari panen gagal dijual lebih murah untuk mengurangi kerugian petani.</p>
      <button>Detail Program</button>
    </div>
    
  </div>
</section>
@endsection