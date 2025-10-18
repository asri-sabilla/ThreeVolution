@extends('layout.master', ['title' => 'Gree'])

@section('content')
<section class="hero text-center py-5">
    <h1 class="fw-bold display-5">Fresh <span class="text-warning">From Farmers</span>,<br>Straight <span class="text-warning">to You</span></h1>
    <p class="subtitle mt-3 mx-auto w-75">
        Empowering local farmers through digital cooperatives – discover fresh, organic produce and support sustainable agriculture with every purchase.
    </p>
</section>

<div class="hero-content d-flex flex-wrap justify-content-center align-items-center gap-5 mt-5">
    <div class="image-box bg-white shadow rounded-4" style="width:450px; height:300px;">
        <img src="{{ asset('images/petani.jpg') }}" class="w-100 h-100 rounded-4 object-cover" alt="Pertanian">
    </div>
    <div class="text-box" style="max-width:400px;">
        <h2 class="fw-bold mb-3">Fresh & Straight</h2>
        <p>
            Empowering local farmers through digital cooperatives – discover fresh, organic produce and support sustainable agriculture with every purchase.
        </p>
    </div>
</div>

<section class="info text-center py-5 mt-5">
    <h2 class="fw-bold mb-4">Get To Know</h2>
    <div class="d-flex flex-wrap justify-content-center gap-4">
        @foreach (range(1, 3) as $i)
            <div class="card shadow-sm p-3" style="width: 18rem;">
                <div class="img bg-light rounded mb-3" style="height:180px;"></div>
                <p>Organic produce and support sustainable agriculture with every purchase.</p>
            </div>
        @endforeach
    </div>
</section>
@endsection