<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemetaan Jangkauan TV Digital Indonesia</title>

    <!-- Filter -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@4.0.1/dist/css/multi-select-tag.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css">

    <!-- Leaflet Locate Control -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet.locatecontrol/dist/L.Control.Locate.min.css" />

    <!-- VITE (css & js) -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/map.css'])
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
                    <a href="#">Menu</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="/map" class="sidebar-link-select">
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
    </div>
    
    <!-- Peta -->
    <div id="mapid"></div>

    <!-- Legend -->
    @if ($legendUrl)
    <div id="legend" style="position: absolute; bottom: 20px; left: 85px; background: rgba(255,255,255,0.8); padding: 5px; border-radius: 8px; box-shadow: 0 0 5px rgba(0,0,0,0.3); z-index: 1000;">
        <img src="{{ $legendUrl }}" alt="Legend" style="max-width: 200px;">
    </div>
    @endif

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <!-- ESRI Leaflet Plugin -->
    <script src="https://unpkg.com/esri-leaflet@3.0.3/dist/esri-leaflet.js"></script>
    <!-- Leaflet Omnivore Plugin -->
    <script src="https://unpkg.com/leaflet-omnivore@0.3.4/leaflet-omnivore.min.js"></script>
    <!-- Leaflet Search Button -->
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <!-- Leaflet Locate Control -->
    <script src="https://unpkg.com/leaflet.locatecontrol/dist/L.Control.Locate.min.js"></script>


    <script>
        const map = L.map('mapid', {
            zoomControl: false  // Menonaktifkan kontrol zoom default
        }).setView([-2.5, 120], 5);

        // Layer citra satelit dari ESRI
        L.esri.basemapLayer('Imagery').addTo(map);
        L.esri.basemapLayer('ImageryLabels').addTo(map);

        // Menambahkan kontrol zoom kustom di posisi kanan bawah
        L.control.zoom({
            position: 'bottomright'  // Mengatur posisi ke kanan bawah
        }).addTo(map);

        // Tambahkan geocoder
        const geocoder = L.Control.geocoder({
                position: 'topleft',
                defaultMarkGeocode: false
            })
            .on('markgeocode', function(e) {
                const latlng = e.geocode.center;
                map.setView(latlng, 13);
                fetchAndShowSignal(latlng, map);
            })
            .addTo(map);

        // Tambahkan tombol GPS (LocateControl)
        L.control.locate({
            position: 'topleft', // Sama seperti geocoder
            strings: {
                title: "Temukan Lokasi Saya"
            },
            drawCircle: true,
            keepCurrentZoomLevel: true,
            showPopup: false
        }).addTo(map);

        // Tangkap lokasi pengguna
        map.on('locationfound', function(e) {
            const latlng = L.latLng(e.latitude, e.longitude);
            map.setView(latlng, 13);
            fetchAndShowSignal(latlng, map);
        });

        // Tangkap klik di peta
        map.on('click', function(e) {
            fetchAndShowSignal(e.latlng, map);
        });

        // Fungsi umum untuk ambil dan tampilkan data sinyal
        function fetchAndShowSignal(latlng, map) {
            fetch(`/api/nearest-signal?lat=${latlng.lat}&lng=${latlng.lng}`)
                .then(response => response.json())
                .then(data => {
                    const popup = L.popup().setLatLng(latlng);
                    if (data.success) {
                        popup.setContent(`
                        <strong>Informasi Fieldstrength</strong><br>
                        Pemancar Referensi: ${data.result.nama_pemancar}<br>
                        Kekuatan Sinyal: ${data.result.strength}<br>
                        <!-- Jarak: ${data.result.distance.toFixed(2)} km -->
                    `);
                    } else {
                        popup.setContent("Tidak ada data sinyal ditemukan.");
                    }
                    popup.openOn(map);
                })
                .catch(err => {
                    console.error(err);
                    alert("Terjadi kesalahan saat mengambil data. Silahkan refresh halaman.");
                });
        }

        // Definisikan ikon kustom
        const customIcon = L.icon({
            iconUrl: <?php echo json_encode($iconsUsed); ?>,
            iconSize: [16, 16],
            iconAnchor: [8, 8],
            popupAnchor: [0, -8]
        });

        // Load KML dinamis
        omnivore.kml(<?php echo json_encode($kmlUrl); ?>)
            .on('ready', function() {
                this.eachLayer(function(layer) {
                    if (layer instanceof L.Marker) {
                        layer.setIcon(customIcon);
                    }
                    if (layer.feature && layer.feature.properties) {
                        const name = layer.feature.properties.name || '';
                        const desc = layer.feature.properties.description || '';
                        const content = `<strong>${name}</strong><br>${desc}`;
                        layer.bindPopup(content);
                    }
                });
                map.fitBounds(this.getBounds());
            })
            .addTo(map);

        // Tambahkan imageOverlay dari <GroundOverlay>
        const overlays = <?php echo json_encode($overlays); ?>;
        overlays.forEach(item => {
            L.imageOverlay(item.url, item.bounds, {
                opacity: 0.4
            }).addTo(map);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>


</html>