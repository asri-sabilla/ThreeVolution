@extends('layout.master', ['title' => 'Contact | Gree'])

@section('content')
<section style="background: #f7faff; padding: 80px 20px;">
    <div class="container" style="max-width: 1100px; background: white; border-radius: 20px; box-shadow: 0 8px 30px rgba(0,0,0,0.1); padding: 50px;">
        <div class="row g-5 align-items-center">
            
            <!-- Bagian Kiri: Form -->
            <div class="col-md-6">
                <h2 class="fw-bold mb-4" style="color: #c7a300;">Hubungi Kami</h2>
                <p style="color: #555;">Kami siap membantu Anda! Silakan isi formulir di bawah ini untuk pertanyaan, kerja sama, atau informasi lebih lanjut.</p>
                
                <form class="mt-4">
                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
                        <input type="text" class="form-control rounded-3" id="name" placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <input type="email" class="form-control rounded-3" id="email" placeholder="Masukkan email Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label fw-semibold">Pesan</label>
                        <textarea class="form-control rounded-3" id="message" rows="4" placeholder="Tulis pesan Anda di sini..." required></textarea>
                    </div>
                    <button type="submit" class="btn" style="background-color:#f8d32d; color:white; border:none; padding:10px 25px; border-radius:10px;">Kirim Pesan</button>
                </form>
            </div>

            <!-- Bagian Kanan: Info Kontak -->
            <div class="col-md-6 text-center text-md-start">
                <h4 class="fw-bold mb-3" style="color:#c7a300;">Informasi Kontak</h4>
                <p style="color:#555; line-height:1.8;">
                    <strong>Alamat:</strong><br>
                    Jl. Pahlawan No. 10, Jakarta Selatan, Indonesia<br><br>
                    <strong>Email:</strong><br>
                    support@greeapp.id<br><br>
                    <strong>Telepon:</strong><br>
                    +62 812 3456 7890
                </p>

                <div class="mt-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.001357903646!2d110.39189427595604!3d-7.878978492115589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57a4e0e1e6c1%3A0x3027a76e352bd60!2sYogyakarta!5e0!3m2!1sid!2sid!4v1708101100000!5m2!1sid!2sid" 
                            width="100%" height="250" style="border:0; border-radius:10px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection