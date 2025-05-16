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
    @vite(['public/css/contact.css', 'public/js/contact.js'])
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
                    <a href="/tutorial" class="sidebar-link">
                        <i class="ri-question-fill"></i>
                        <span>Help</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/contact" class="sidebar-link-select">
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
                <h1>
                    Contact
                </h1>
            </div>
            <!-- Pesan sukses -->
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <form class="row g-3" method="POST" action="{{ route('feedback.store') }}">
                @csrf
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">Name</label>
                    <input type="text" class="form-control" name="nama" id="validationDefault01" placeholder="John" required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefaultUsername" class="form-label">Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" name="email" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div class="col-md-8">
                    <label for="validationDefault03" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" name="telepon" id="validationDefault03" required>
                </div>
                <div class="col-md-8">
                    <label for="floatingTextarea2" class="form-floating mb-2">Komentar</label>
                    <textarea class="form-control" name="komentar" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>