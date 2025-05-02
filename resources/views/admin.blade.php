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
    @vite(['public/css/admin.css', 'public/js/admin.js'])
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
                    <a href="#" class="sidebar-link-select">
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
            <div class="sidebar-footer">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a href="#" class="sidebar-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="ri-logout-box-line"></i>
                        <span>Logout</span>
                    </a>
                </form>
            </div>
        </aside>
        <div class="main p-3">
            <div class="text-center">
                <h1>
                    Home
                </h1>
                <br>
            </div>
            <div class="row align-items-center">
                <div class="col-6 align-items-center">
                    <div class="box d-flex">
                        <input type="search" id="live-search" placeholder="Search">
                        <button id="search-btn" type="button">
                            <i class="ri-search-line"></i>
                        </button>
                    </div>
                </div>
                <div class="col-4 pt-2 align-items-center">
                    <button class="btn btn-primary btn-sm d-flex justify-content-center mb-3 align-items-center" style="height: 40px; width: 40px;">
                        <i class="ri-filter-fill"></i>
                    </button>
                </div>
                <div class="col-2 d-flex pt-2 justify-content-end mb-3 align-items-center">
                    <a href="{{ route('pemancar.export') }}" class="btn btn-primary">
                        Download CSV
                    </a>
                </div>
            </div>
            <br>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Nama Pemancar</td>
                        <td>Provinsi</td>
                        <td>Latitude</td>
                        <td>Longitude</td>
                    </tr>
                </thead>
                <tbody id="search-results">
                    @foreach($pemancars as $index => $pemancar)
                    <tr>
                        <td>{{ ($pemancars->currentPage() - 1) * $pemancars->perPage() + $index + 1 }}</td>
                        <td>{{ $pemancar->nama_pemancar }}</td>
                        <td>{{ $pemancar->provinsi }}</td>
                        <td>{{ $pemancar->latitude }}</td>
                        <td>{{ $pemancar->longitude }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Pagination Links -->
            <div id="pagination-links" class="d-flex justify-content-center">
                {!! $pemancars->links() !!}
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>