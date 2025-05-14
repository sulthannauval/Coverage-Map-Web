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

    <!-- Style -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');

        .body {
            margin: 0;
        }

        .splash {
            float: right;
        }

        .h1-splash-color {
            color: white;
            overflow: hidden;
        }

        .h1-splash-color h1 {
            margin: 0;
        }

        .circle {
            height: 50px;
            width: 50px;
            background-color: #000;
            border-radius: 50%;
        }

        .longcircle {
            height: 50px;
            width: 400px;
            background-color: #000;
            padding-top: 20px;
        }

        .br {
            border-radius: 150px;
        }

        .logo {
            /* padding: 10px; */
            width: 150px;
            margin-left: 50px;
            margin-top: 35px;
            margin-bottom: 25px;
        }

        .mainbox {
            border: #000;
            border-style: solid;
            border-width: 2px;
            border-radius: 20px;
            /* padding-left: 10px; */
            margin-left: 50px;
            margin-right: 50px;
        }

        .greet {
            font-size: 150px;
            font-family: "Outfit", serif;
            font-weight: bold;
            /* padding-top: 60px; */
            margin: 0;
        }

        .btn {
            width: 350px;
            height: 80px;
            font-weight: 900;
            font-size: 30px;
            border-style: none;
            border-radius: 40px;
            background-color: blue;
            color: white;
        }

        .btn :hover {
            background-color: white;
            border-style: solid;
            border-width: 5cm;
            border-color: blue;
            color: blue;
        }

        .adminbtn {
            color: blue;
            font-size: 60px;
        }

        .adminbtn :hover {
            color: blue;
            background-color: white;
        }
    </style>
</head>

<body>
    <nav>
        <img src="{{ asset('images/logo.png') }}" alt="logo" class="logo">
    </nav>
    <div class="container-fluid">
        <div class="mainbox">
            <div class="row">
                <div class="col align-self-center" style="padding-left: 40px;">
                    <h1 class="greet">
                        Halo
                    </h1>
                    <h1 class="greet">
                        <span style="color: blue; margin: 0;">semua.</span>
                    </h1>
                    <div class="row">
                        <div class="col-sm-1">
                            <div class="circle"></div>
                        </div>
                        <div class="col">
                            <div class="longcircle br"></div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <a href="/map">
                                <button type="button" class="btn btn_custom">
                                    MULAI
                                </button>
                            </a>
                        </div>
                        <div class="col" style="padding: 0%;">
                            <a href="/login" type="button" class="adminbtn" id="admin_btn">
                                <i class="ri-account-circle-fill"></i>  
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col align-self-end justify-self-end">
                    <img class="mainpicture-fluid w-850 d-none d-lg-block" src="{{ asset('images/radio.png') }}" alt="radio" style="height: 850px; border-radius: 20px;">
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>