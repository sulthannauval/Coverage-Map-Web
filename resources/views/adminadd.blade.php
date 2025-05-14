<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Data</title>

    <!-- Remix Icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous">

    <!-- Custom CSS & JS -->
    @vite(['public/css/adminadd.css', 'public/js/adminadd.js'])
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="d-flex">
                <button id="toggle-btn" type="button">
                    <i class="ri-menu-fill"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Menu</a>
                </div>
            </div>

            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="/admin" class="sidebar-link">
                        <i class="ri-home-fill"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/adminadd" class="sidebar-link-select">
                        <i class="ri-add-circle-fill"></i>
                        <span>Add</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/adminedit" class="sidebar-link">
                        <i class="ri-edit-box-line"></i>
                        <span>Edit</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/adminhistory" class="sidebar-link">
                        <i class="ri-history-fill"></i>
                        <span>History</span>
                    </a>
                </li>
            </ul>

            <!-- Logout -->
            <div class="sidebar-footer">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a href="#" class="sidebar-link"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="ri-logout-box-line"></i>
                        <span>Logout</span>
                    </a>
                </form>
            </div>
        </aside>

        <div class="main p-3">
            <div class="text-center">
                <h1>Add</h1>
                <br>
            </div>

            <div class="col-sm-10">

                <!-- Pesan sukses -->
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Pesan error validasi -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Terjadi kesalahan:</strong>
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('pemancar.store') }}">
                    @csrf
                    <div class="m-3">
                        <label class="form-label">Nama Pemancar:</label>
                        <input type="text" name="nama_pemancar" class="form-control" required />

                        <label class="form-label mt-3">Provinsi:</label>
                        <input type="text" name="provinsi" class="form-control" required />

                        <label class="form-label mt-3">Latitude:</label>
                        <input type="text" name="latitude" class="form-control" placeholder="-0.000000" required />

                        <label class="form-label mt-3">Longitude:</label>
                        <input type="text" name="longitude" class="form-control" placeholder="000.000000" required />

                        <label class="form-label mt-3">Detail:</label>
                        <textarea class="form-control" name="detail" rows="4" required></textarea>
                    </div>

                    <div class="p-3 row">
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="col-sm-2 mt-3 mt-sm-0">
                            <a href="/admin" class="btn btn-secondary">Batal</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>

    <!-- Custom Script -->
    <script src="script.js"></script>
</body>

</html>
