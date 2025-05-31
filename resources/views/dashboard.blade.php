@extends('layout')

@section('content')
    <div class="container-fluid p-0">
        <img src="{{ asset('images/glow.png') }}" alt="GLOW" class="img-fluid w-100">

        <!-- About Us Section -->
    <section id="about-us" class="py-5 mt-5 mb-5" style="background-color: #F189B8;">
        <div class="container">
        <div class="row align-items-center">
            <!-- Teks -->
            <div class="col-md-8 text-white">
                <h3 class="fw-bold">Apa itu GLOW?</h3>
                <p class="mb-0">
                    GLOW (Girls Living on Wellness) adalah platform digital khusus wanita yang menyediakan
                    berbagai kelas olahraga dan membangun komunitas sehat serta suportif. Kamu dapat mengikuti
                    kelas sesuai dengan keinginan dengan harga yang terjangkau dan tempat yang nyaman. Daftarkan
                    dirimu sekarang juga dan jadilah bagian dari komunitas sehat kami!
                </p>
            </div>
            <!-- Gambar -->
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/glow1.png') }}" alt="About Us Image" class="img-fluid rounded-circle" style="max-width: 175px; margin-left: 150px;">
            </div>
        </div>
    </div>
</section>

<!-- Our Classes Section -->
<section id="classes" class="py-5" style="background-color: #fff5ff;">
    <div class="container">
        <h3 class="text-center mb-3 fw-bold" style="color: #79455C;">Our Classes</h3>
        <div class="row g-4">
            <!-- Contoh 1: Yoga -->
            <div class="col-md-4">
                <a href="{{ route('classes.yoga') }}" class="text-decoration-none">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <div class="ratio ratio-1x1 bg-light">
                            <img src="{{ asset('images/yoga.png') }}" class="w-100 h-100 object-fit-cover" alt="Yoga">
                        </div>
                        <div class="text-center bg-pink text-white fw-bold py-3 fs-5">
                            Yoga
                        </div>
                    </div>
                </a>
            </div>

            <!-- Ulangi pola di atas untuk kelas lainnya -->
            <div class="col-md-4">
                <a href="{{ route('classes.pilates') }}" class="text-decoration-none">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <div class="ratio ratio-1x1 bg-light">
                            <img src="{{ asset('images/pilates.png') }}" class="w-100 h-100 object-fit-cover" alt="Pilates">
                        </div>
                        <div class="text-center bg-pink text-white fw-bold py-3 fs-5">
                            Pilates
                        </div>
                    </div>
                </a>
            </div>

            <!-- Tambahkan Poundfit, Zumba, Tabata, Trampoline dengan cara yang sama -->

            <div class="col-md-4">
                <a href="{{ route('classes.poundfit') }}" class="text-decoration-none">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <div class="ratio ratio-1x1 bg-light">
                            <img src="{{ asset('images/poundfit.png') }}" class="w-100 h-100 object-fit-cover" alt="Poundfit">
                        </div>
                        <div class="text-center bg-pink text-white fw-bold py-3 fs-5">
                            Poundfit 
                        </div>
                    </div>
                </a>
            </div>

            <!-- Contoh lainnya: Zumba -->
            <div class="col-md-4">
                <a href="{{ route('classes.zumba') }}" class="text-decoration-none">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <div class="ratio ratio-1x1 bg-light">
                            <img src="{{ asset('images/zumba.png') }}" class="w-100 h-100 object-fit-cover" alt="Zumba">
                        </div>
                        <div class="text-center bg-pink text-white fw-bold py-3 fs-5">
                            Zumba
                        </div>
                    </div>
                </a>
            </div>

            <!-- Lanjutkan untuk Tabata dan Trampoline -->
            
            <div class="col-md-4">
                <a href="{{ route('classes.tabata') }}" class="text-decoration-none">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <div class="ratio ratio-1x1 bg-light">
                            <img src="{{ asset('images/tabata.png') }}" class="w-100 h-100 object-fit-cover" alt="tabata">
                        </div>
                        <div class="text-center bg-pink text-white fw-bold py-3 fs-5">
                            Tabata
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{ route('classes.trampoline') }}" class="text-decoration-none">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <div class="ratio ratio-1x1 bg-light">
                            <img src="{{ asset('images/trampoline.png') }}" class="w-100 h-100 object-fit-cover" alt="Trampoline">
                        </div>
                        <div class="text-center bg-pink text-white fw-bold py-3 fs-5">
                            Trampoline
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


    </div>

@endsection
