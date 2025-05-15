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

    <!-- Custom CSS & JS -->
    @vite(['public/css/tutorial.css', 'public/js/tutorial.js'])
</head>

<body>
    <!-- Sidebar Navigation -->
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button id="toggle-btn" type="button">
                    <i class="ri-menu-fill"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Menu</Menu></a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="/map" class="sidebar-link">
                        <i class="ri-home-fill"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="ri-information-fill"></i>
                        <span>About</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/tutorial" class="sidebar-link-select">
                        <i class="ri-question-fill"></i>
                        <span>Help</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/contact" class="sidebar-link">
                        <i class="ri-phone-fill"></i>
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="/" class="sidebar-link">
                    <i class="ri-logout-box-line"></i>
                    <span>Exit</span>
                </a>
            </div>
        </aside>

        <div class="main p-3">
            <div class="text-center">
                <h1>Help</h1>
                <br />
                <h1 style="font-size: 40px">How To Use It</h1>
                <div
                    class="embed-responsive embed-responsive-21by9"
                    style="display: flex; justify-content: center"
                >
                    <iframe
                        width="1200"
                        height="600"
                        class="embed-responsive-item"
                        src="https://www.youtube.com/embed/eiFotYXqaR0?si=8YFX2sa8yzb0lGqe"
                        allow="autoplay;"
                        allowfullscreen
                    ></iframe>
                </div>
            </div>
            <!-- <br>
            <div class="text-start">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseOne"
                                aria-expanded="true"
                                aria-controls="collapseOne"
                            >
                                Search
                            </button>
                        </h2>
                        <div
                            id="collapseOne"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <strong
                                    >This is the first item’s accordion
                                    body.</strong
                                >
                                It is shown by default, until the collapse
                                plugin adds the appropriate classes that we
                                use to style each element. These classes
                                control the overall appearance, as well as
                                the showing and hiding via CSS transitions.
                                You can modify any of this with custom CSS
                                or overriding our default variables. It’s
                                also worth noting that just about any HTML
                                can go within the
                                <code>.accordion-body</code>, though the
                                transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo"
                                aria-expanded="false"
                                aria-controls="collapseTwo"
                            >
                                Filter
                            </button>
                        </h2>
                        <div
                            id="collapseTwo"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <strong
                                    >This is the second item’s accordion
                                    body.</strong
                                >
                                It is hidden by default, until the collapse
                                plugin adds the appropriate classes that we
                                use to style each element. These classes
                                control the overall appearance, as well as
                                the showing and hiding via CSS transitions.
                                You can modify any of this with custom CSS
                                or overriding our default variables. It’s
                                also worth noting that just about any HTML
                                can go within the
                                <code>.accordion-body</code>, though the
                                transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseThree"
                                aria-expanded="false"
                                aria-controls="collapseThree"
                            >
                                Navigation Bar
                            </button>
                        </h2>
                        <div
                            id="collapseThree"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <strong
                                    >This is the third item’s accordion
                                    body.</strong
                                >
                                It is hidden by default, until the collapse
                                plugin adds the appropriate classes that we
                                use to style each element. These classes
                                control the overall appearance, as well as
                                the showing and hiding via CSS transitions.
                                You can modify any of this with custom CSS
                                or overriding our default variables. It’s
                                also worth noting that just about any HTML
                                can go within the
                                <code>.accordion-body</code>, though the
                                transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
    </body>
</html>
