@extends('guest.layouts.class-layout')
@section('title','Tabata Class')
@section('content')

    <!-- Hero -->
    <section class="max-w-6xl mx-auto px-4 pt-7 pb-10 ">
    <img src="{{ asset('images/tabatafoto.jpg') }}" alt="Tabata Class" class="w-full h-[500px] object-cover rounded-md">
    </section>

    <!-- About -->
    <section class="max-w-6xl mx-auto px-4 pb-10">
        <h2 class="text-[#F189B8] font-bold text-xl mb-4">ABOUT OUR TABATA</h2>
        <p>
            Tabata adalah bentuk latihan interval intensitas tinggi (HIIT) dengan durasi pendek, 
            biasanya 20 detik latihan intens diikuti 10 detik istirahat. 
            Efektif membakar lemak dan meningkatkan stamina dalam waktu singkat, cocok untuk yang punya jadwal padat.
        </p>
    </section>

    <!-- Coaches -->
    <section class="max-w-6xl mx-auto px-4 pb-10">
        <h2 class="text-[#F189B8] font-bold text-xl mb-6">OUR BEST COACH</h2>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach([
                ['name' => 'Rachel Salsabila', 'rating' => '5/5', 'img' => '../images/Instruktur8.jpg'],
                ['name' => 'Chalisa Cintia', 'rating' => '4.6/5', 'img' => '../images/Instruktur9.jpg'],
                ['name' => 'Laura Moana', 'rating' => '4.3/5', 'img' => '../images/Instruktur10.jpg']
            ] as $coach)
                <div class="bg-white rounded-lg shadow p-4 text-center">
                    <img src="{{ $coach['img'] }}" alt="{{ $coach['name'] }}" class="w-full h-80 object-cover rounded-md mb-4">
                    <h3 class="font-semibold text-lg">{{ $coach['name'] }}</h3>
                    <p class="text-sm text-yellow-500 font-semibold">{{ $coach['rating'] }}</p>
                    <button class="mt-2 bg-[#F189B8] text-white px-4 py-2 rounded-full hover:bg-pink-600">Book Now</button>
                </div>
            @endforeach
        </div>
    </section>

@endsection