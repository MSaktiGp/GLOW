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
    <div class="bg-[#FFF5FF] p-8 rounded-xl shadow-md w-full max-w-sm text-center">
        <h2 class="text-2xl font-bold text-[#D63384] mb-2">Daftar!</h2>
        <p class="mb-6 text-sm text-gray-500">Buat akun baru Anda</p>

        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-3 rounded-md mb-4 text-sm">
                <strong>{{ $errors->first() }}</strong>
            </div>
        @endif

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded-md mb-4 text-sm">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('register.submit') }}" method="POST" class="space-y-4">
            @csrf
            <input
                type="text"
                name="name"
                placeholder="Nama Lengkap"
                value="{{ old('name') }}"
                required
                class="w-full px-4 py-3 rounded-xl border border-pink-300 shadow-md text-sm focus:outline-none focus:ring-2 focus:ring-pink-400"
            />
            <input
                type="text"
                name="username"
                placeholder="Username"
                value="{{ old('username') }}"
                required
                class="w-full px-4 py-3 rounded-xl border border-pink-300 shadow-md text-sm focus:outline-none focus:ring-2 focus:ring-pink-400"
            />
            <input
                type="email"
                name="email"
                placeholder="Email"
                value="{{ old('email') }}"
                required
                class="w-full px-4 py-3 rounded-xl border border-pink-300 shadow-md text-sm focus:outline-none focus:ring-2 focus:ring-pink-400"
            />
            <input
                type="password"
                name="password"
                placeholder="Password"
                required
                class="w-full px-4 py-3 rounded-xl border border-pink-300 shadow-md text-sm focus:outline-none focus:ring-2 focus:ring-pink-400"
            />
            <input
                type="password"
                name="password_confirmation"
                placeholder="Konfirmasi Password"
                required
                class="w-full px-4 py-3 rounded-xl border border-pink-300 shadow-md text-sm focus:outline-none focus:ring-2 focus:ring-pink-400"
            />

            <button
                type="submit"
                class="w-full py-3 rounded-full bg-[#D63384] text-white font-semibold hover:bg-[#c12778] transition duration-200"
            >
                Buat Akun
            </button>
        </form>

        <div class="text-center mt-6 text-sm">
            <span class="text-gray-500">Sudah punya akun?</span>
            <a href="{{ route('login') }}" class="text-[#D63384] font-semibold hover:underline">Login di sini</a>
        </div>
    </div>
</body>
</html>
