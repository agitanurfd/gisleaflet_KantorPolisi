@extends('adminlte::page')

@section('title', 'Edit Kantor Polisi')

@section('content_header')
<h1 class="m-0 text-dark">Edit Kantor Polisi</h1>
@stop

@section('content')
<form action="{{ route('kantor_polisi.update', $kantor_polisi->id) }}" method="post" id="kantor_polisiForm">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow:auto">
                    <table style="width:100%">
                        <tr>
                            <td><label for="LabelNama">Kantor Polisi</label></td>
                            <td><input type="text" size="70" id="InputNama" placeholder="Kantor Polisi" name="kantorpolisi" value="{{ $kantor_polisi->kantorpolisi }}"></td>
                        </tr>
                        <tr>
                            <td><label for="LabelAlamat">Alamat</label></td>
                            <td><input type="text" size="70" id="InputAlamat" placeholder="Alamat" name="alamat" value="{{ $kantor_polisi->alamat }}"></td>
                        </tr>
                        <tr>
                            <td><label for="LabelJamOperasional">Jam Operasional</label></td>
                            <td><input type="text" size="70" id="InputJamOperasional" placeholder="Jam Operasional" name="jamoperasional" value="{{ $kantor_polisi->jamoperasional }}"></td>
                        </tr>
                        <tr>
                            <td><label for="LabelNoHp">Phone</label></td>
                            <td><input type="text" size="70" id="InputNoHp" placeholder="Phone" name="nohp" value="{{ $kantor_polisi->nohp }}"></td>
                        </tr>
                        <tr>
                            <td><label for="LabelLatitude">Latitude</label></td>
                            <td><input type="text" size="70" id="InputLatitude" placeholder="Latitude" name="latitude" value="{{ $kantor_polisi->latitude }}"></td>
                        </tr>
                        <tr>
                            <td><label for="LabelLongitude">Longitude</label></td>
                            <td><input type="text" size="70" id="InputLongitude" placeholder="Longitude" name="longitude" value="{{ $kantor_polisi->longitude }}"></td>
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
    var longitude = document.getElementById("InputLongitude").value;
    var latitude = document.getElementById("InputLatitude").value;

    var map = L.map('map').setView([latitude, longitude], 18);
    L.tileLayer('https://{s}.google.com/vt?/lyrs=p&x={x}&y={y}&z={z}', {
        maxZoom: 19,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    }).addTo(map);

    var marker = L.marker([latitude, longitude]).addTo(map);

    map.on('click', function onMapClick(e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;
        document.getElementById('InputLatitude').value = lat;
        document.getElementById('InputLongitude').value = lng;

        // Move the marker to the new coordinates
        marker.setLatLng(e.latlng);
    });

    document.getElementById('simpanButton').addEventListener('click', function() {
        Swal.fire({
            title: 'Simpan Perubahan Kantor Polisi?',
            text: 'Apakah Anda yakin ingin menyimpan perubahan kantor polisi?',
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