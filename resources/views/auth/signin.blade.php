<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signin</title>
    <!-- Link CDN Bootstrap -->
    <link rel="icon" href="{{ asset('asset/logo.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
    <meta name="author" content="Kimarotec">
    <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@200;300;400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Open Sans", sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            width: 100%;
            padding: 0 10px;
        }

        body::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: url("https://www.codingnepalweb.com/demos/create-glassmorphism-login-form-html-css/hero-bg.jpg"), #000;
            background-position: center;
            background-size: cover;
        }

        .wrapper {
            width: 400px;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #fff;
        }

        .input-field {
            position: relative;
            border-bottom: 2px solid #ccc;
            margin: 15px 0;
        }

        .input-field label {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            color: #fff;
            font-size: 16px;
            pointer-events: none;
            transition: 0.15s ease;
        }

        .input-field input {
            width: 100%;
            height: 40px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 16px;
            color: #fff;
        }

        .input-field input:focus~label,
        .input-field input:valid~label {
            font-size: 0.8rem;
            top: 10px;
            transform: translateY(-120%);
        }

        .forget {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 25px 0 35px 0;
            color: #fff;
        }

        #remember {
            accent-color: #fff;
        }

        .forget label {
            display: flex;
            align-items: center;
        }

        .forget label p {
            margin-left: 8px;
        }

        .wrapper a {
            color: #efefef;
            text-decoration: none;
        }

        .wrapper a:hover {
            text-decoration: underline;
        }

        button {
            background: #fff;
            color: #000;
            font-weight: 600;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 3px;
            font-size: 16px;
            border: 2px solid transparent;
            transition: 0.3s ease;
        }

        button:hover {
            color: #fff;
            border-color: #fff;
            background: rgba(255, 255, 255, 0.15);
        }

        .register {
            text-align: center;
            margin-top: 30px;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="padding-top: 100px;">
                <h3>Signin</h3>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                <div class="wrapper">
                    <form method="POST" action="{{ route('storeSignin') }}">
                        @csrf
                        <h2>Login</h2>
                        <div class="input-field">
                            <input type="email" class="form-control" name="email" required>
                            <label for="email" class="form-label">Enter your email</label>
                        </div>
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        <div class="input-field">
                            <input type="password" class="form-control" name="password" required>
                            <label for="password" class="form-label">Enter your password</label>
                        </div>
                        <button type="submit">Log In</button>
                        <!-- Tombol Kembali -->

                        <div class="register">
                            <p>Don't have an account? <a href="#">Register</a></p>
                        </div>
                    </form>
                    <a class="btn btn-secondary mt-2" href="{{ route('about') }}">Back</a>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <!-- Link CDN Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
