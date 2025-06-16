<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
    body {
        background-image: url('https://i.pinimg.com/736x/34/d5/73/34d573db558016ba3f033c8c32ede09b.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    * {
        font-family: 'Poppins', sans-serif;
    }

    input::placeholder {
        color: #F189B8;
    }
</style>

</head>

<body class="flex items-center justify-center min-h-screen backdrop-blur-sm bg-opacity-80">
    <div class="bg-[#FFF5FF] p-8 rounded-2xl shadow-lg w-full max-w-sm text-center border border-pink-200">
        <h2 class="text-2xl font-bold text-[#D63384] mb-1">Selamat Datang Kembali!</h2>
        <p class="mb-5 text-sm text-gray-500">Masuk untuk melanjutkan</p>

        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-3 rounded-md mb-4 text-sm">
                <strong>{{ $errors->first() }}</strong>
            </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST" class="text-left text-sm">
            @csrf

            <div class="mb-4">
                <label class="text-[#D63384] font-medium">Username / Email</label>
                <input type="text" name="usnemail" placeholder="Masukkan Username atau Email"
                    value="{{ old('usnemail') }}"
                    class="w-full mt-1 px-4 py-3 rounded-xl border border-pink-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-400" required />
            </div>

            <div class="mb-2">
                <label class="text-[#D63384] font-medium">Password</label>
                <input type="password" name="password" placeholder="Masukkan Password"
                    class="w-full mt-1 px-4 py-3 rounded-xl border border-pink-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-400" required />
            </div>

            <div class="mb-4 text-right">
                <a href="{{ route('password.request') }}"
                   class="text-sm text-[#D63384] font-medium hover:underline">Lupa Password?</a>
            </div>

            <button type="submit"
                class="w-full py-3 rounded-full bg-[#D63384] text-white font-semibold hover:bg-[#c12778] transition duration-200">
                Lanjutkan
            </button>

            <!-- Garis OR -->
            <div class="flex items-center my-6">
                <hr class="flex-grow border-gray-300">
                <span class="px-3 text-gray-400 text-sm font-semibold">ATAU</span>
                <hr class="flex-grow border-gray-300">
            </div>

            <!-- Tombol Google -->
            <div class="flex items-center justify-center border border-gray-300 rounded-full py-2 px-4 bg-white cursor-pointer hover:shadow-md transition duration-200">
                 <img src="https://www.google.com/favicon.ico" alt="Google" class="w-5 mr-2">
                <span class="text-sm font-medium text-gray-700">Lanjutkan dengan Google</span>
            </div>
        </form>

        <!-- Sign up link -->
        <div class="text-center mt-6 text-sm">
            <span class="text-gray-500">Belum punya akun?</span>
            <a href="{{ route('register') }}" class="text-[#D63384] font-semibold hover:underline">Sign Up</a>
        </div>
    </div>

</body>
</html>
