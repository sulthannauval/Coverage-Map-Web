<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    @vite(['public/css/adminedit.css', 'public/js/adminedit.js'])
</head>

<body>
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
                    <a href="/admin" class="sidebar-link">
                        <i class="ri-home-fill"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/adminadd" class="sidebar-link">
                        <i class="ri-add-circle-fill"></i>
                        <span>Add</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link-select">
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
            <div class="sidebar-footer">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="sidebar-link" style="border: none; background: none;">
                        <i class="ri-logout-box-line"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </aside>
        <div class="main p-3">
            <div class="text-center">
                <h1>
                    Edit
                </h1>
            </div>
            <div class="col-sm-10">
                <form action="{{ url('/adminupdate/' . $pemancar->id_pemancar) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <p>Nama Pemancar:</p>
                    <input type="text" name="nama_pemancar" value="{{ old('nama_pemancar', $pemancar->nama_pemancar) }}" required>

                    <p><br>Longitude:</p>
                    <input type="text" name="longitude" value="{{ old('longitude', $pemancar->longitude) }}" placeholder="000.000000" required>

                    <p><br>Latitude:</p>
                    <input type="text" name="latitude" value="{{ old('latitude', $pemancar->latitude) }}" placeholder="-0.000000" required>

                    <p><br>Provinsi:</p>
                    <input type="text" name="provinsi" value="{{ old('provinsi', $pemancar->provinsi) }}" required>

                    <p><br>Detail:</p>
                    <input type="textarea" name="detail" required>

                    <div class="p-3 row">
                        <div class="col-sm-2">
                            <button type="submit" class="btnsubmit">Submit</button>
                        </div>
                        <div class="col-sm-2 mt-3 mt-lg-0 mt-md-0 ml-sm-5 mt-sm-0">
                            <a href="/adminedit" class="btnbatal btn btn-secondary">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>