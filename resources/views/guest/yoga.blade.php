@extends('guest.layouts.class-layout')
@section('title', 'Yoga Class')
@section('content')

    <!-- Hero -->
    <section class="max-w-6xl mx-auto px-4 pt-7 pb-10 ">
        <img src="{{ asset('images/yogafoto.jpg') }}" alt="Yoga Class" class="w-full h-[500px] object-cover rounded-md">
    </section>

    <!-- About -->
    <section class="max-w-6xl mx-auto px-4 pb-10">
        <h2 class="text-[#F189B8] font-bold text-xl mb-4">ABOUT OUR YOGA</h2>
        <p>
            Yoga bukan hanya tentang fleksibilitas atau gerakan fisik, tetapi juga tentang keseimbangan antara tubuh,
            pikiran, dan jiwa.
            Melalui praktik yoga, kami berupaya membangun ruang yang damai, penuh kesadaran, dan terbuka bagi siapa pun yang
            ingin menemukan
            keseimbangan dalam hidupnya.
        </p>
    </section>

    <!-- Coaches -->
<<<<<<< HEAD
   <section class="max-w-6xl mx-auto px-4 pb-10">
    <h2 class="text-[#F189B8] font-bold text-xl mb-6">OUR BEST COACH</h2>
    <div class="grid md:grid-cols-3 gap-6">
        @foreach ([
            ['id' => 1, 'name' => 'Claura Sintiya', 'rating' => '4/5', 'img' => 'images/Instruktur1.jpg', 'slug' => 'claura-sintiya'],
            ['id' => 2, 'name' => 'Rachel Salsabila', 'rating' => '5/5', 'img' => 'images/Instruktur2.jpg', 'slug' => 'rachel-salsabila'],
            ['id' => 3, 'name' => 'Stevi Putri', 'rating' => '4.5/5', 'img' => 'images/Instruktur3.jpg', 'slug' => 'stevi-putri']
        ] as $coach)
            <div class="bg-white rounded-lg shadow p-4 text-center">
                <img src="{{ asset($coach['img']) }}" alt="{{ $coach['name'] }}" class="w-full h-80 object-cover rounded-md mb-4">
                <h3 class="font-semibold text-lg">{{ $coach['name'] }}</h3>
                <p class="text-sm text-yellow-500 font-semibold">{{ $coach['rating'] }}</p>
                <a href="{{ $coach['slug'] === 'claura-sintiya' ? route('booked1') : route('coach.booked', ['jenis' => 'yoga', 'coach' => $coach['slug']]) }}"
                class="mt-2 inline-block bg-[#F189B8] text-white px-4 py-2 rounded-full hover:bg-pink-600">Book Now</a>
            </div>
        @endforeach
=======
    <section class="max-w-6xl mx-auto px-4 pb-10">
        <h2 class="text-[#F189B8] font-bold text-xl mb-6">OUR BEST COACH</h2>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach ([
            ['id' => 1, 'name' => 'Claura Sintiya', 'rating' => '4/5', 'img' => '../images/Instruktur1.jpg'], 
            ['id' => 2, 'name' => 'Rachel Salsabila', 'rating' => '5/5', 'img' => '../images/Instruktur2.jpg'], 
            ['id' => 3, 'name' => 'Stevi Putri', 'rating' => '4.5/5', 'img' => '../images/Instruktur3.jpg']] 
            as $coach)
                <div class="bg-white rounded-lg shadow p-4 text-center">
                    <img src="{{ $coach['img'] }}" alt="{{ $coach['name'] }}"
                        class="w-full h-80 object-cover rounded-md mb-4">
                    <h3 class="font-semibold text-lg">{{ $coach['name'] }}</h3>
                    <p class="text-sm text-yellow-500 font-semibold">{{ $coach['rating'] }}</p>
                    <a href="{{ route('coach.profile', ['coachName' => Str::slug($coach['name'], '-')]) }}"
                        class="mt-2 bg-[#F189B8] text-white px-4 py-2 rounded-full hover:bg-pink-600 inline-block">
                        See Classes
                    </a>
                </div>
            @endforeach
>>>>>>> cbcb3ac1045c3b52219ea96571aa570c1b8d6beb
        </div>
    </section>



@endsection
