@extends('layouts.class-layout')
@section('title','Zumba Class')
@section('content')

    <!-- Hero -->
    <section class="max-w-6xl mx-auto px-4 pt-7 pb-10 ">
    <img src="{{ asset('images/zumbafoto.jpg') }}" alt="Zumba Class" class="w-full h-[500px] object-cover rounded-md">
    </section>

    <!-- About -->
    <section class="max-w-6xl mx-auto px-4 pb-10">
        <h2 class="text-[#F189B8] font-bold text-xl mb-4">ABOUT OUR ZUMBA</h2>
        <p>
            Zumba adalah latihan kebugaran yang memadukan gerakan tari Latin dan musik ritmis. 
            Dirancang untuk membakar kalori dengan cara yang menyenangkan, Zumba meningkatkan kebugaran jantung, 
            kelincahan, dan semangat peserta melalui suasana yang penuh energi.
        </p>
    </section>

    <!-- Coaches -->
    <section class="max-w-6xl mx-auto px-4 pb-10">
        <h2 class="text-[#F189B8] font-bold text-xl mb-6">OUR BEST COACH</h2>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach([
                ['name' => 'Dela Putri', 'rating' => '5/5', 'img' => '../images/Instruktur7.jpg'],
                ['name' => 'Celina Angel', 'rating' => '4.5/5', 'img' => '../images/Instruktur8.jpg'],
                ['name' => 'Tamara Dwi', 'rating' => '4.2/5', 'img' => '../images/Instruktur10.jpg']
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