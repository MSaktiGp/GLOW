<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Lupa Password</title>
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
        <h2 class="text-2xl font-bold text-[#D63384] mb-2">Forgot Password</h2>
        <p class="mb-6 text-sm text-gray-500">Masukkan email Anda untuk mereset password</p>

        @if(session('status'))
            <div class="bg-green-100 text-green-600 p-3 rounded-md mb-4 text-sm">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-3 rounded-md mb-4 text-sm">
                <strong>{{ $errors->first() }}</strong>
            </div>
        @endif

        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="mb-4">
                <input type="email" name="email" placeholder="Masukkan Email Anda"
                    value="{{ old('email') }}" required
                    class="w-full px-4 py-3 rounded-xl border border-pink-300 shadow-md text-sm focus:outline-none focus:ring-2 focus:ring-pink-400" />
            </div>

            <button type="submit"
                class="w-full py-2 rounded-full bg-[#D63384] text-white font-semibold hover:bg-[#c12778] transition duration-200">
                Kirim Link Reset Password
            </button>
        </form>

        <div class="text-center mt-6 text-sm">
            <a href="{{ route('login') }}" class="text-[#D63384] font-semibold hover:underline">
                Kembali ke Login
            </a>
        </div>
    </div>
</body>
</html>
