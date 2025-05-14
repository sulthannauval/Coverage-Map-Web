<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>

    <!-- Remix Icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <div class="login-form">
        <div class="container">
            <div class="mainlogin">
                <div class="content">
                    <dix class="row">
                        <div class="col-4">
                            <a class="backbutton" href="/" style="font-size: 28px;">
                                <i class="ri-arrow-left-line"></i>
                            </a>
                        </div>
                        <div class="col-4"><h2>Log In</h2></div>
                    </dix>
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