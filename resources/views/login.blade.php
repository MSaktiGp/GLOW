<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            background-image: url('https://i.pinimg.com/736x/34/d5/73/34d573db558016ba3f033c8c32ede09b.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: Arial, sans-serif;
        }

        .login-container {
            width: 360px;
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
            margin-top: 15px;
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

        .google-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #aaa;
            border-radius: 20px;
            padding: 10px;
            margin-top: 15px;
            background-color: white;
            cursor: pointer;
        }

        .google-btn img {
            width: 20px;
            margin-right: 10px;
        }

        hr {
            margin: 20px 0;
        }

        small {
            color: #555;
        }

        .alert {
            background-color: #fdd;
            color: #c00;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Selamat Datang Kembali!</h2>
        <p>Masuk untuk melanjutkan</p>

        @if ($errors->any())
            <div class="alert">
                <strong>{{ $errors->first() }}</strong>
            </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Enter Username or Email" value="{{ old('email') || {{ old('username')}}}}" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <button type="submit">Lanjutkan</button>
            <button type="button" onclick="alert('Fitur lupa password belum tersedia')">Lupa Password?</button>
        </form>
        <a href="#" class="link">Belum punya akun?</a>

        <hr>
        <div class="google-btn">
            <img src="https://www.google.com/favicon.ico" alt="Google">
            <span>Lanjutkan dengan Google</span>
        </div>
    </div>
</body>
</html>
