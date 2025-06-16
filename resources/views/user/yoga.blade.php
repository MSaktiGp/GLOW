@extends('user.layouts.dashboard-user-layout')
@section('title','Yoga Class')
@section('content')

    <!-- Hero -->
    <section class="max-w-6xl mx-auto px-4 pt-7 pb-10 ">
    <img src="{{ asset('images/yogafoto.jpg') }}" alt="Yoga Class" class="w-full h-[500px] object-cover rounded-md">
    </section>

    <!-- About -->
    <section class="max-w-6xl mx-auto px-4 pb-10">
        <h2 class="text-[#F189B8] font-bold text-xl mb-4">ABOUT OUR YOGA</h2>
        <p>
            Yoga bukan hanya tentang fleksibilitas atau gerakan fisik, tetapi juga tentang keseimbangan antara tubuh, pikiran, dan jiwa. 
            Melalui praktik yoga, kami berupaya membangun ruang yang damai, penuh kesadaran, dan terbuka bagi siapa pun yang ingin menemukan 
            keseimbangan dalam hidupnya.
        </p>
    </section>

    <!-- Coaches -->
    <section class="max-w-6xl mx-auto px-4 pb-10">
        <h2 class="text-[#F189B8] font-bold text-xl mb-6">OUR BEST COACH</h2>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach([
                ['name' => 'Claura Sintiya', 'rating' => '4/5', 'img' => '../images/Instruktur1.jpg'],
                ['name' => 'Anindya Sarasvati', 'rating' => '5/5', 'img' => '../images/Instruktur2.jpg'],
                ['name' => 'Ayudia Clara', 'rating' => '4.5/5', 'img' => '../images/Instruktur3.jpg']
            ] as $coach)
                <div class="bg-white rounded-lg shadow p-4 text-center">
                    <img src="{{ $coach['img'] }}" alt="{{ $coach['name'] }}" class="w-full h-80 object-cover rounded-md mb-4">
                    <h3 class="font-semibold text-lg">{{ $coach['name'] }}</h3>
                    <p class="text-sm text-yellow-500 font-semibold">{{ $coach['rating'] }}</p>
                    <button class="mt-2 bg-[#F189B8] text-white px-4 py-2 rounded-full hover:bg-pink-600">See Classes</button>
                </div>
            @endforeach
        </div>
    </section>

    

@endsection