<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        body {
            background-image: url('https://i.pinimg.com/736x/34/d5/73/34d573db558016ba3f033c8c32ede09b.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: Arial, sans-serif;
        }

        .register-container {
            width: 380px;
            margin: 60px auto;
            background-color: rgba(255, 245, 255, 0.95); /* transparansi */
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }

        h2 {
            color: #F189B8;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #F189B8;
            border-radius: 10px;
            background-color: #fff5ff;
        }

        button {
            width: 95%;
            padding: 12px;
            background-color: #f78ab3;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 25px;
            margin-top: 10px;
            box-shadow: 0 5px #d4719c;
            cursor: pointer;
        }

        .link {
            display: block;
            margin: 10px 0;
            color: #F189B8;
            text-decoration: none;
            font-weight: bold;
        }

        .alert {
            background-color: #fdd;
            color: #c00;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .success {
            background-color: #dfd;
            color: #080;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Daftar!</h2>
        <p>Buat akun baru Anda</p>

        @if ($errors->any())
            <div class="alert">{{ $errors->first() }}</div>
        @endif

        @if (session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('register.submit') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required>
            <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" required>
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
            <button type="submit">Buat Akun</button>
        </form>

        <a href="{{ route('login') }}" class="link">Sudah punya akun? Login di sini</a>
    </div>
</body>
</html>
