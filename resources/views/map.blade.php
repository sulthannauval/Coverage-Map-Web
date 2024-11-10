<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemetaan Jangkauan TV Digital Indonesia</title>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <style>
        /* Mengatur halaman agar peta bisa fullscreen kecuali navbar */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        #mapid {
            flex: 1 1 auto; /* Peta memenuhi sisa halaman */
            height: 100%;
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- Peta -->
    <div id="mapid"></div>
    <!-- Legend -->
    <div id="legend" style="position: absolute; bottom: 30px; left: 10px; background: white; padding: 10px; z-index: 1000;">
    <img src="/kml/legend.png" alt="Legend" style="width: 150px;"/>
    </div>
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <!-- ESRI Leaflet Plugin -->
    <script src="https://unpkg.com/esri-leaflet@3.0.3/dist/esri-leaflet.js"></script>
    <!-- Leaflet Omnivore Plugin -->
    <script src="https://unpkg.com/leaflet-omnivore@0.3.4/leaflet-omnivore.min.js"></script>

    <script>
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
                    var bounds = [[-5.00339434502215, 115.224609375], [-9.275622176792099, 105.029296875]]; // Sesuaikan dengan koordinat gambar
                    // L.imageOverlay('/kml/coverage.png', bounds).addTo(mymap); // Tambahkan overlay gambar

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

        // Mengikat pop-up ke setiap layer di KML
        kmlLayer.on('ready', function() {
            kmlLayer.eachLayer(function(layer) {
                var name = layer.feature.properties.name || "No Name";
                var description = layer.feature.properties.description || "No Description";
                layer.bindPopup('<b>' + name + '</b><br>' + description);
            });
        });
    </script>
</body>
</html>
