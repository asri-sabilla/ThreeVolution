@extends('layout.master', ['title' => 'About | Gree'])

@section('content')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">

{{-- ===== Visi & Misi ===== --}}
<section class="visi-misi-section">
  <div class="visi-card">
    <h2>Visi</h2>
    <p>
      Meningkatkan kesejahteraan petani melalui koperasi digital modern yang adil dan berkelanjutan.
    </p>
  </div>

  <div class="misi-card">
    <h2>Misi</h2>
    <ul>
      <li>Membeli hasil panen langsung dari petani dengan harga wajar.</li>
      <li>Menyediakan pasokan pertanian stabil dan terpercaya bagi distributor dan perusahaan.</li>
      <li>Mendukung digitalisasi rantai pasok untuk efisiensi dan transparansi pasar pertanian.</li>
      <li>Membangun ekosistem pertanian berkelanjutan melalui kolaborasi dan inovasi.</li>
    </ul>
  </div>
</section>

{{-- ===== Our Team ===== --}}
<section class="team-section py-5">
  <div class="container text-center">
    <h2 class="fw-bold mb-5">Meet Our Team</h2>
    <div class="row justify-content-center">
      <div class="col-md-3 mb-4">
        <img src="{{ asset('images/jihan.png') }}" class="team-photo mb-3" alt="Team 1">
        <h5 class="fw-semibold">Jihan Aqilah</h5>
        <p>Project Leader</p>
      </div>

      <div class="col-md-3 mb-4">
        <img src="{{ asset('images/Asri.jpg') }}" class="team-photo mb-3" alt="Team 2">
        <h5 class="fw-semibold">Asri Sabilla Putri</h5>
        <p>Backend Developer</p>
      </div>

      <div class="col-md-3 mb-4">
        <img src="{{ asset('images/Kia.png') }}" class="team-photo mb-3" alt="Team 3">
        <h5 class="fw-semibold">Dalila Tazkia</h5>
        <p>Frontend Developer</p>
      </div>
    </div>
    
  </div>
</section>
@endsection