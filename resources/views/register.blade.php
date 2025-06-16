<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('https://i.pinimg.com/736x/34/d5/73/34d573db558016ba3f033c8c32ede09b.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: 'Poppins', sans-serif;
        }

        input::placeholder {
            color: #F189B8;
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
    </style>
</head>
<body class="flex items-center justify-center min-h-screen backdrop-blur-sm bg-opacity-80">
  <div class="bg-[#FFF5FF] px-8 py-8 rounded-2xl shadow-lg w-full max-w-md text-center border border-pink-200">
    <h2 class="text-2xl font-bold text-[#D63384] mb-1">Sign Up!</h2>
    <p class="mb-5 text-sm text-gray-500">Buat akun baru Anda</p>

    @if ($errors->any())
        <div class="bg-red-100 text-red-600 p-2 rounded-md mb-4 text-sm">
            <strong>{{ $errors->first() }}</strong>
        </div>
    @endif

    @if (session('success'))
        <div class="bg-green-100 text-green-700 p-2 rounded-md mb-4 text-sm">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('register.submit') }}" method="POST" class="space-y-4 text-sm text-left">
        @csrf

        <!-- Nama dan Username -->
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-[#D63384] mb-1">Nama Lengkap</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Contoh:kila cape"
                    class="w-full px-4 py-2.5 rounded-lg border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:outline-none" required />
            </div>
            <div>
                <label class="block text-[#D63384] mb-1">Username</label>
                <input type="text" name="username" value="{{ old('username') }}" placeholder="kila cape"
                    class="w-full px-4 py-2.5 rounded-lg border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:outline-none" required />
            </div>
        </div>

        <!-- Email dan No HP -->
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-[#D63384] mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="email@example.com"
                    class="w-full px-4 py-2.5 rounded-lg border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:outline-none" required />
            </div>
            <div>
                <label class="block text-[#D63384] mb-1">No HP</label>
                <input type="text" name="phone" value="{{ old('phone') }}" placeholder="08xxxxxxxxxx"
                    class="w-full px-4 py-2.5 rounded-lg border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:outline-none" required />
            </div>
        </div>

        <!-- Alamat -->
        <div>
            <label class="block text-[#D63384] mb-1">Alamat</label>
            <input type="text" name="address" value="{{ old('address') }}" placeholder="Alamat lengkap"
                class="w-full px-4 py-2.5 rounded-lg border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:outline-none" required />
        </div>

        <!-- Password dan Konfirmasi -->
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-[#D63384] mb-1">Password</label>
                <input type="password" name="password" placeholder="********"
                    class="w-full px-4 py-2.5 rounded-lg border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:outline-none" required />
            </div>
            <div>
                <label class="block text-[#D63384] mb-1">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" placeholder="********"
                    class="w-full px-4 py-2.5 rounded-lg border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:outline-none" required />
            </div>
        </div>

        <!-- Tombol -->
        <button type="submit"
            class="w-full py-3 rounded-full bg-[#D63384] text-white font-semibold hover:bg-[#be2b76] transition duration-200 shadow-md">
            Buat Akun
        </button>
    </form>

    <div class="text-center mt-5 text-sm">
        <span class="text-gray-500">Sudah punya akun?</span>
        <a href="{{ route('login') }}" class="text-[#D63384] font-semibold hover:underline">Sign In</a>
    </div>
</div>

</body>
</html>
