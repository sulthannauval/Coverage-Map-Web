<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <div class="login-form">
        <h1>Login</h1>
        <div class="container">
            <div class="mainlogin">
                <div class="content">
                    <h2>Log In</h2>
                    <form  method="POST" action="{{ route('login') }}">
                        @csrf
                        <Input type="text" name="login" id="login" placeholder="Email or Username" required autofocus="">
                        <Input type="password" name="password" id="pwd" placeholder="Password" requiredautofocus="">
                            <button class="btn" type="submit">
                                Login
                            </button>
                    </form>
                    <!-- Menampilkan pesan error jika ada -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <a href="#">Forgot Password</a>
                </div>
                <div class="form-img">
                    <img src="{{ asset('images/radio.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
</html>