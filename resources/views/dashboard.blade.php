<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link
            href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
            rel="stylesheet"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
            rel="stylesheet"
        />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');

            body {
                background-color: white;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            
            .main{
                height: 100vh;
                width: auto;
                padding-top: 50px;
                padding-left: 50px;
                padding-right: 50px;
                padding-bottom: 50px;
            }

            .box {
                border: 3px solid black;
                border-radius: 50px;
                height: 100%;
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
                border-radius: 100px;
            }

            img {
                align-self: end;
                justify-self: end;
            }

            h1{
                display: flex;
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

            .btn:hover {
                background-color: white;
                border: 3px solid blue;
                font-size: 30px;
                font-weight: 900;
                color: blue;
                border-radius: 40px;
            }

            .adminbtn {
                color: blue;
                font-size: 60px;
            }

            .adminbtn :hover {
                color: blue;
                background-color: white;
            }

            a {
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="main">
            <div class="box">
                <div class="row" style="height: 100%; width: auto;">
                    <div class="col align-self-center" style="padding-left: 40px;">
                        <h1 class="greet">
                            Halo
                        </h1>
                        <h1 class="greet">
                            <span style="color: blue; margin: 0;">semua.</span>
                        </h1>
                        <br>
                        <div class="row">
                            <div class="col-sm-1 d-none d-lg-block">
                                <div class="circle"></div>
                            </div>
                            <div class="col">
                                <div class="longcircle br"></div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row align-items-center">
                            <div class="col">
                                <a href="/map">
                                <button type="button" class="btn btn_custom">
                                    MULAI
                                </button>
                                </a>
                            </div>
                            <div class="col" style="padding: 0%;">
                                <a href="/login">
                                    <div type="button" class="adminbtn" id="admin_btn">
                                        <i class="ri-account-circle-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-none d-xl-block">
                        <img class="mainpicture-fluid w-850" src="{{ asset('images/radio.png') }}" alt="mainpict" style="height: 100%; max-width: 850px; border-radius: 20px;">
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>