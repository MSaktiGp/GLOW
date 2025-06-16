@extends('guest.layouts.class-layout')
@section('title','Trampoline Class')
@section('content')

    <!-- Hero -->
    <section class="max-w-6xl mx-auto px-4 pt-7 pb-10 ">
        <img src="{{ asset('images/trampolinefoto.jpg') }}" alt="Trampoline Class" class="w-full h-[500px] object-cover rounded-md">
    </section>

    <!-- About -->
    <section class="max-w-6xl mx-auto px-4 pb-10">
        <h2 class="text-[#F189B8] font-bold text-xl mb-4">ABOUT OUR TRAMPOLINE FIT</h2>
        <p>
            Trampoline workout adalah olahraga melompat di atas trampolin mini yang membakar kalori, 
            memperkuat otot inti, dan memperbaiki keseimbangan. Gerakannya rendah dampak namun tinggi intensitas, 
            aman untuk persendian dan menyenangkan.
        </p>
    </section>

    <!-- Coaches -->
    <section class="max-w-6xl mx-auto px-4 pb-10">
        <h2 class="text-[#F189B8] font-bold text-xl mb-6">OUR BEST COACH</h2>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach([
                ['id' => 1, 'name' => 'Stevi Putri', 'slug' => 'stevi-putri', 'rating' => '5/5', 'img' => 'images/Instruktur3.jpg'],
                ['id' => 2, 'name' => 'Regina Tania', 'slug' => 'regina-tania', 'rating' => '4.5/5', 'img' => 'images/Instruktur7.jpg'],
                ['id' => 3, 'name' => 'Jenny Venya', 'slug' => 'jenny-venya', 'rating' => '4/5', 'img' => 'images/Instruktur4.jpg']
            ] as $coach)
                <div class="bg-white rounded-lg shadow p-4 text-center">
                    <img src="{{ asset($coach['img']) }}" alt="{{ $coach['name'] }}" class="w-full h-80 object-cover rounded-md mb-4">
                    <h3 class="font-semibold text-lg">{{ $coach['name'] }}</h3>
                    <p class="text-sm text-yellow-500 font-semibold">{{ $coach['rating'] }}</p>
                    <a href="{{ $coach['slug'] === 'stevi-putri' ? route('booked6') : route('coach.booked', ['jenis' => 'trampoline', 'coach' => $coach['slug']]) }}"
                       class="mt-2 inline-block bg-[#F189B8] text-white px-4 py-2 rounded-full hover:bg-pink-600">
                        Book Now
                    </a>
                </div>
            @endforeach
        </div>
    </section>

@endsection
