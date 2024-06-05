@extends('adminlte::page')

@section('title', 'Kantor Polisi')

@section('content_header')
<h1 class="m-0 text-dark">Data Kantor Polisi</h1>
@stop

@section('content')
<form action="{{ route('kantor_polisi.store') }}" method="post" id="kantor_polisiForm">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow:auto">
                    <table style="width:100%">
                        <tr>
                            <td><label for="LabelNama">Kantor Polisi</label></td>
                            <td><input type="text" size="70" id="InputNama" placeholder="Kantor Polisi" name="kantorpolisi"></td>
                        </tr>
                        <tr>
                            <td><label for="LabelAlamat">Alamat</label></td>
                            <td><input type="text" size="70" id="InputAlamat" placeholder="Alamat" name="alamat"></td>
                        </tr>
                        <tr>
                            <td><label for="LabelJamOperasional">Jam Operasional</label></td>
                            <td><input type="text" size="70" id="InputJamOperasional" placeholder="Jam Operasional" name="jamoperasional"></td>
                        </tr>
                        <tr>
                            <td><label for="LabelNoHp">Phone</label></td>
                            <td><input type="text" size="70" id="InputNoHp" placeholder="Phone" name="nohp"></td>
                        </tr>
                        <tr>
                            <td><label for="LabelLatitude">Latitude</label></td>
                            <td><input type="text" size="70" id="InputLatitude" placeholder="Latitude" name="latitude"></td>
                        </tr>
                        <tr>
                            <td><label for="LabelLongitude">Longitude</label></td>
                            <td><input type="text" size="70" id="InputLongitude" placeholder="Longitude" name="longitude"></td>
                        </tr>
                    </table>
                    <br>

                    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

                    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                    <style>
                        #map {
                            height: 400px;
                        }
                    </style>

                    <div id="map"></div>

                </div>

                <div class="card-footer">
                    <button type="button" class="btn btn-success" id="simpanButton">Simpan</button>
                    <a href="{{ route('kantor_polisi.index') }}" class="btn btn-default">Batal</a>
                </div>
            </div>
        </div>
    </div>
</form>
@stop

@push('js')
<script>
    var map = L.map('map').setView([-6.8931149, 107.6090784], 15);
    L.tileLayer('https://{s}.google.com/vt?/lyrs=p&x={x}&y={y}&z={z}', {
        maxZoom: 19, // Minumun tingkat zoom
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        // attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // MARKER 
    var marker; //  digunakan untuk menyimpan marker yang ditambahkan ke peta.
    map.on('click', function onMapClick(e) { // Ini menetapkan suatu fungsi untuk menangani peristiwa klik pada peta dan mengambil objek peristiwa (e). Fungsi ini akan dieksekusi setiap kali pengguna mengklik peta.
        //Mengambil nilai latitude dan longitude
        lat = e.latlng.lat;
        lng = e.latlng.lng;
        // Mengisi nilai input Latitude dan Longitude
        document.getElementById('InputLatitude').value = lat;
        document.getElementById('InputLongitude').value = lng;

        // menghapus marker jika ada marker
        if (marker) {
            map.removeLayer(marker);
        }

        // Marker
        // Membuat marker baru di lokasi klik pengguna dan menambahkannya ke peta. Marker ini juga memiliki pop-up yang menampilkan koordinat dan secara otomatis dibuka setelah marker ditambahkan.
        marker = L.marker(e.latlng).addTo(map)
            .bindPopup("Koordinat " + e.latlng.toString())
            .openPopup();
    });

    // POLYLINE
    // var marker; //Ini mendeklarasikan variabel marker tanpa memberikannya nilai awal
    // var linearray = []; // variabel ini mendeklarasikan array linearray yang akan digunakan untuk menyimpan titik-titik pada peta,
    // // array ini digunakan untuk membangun polyline.
    // var polyline; // digunakan untuk merepresentasikan polyline pada peta.

    // map.on('click', function onMapClick(e) { // Ini menetapkan suatu fungsi untuk menangani peristiwa klik pada peta  dan mengambil objek peristiwa (e). Fungsi ini akan dieksekusi setiap kali pengguna mengklik peta.
    //     // Mengambil nilai latitude dan longitude
    //     lat = e.latlng.lat;
    //     lng = e.latlng.lng;
    //     // Mengisi nilai input Latitude dan Longitude
    //     document.getElementById('InputLatitude').value = lat;
    //     document.getElementById('InputLongitude').value = lng;

    //     if (polyline) { // Menghapus polyline sebelumnya jika ada 
    //         map.removeLayer(polyline);
    //     }

    //     linearray.push(e.latlng); // Menambahkan objek latlng, digunakan untuk membangun polyline.

    //     marker = L.marker(e.latlng).addTo(map) // objek yang berisi informasi latitude dan longitude dari peristiwa klik pada peta.
    //         .bindPopup("Koordinat " + e.latlng.toString()) // Mengaitkan pop-up dengan marker. Pop-up ini akan muncul ketika marker diklik.
    //         .openPopup();
    //     polyline = L.polyline(linearray, {
    //         color: 'red'
    //     }).addTo(map); // Membuat polyline baru dengan menggunakan titik-titik yang disimpan dalam array linearray. Polyline ini diberi warna merah dan ditambahkan ke peta menggunakan addTo(map).
    // });

    // / POLYGONE
    // var marker; // Variabel marker digunakan untuk menyimpan marker yang ditambahkan ke peta.
    // var linearray = []; // digunakan untuk menyimpan titik-titik yang membentuk poligon.
    // var polygon; // digunakan untuk menyimpan poligon yang ditambahkan ke peta.

    // map.on('click', function onMapClick(e) { // Menetapkan suatu fungsi untuk menangani peristiwa klik pada peta dan mengambil objek peristiwa (e). Fungsi ini akan dieksekusi setiap kali pengguna mengklik peta.
    //     // Mengambil nilai latitude dan longitude
    //     lat = e.latlng.lat;
    //     lng = e.latlng.lng;
    //     // Mengisi nilai input Latitude dan Longitude
    //     document.getElementById('InputLatitude').value = lat; // Memperbarui nilai elemen HTML dengan ID 'InputLatitude' dan 'InputLongitude' dengan nilai latitude dan longitude yang baru, sehingga menampilkan koordinat klik pengguna di formulir HTML.
    //     document.getElementById('InputLongitude').value = lng; // Memperbarui nilai elemen HTML dengan ID 'InputLatitude' dan 'InputLongitude' dengan nilai latitude dan longitude yang baru, sehingga menampilkan koordinat klik pengguna di formulir HTML.

    //     if (polygon) { // Menghapus polygone sebelumnya jika ada
    //         map.removeLayer(polygon);
    //     }

    //     linearray.push(e.latlng); // digunakan untuk membangun polygone.

    //     marker = L.marker(e.latlng).addTo(map) // Membuat marker baru di lokasi klik pengguna dan menambahkannya ke peta. Marker ini juga memiliki pop-up yang menampilkan koordinat.
    //         .bindPopup("Koordinat " + e.latlng.toString())
    //         .openPopup();

    //     // Membuat poligon
    //     polygon = L.polygon(linearray, { // Membuat poligon baru dengan menggunakan titik-titik yang disimpan dalam array linearray. Poligon ini diberi warna garis merah, warna isi biru, dan opasitas isi sebesar 0.5. Poligon ditambahkan ke peta menggunakan addTo(map).
    //         color: 'red',
    //         fillColor: 'blue', // Warna isi poligon
    //         fillOpacity: 0.5 // Opasitas isi poligon
    //     }).addTo(map);
    // });

    // CIRCLE 
    // var marker; // Ini mendeklarasikan variabel marker tanpa memberikannya nilai awal. Variabel ini nantinya akan digunakan untuk menyimpan marker pada peta.
    // var circle; // Ini mendeklarasikan variabel circle tanpa memberikannya nilai awal. Variabel ini akan digunakan untuk menyimpan lingkaran pada peta.

    // map.on('click', function onMapClick(e) { // Ini menetapkan suatu fungsi untuk menangani peristiwa klik pada peta dan mengambil objek peristiwa (e). Fungsi ini akan dieksekusi setiap kali pengguna mengklik peta.
    //     var lat = e.latlng.lat; // Mendapatkan nilai latitude dan longitude dari objek peristiwa dan menyimpannya dalam variabel lat dan lng masing-masing.
    //     var lng = e.latlng.lng; // Mendapatkan nilai latitude dan longitude dari objek peristiwa dan menyimpannya dalam variabel lat dan lng masing-masing.
    //     document.getElementById('InputLatitude').value = lat; // Memperbarui nilai elemen HTML dengan ID 'InputLatitude' dan 'InputLongitude' dengan nilai latitude dan longitude yang baru, sehingga menampilkan koordinat klik pengguna di formulir HTML.
    //     document.getElementById('InputLongitude').value = lng; // Memperbarui nilai elemen HTML dengan ID 'InputLatitude' dan 'InputLongitude' dengan nilai latitude dan longitude yang baru, sehingga menampilkan koordinat klik pengguna di formulir HTML.

    // if (marker) {
    //     // Hapus marker sebelumnya jika ada
    //     map.removeLayer(marker);
    // }

    // if (circle) {
    //     // Hapus lingkaran sebelumnya jika ada
    //     map.removeLayer(circle);
    // }

    //     marker = L.marker([lat, lng]).addTo(map); // Membuat marker baru dengan menggunakan nilai latitude dan longitude yang diambil dari objek peristiwa. Marker tersebut ditambahkan ke peta menggunakan .addTo(map), dan nilai marker disimpan dalam variabel marker.
    //     circle = L.circle([lat, lng], { // Membuat lingkaran baru dengan pusat di lokasi yang sama dengan marker. Lingkaran ini memiliki warna hijau dan radius sebesar 100 meter.
    //         color: 'green',
    //         radius: 25
    //     }).addTo(map);
    // });

    document.getElementById('simpanButton').addEventListener('click', function() {
        Swal.fire({
            title: 'Simpan Data Kantor Polisi?',
            text: 'Apakah Anda yakin ingin menyimpan data kantor polisi?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Simpan!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('kantor_polisiForm').submit();
            }
        });
    });
</script>
@endpush