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

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <!-- ESRI Leaflet Plugin -->
    <script src="https://unpkg.com/esri-leaflet@3.0.3/dist/esri-leaflet.js"></script>
    <!-- Leaflet Omnivore Plugin -->
    <script src="https://unpkg.com/leaflet-omnivore@0.3.4/leaflet-omnivore.min.js"></script>

    <script>
        // Inisialisasi peta dengan posisi di Indonesia
        var mymap = L.map('mapid').setView([-2.5489, 118.0149], 6); // Koordinat Indonesia

        // Tambahkan citra satelit dari ESRI World Imagery
        L.esri.basemapLayer('Imagery').addTo(mymap);

        // Tambahkan label opsional untuk nama kota atau jalan
        L.esri.basemapLayer('ImageryLabels').addTo(mymap);

        // Ubah posisi tombol zoom ke kanan bawah
        mymap.zoomControl.setPosition('bottomright');

        // Tambahkan file KML dari direktori public/kml
        var kmlLayer = omnivore.kml('/kml/Jawir.kml') // Ganti dengan nama file kml yang benar
            .on('ready', function() {
                mymap.fitBounds(kmlLayer.getBounds()); // Zoom otomatis sesuai area KML
            })
            .addTo(mymap);
    </script>
</body>
</html>
