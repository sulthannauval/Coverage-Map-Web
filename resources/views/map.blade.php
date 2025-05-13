<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Filter -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@4.0.1/dist/css/multi-select-tag.min.css">
    <title>Pemetaan Jangkauan TV Digital Indonesia</title>

    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

    <!-- VITE (css & js) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>
    <!-- Peta -->
    <div id="mapid"></div>
    <!-- Legend -->
    @if ($legendUrl)
    <div id="legend" style="position: absolute; top: 70px; left: 100px; background: rgba(255,255,255,0.8); padding: 5px; border-radius: 8px; box-shadow: 0 0 5px rgba(0,0,0,0.3); z-index: 1000;">
        <img src="{{ $legendUrl }}" alt="Legend" style="max-width: 200px;">
    </div>
    @endif
    <!-- NIH NAVBAR YEE -->
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
    <br>
    <div class="box d-flex">
        <input type="search" placeholder="Search">
        <button id="search-btn" type="send">
            <i class="ri-search-line"></i>
        </button>
    </div>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <!-- ESRI Leaflet Plugin -->
    <script src="https://unpkg.com/esri-leaflet@3.0.3/dist/esri-leaflet.js"></script>
    <!-- Leaflet Omnivore Plugin -->
    <script src="https://unpkg.com/leaflet-omnivore@0.3.4/leaflet-omnivore.min.js"></script>
    <!-- Leaflet Search Button -->
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

    <!-- <script>
        // Inisiasi peta dengan posisi di Indonesia
        var mymap = L.map('mapid').setView([-2.5489, 118.0149], 6); // Koordinat Indonesia

        // Inisiasi custom icon
        var customIcon = L.icon({
            iconUrl: '/kml/site.png', // path ikon
            iconSize: [22, 22], // Ukuran ikon
            iconAnchor: [11, 22], // Posisi anchor
            popupAnchor: [0, -16] // Posisi popup
        });

        // Tambahkan citra satelit dari ESRI World Imagery
        L.esri.basemapLayer('Imagery').addTo(mymap);
        // Tambahkan label opsional untuk nama kota atau jalan
        L.esri.basemapLayer('ImageryLabels').addTo(mymap);

        // Ubah posisi tombol zoom ke kanan bawah
        mymap.zoomControl.setPosition('bottomright');

        // Tambahkan file KML dari direktori public/kml
        var kmlLayer = omnivore.kml('/kml/Coverage-Jawa.kml')
            .on('ready', function() {
                // mymap.fitBounds(kmlLayer.getBounds());

                // Menambahkan ikon khusus pada setiap marker di KML
                kmlLayer.eachLayer(function(layer) {
                    // Set ikon custom pada marker jika layer adalah marker
                    if (layer instanceof L.Marker) {
                        layer.setIcon(customIcon);
                    }

                    // Menambahkan gambar overlay setelah KML dimuat
                    var bounds = [
                        [-5.00339434502215, 115.224609375],
                        [-9.275622176792099, 105.029296875]
                    ]; // Sesuaikan dengan koordinat gambar
                    L.imageOverlay('/kml/coverage.png', bounds).addTo(mymap); // Tambahkan overlay gambar

                    // Bind popup dengan nama dan deskripsi dari KML
                    var name = layer.feature.properties.name || "No Name";
                    var description = layer.feature.properties.description || "No Description";
                    layer.bindPopup('<b>' + name + '</b><br>' + description);
                });
            })
            .on('error', function(e) {
                console.error("Error loading KML: ", e);
            })
            .addTo(mymap);

            L.Control.geocoder({
                position: 'bottomright'
            }).addTo(mymap);

        // Mengikat pop-up ke setiap layer di KML
        kmlLayer.on('ready', function() {
            kmlLayer.eachLayer(function(layer) {
                var name = layer.feature.properties.name || "No Name";
                var description = layer.feature.properties.description || "No Description";
                layer.bindPopup('<b>' + name + '</b><br>' + description);
            });
        });
    </script> -->
    <script>
        const map = L.map('mapid').setView([-2.5, 120], 5);

        // ✅ Hanya gunakan layer citra satelit dari ESRI
        L.esri.basemapLayer('Imagery').addTo(map);
        L.esri.basemapLayer('ImageryLabels').addTo(map); // opsional, untuk label

        L.Control.geocoder({
            position: 'bottomright'
        }).addTo(map);


        // ✅ Load KML dari URL dinamis (dari database)
        omnivore.kml(<?php echo json_encode($kmlUrl); ?>)
            .on('ready', function() {
                this.eachLayer(function(layer) {
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

        // ✅ Tambahkan imageOverlay dari <GroundOverlay>
        const overlays = <?php echo json_encode($overlays); ?>;
        overlays.forEach(item => {
            L.imageOverlay(item.url, item.bounds, {
                opacity: 0.4
            }).addTo(map);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous">
    </script>
</body>

</html>