@extends('layouts.class-layout')
@section('title','Pilates Class')
@section('content')

    <!-- Hero -->
    <section class="max-w-6xl mx-auto px-4 pt-7 pb-10 ">
    <img src="{{ asset('images/pilatesfoto.jpg') }}" alt="Pilates Class" class="w-full h-[500px] object-cover rounded-md">
    </section>

    <!-- About -->
    <section class="max-w-6xl mx-auto px-4 pb-10">
        <h2 class="text-[#F189B8] font-bold text-xl mb-4">ABOUT OUR PILATES</h2>
        <p>
            Pilates adalah metode latihan yang menekankan pada kekuatan inti (core strength), 
            postur tubuh, fleksibilitas, dan kesadaran pernapasan. 
            Didesain untuk meningkatkan keseimbangan antara tubuh dan pikiran, 
            Pilates membantu membentuk tubuh yang lebih kuat, lentur, dan sehat secara menyeluruh. 
            Latihan ini cocok untuk semua usia dan tingkat kebugaran, 
            karena setiap gerakannya bisa disesuaikan dengan kebutuhan individu.
        </p>
    </section>

    <!-- Coaches -->
    <section class="max-w-6xl mx-auto px-4 pb-10">
        <h2 class="text-[#F189B8] font-bold text-xl mb-6">OUR BEST COACH</h2>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach([
                ['name' => 'Kayla Zahra', 'rating' => '5/5', 'img' => '../images/Instruktur4.jpg'],
                ['name' => 'Alisyah Aurel', 'rating' => '4.5/5', 'img' => '../images/Instruktur5.jpg'],
                ['name' => 'Rebeca Laura', 'rating' => '4/5', 'img' => '../images/Instruktur6.jpg']
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