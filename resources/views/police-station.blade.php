@extends("layouts.landing-page")

@section("css")
<style>
    #map{
        height: 400px;
    }
</style>
@endsection

@section("content")
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

<div class="container">
    <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
            <div>
                <h1>{{$result->kantorpolisi}}</h1>
                <h2 style="margin: 0;padding:0;margin-bottom:10px;">Alamat : {{$result->alamat}}</h2>
                <h2 style="margin: 0;padding:0;margin-bottom:10px;">No.HP : {{$result->nohp}}</h2>
                <h2 style="margin: 0;padding:0;margin-bottom:10px;">Jam Operasional : {{$result->jamoperasional}}</h2>
                <div class="mt-3">
                    <a href="https://www.google.com/maps?q={{$result->latitude}},{{$result->longitude}}" class="download-btn"><i class="bx bx-map"></i> Buka di Google Maps</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
            <img src="{{URL::to('/')}}/assets/img/kantor-polisi.png" class="img-fluid" alt="">
        </div>
    </div>
</div>

</section><!-- End Hero -->

<!-- Google Maps -->
<div id="map"></div>
@endsection
@section("script")
<script>
    $(function(){
        var map = L.map('map').setView(['{{$result->latitude}}', '{{$result->longitude}}'], 15);
        L.tileLayer('https://{s}.google.com/vt?/lyrs=p&x={x}&y={y}&z={z}', {
            maxZoom: 19,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }).addTo(map);
        
        var markers = L.markerClusterGroup();

        var popupContent = '<strong>{{$result->kantorpolisi}}</strong><br>Alamat: {{$result->alamat}}<br>No.HP: {{$result->nohp}}<br>Jam Operasional: {{$result->jamoperasional}}<br><br><a href="https://www.google.com/maps?q={{$result->latitude}},{{$result->longitude}}" target="_blank">Buka di Google Maps</a>';
        var marker = L.marker(['{{$result->latitude}}', '{{$result->longitude}}']).bindPopup(popupContent);
        markers.addLayer(marker);

        map.addLayer(markers);
    });
</script>
@endsection