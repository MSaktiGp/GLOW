<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Login Owner</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
        background-image: url('https://i.pinimg.com/736x/34/d5/73/34d573db558016ba3f033c8c32ede09b.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
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
    <h2 class="text-2xl font-bold text-[#D63384] mb-2">Selamat Datang Owner!</h2>
    <p class="mb-6 text-sm text-gray-500">Masuk untuk melanjutkan</p>

    <form method="POST" action="{{ route('login') }}">
      @csrf
      
      <div class="mb-4">
        <input
          
        type="email"
          name="email"
          placeholder="Enter Email"
          class="w-full px-4 py-3 rounded-xl border border-pink-300 shadow-md text-sm focus:outline-none focus:ring-2 focus:ring-pink-400"
          required
        />
      </div>

      <div class="mb-6">
        <input
          type="password"
          name="password"
          placeholder="Enter Password"
          class="w-full px-4 py-3 rounded-xl border border-pink-300 shadow-md text-sm focus:outline-none focus:ring-2 focus:ring-pink-400"
          required
        />
      </div>

      <button type="submit" class="w-full py-3 rounded-full bg-pink-500 text-white font-semibold hover:bg-pink-600 transition duration-200">Lanjutkan</button>
    </form>
  </div>
</body>
</html>

