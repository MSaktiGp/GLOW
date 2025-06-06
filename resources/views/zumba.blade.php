<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clases Zumba - GLOW</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <style>
        .font-abril {
            font-family: 'Abril Fatface', cursive;
        }
    </style>
</head>
<body class="bg-[#FFF5FF] text-[#79455C] font-sans">

<header class="bg-[#F189B8] py-4">
  <div class="flex items-center justify-between px-4">

    <!-- GLOW (kiri mentok) -->
    <h1 class="text-xl font-abril text-white">GLOW</h1>

    <!-- Menu Navigasi Tengah -->
    <nav class="hidden md:flex space-x-6 text-white absolute left-1/2 transform -translate-x-1/2">
      <a href="#" class="hover:underline">Home</a>
      <a href="#" class="hover:underline">Classes</a>
      <a href="#" class="hover:underline">About Us</a>
      <a href="#" class="hover:underline">Contact Us</a>
    </nav>

    <!-- Tombol Sign In (kanan mentok) -->
    <button class="bg-white text-[#F189B8] px-4 py-1 rounded-full font-semibold hover:bg-pink-100">
      Sign In
    </button>
  </div>
</header>

    <!-- Hero -->
    <section class="max-w-6xl mx-auto px-4 pb-10">
    <img src="{{ asset('zumbafoto.jpg') }}" alt="Zumba Class" class="w-full h-[500px] object-cover rounded-md">
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
                ['name' => 'Dela Putri', 'rating' => '5/5', 'img' => '../Instruktur7.jpg'],
                ['name' => 'Celina Angel', 'rating' => '4.5/5', 'img' => '../Instruktur8.jpg'],
                ['name' => 'Tamara Dwi', 'rating' => '4.2/5', 'img' => '../Instruktur10.jpg']
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

    <!-- Footer -->
    <footer class="bg-[#F189B8] text-white py-6">
        <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between text-sm">
            <div>
                <strong>GLOW</strong><br>
                Platform digital All-in-One untuk Gaya Hidup Sehat Wanita.
            </div>
            <div>
                <strong>Contact Info</strong><br>
                @glowwithus <br>
                📞 0822-3669-7890 <br>
                glowwithus@gmail.com
            </div>
        </div>
        <div class="text-center mt-4 text-sm">
            ©2025 Copyright: glowwithus.com
        </div>
    </footer>

</body>
</html>
