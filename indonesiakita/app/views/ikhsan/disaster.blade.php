@extends("layout")
@section("css")
	<style type="text/css">
		/* Carousel base class */
		.carousel {
			height: 400px;
		}
		/* Since positioning the image, we need to help out the caption */
		.carousel-caption {
			z-index: 10;
		}
		/* Declare heights because of positioning of img element */
		.carousel .item {
			height: 400px;
			background-color: #777;
		}
		.carousel-inner > .item > img {
			position: absolute;
			top: 0;
			left: 0;
			min-width: 100%;
			min-height: 100%;
		}
		/* Map Width */
		#map-canvas {
			width: 100%;
			height: 200px;
		}
		#donateBtn {
			width: 100%;
		}
	</style>
@stop
@section("content")
	<div class="starter-template">
		<h1>Bencana Sinabung</h1>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class=""></li>
				<li data-target="#myCarousel" data-slide-to="1" class=""></li>
				<li data-target="#myCarousel" data-slide-to="2" class="active"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item">
					<img src="{{ URL::asset('img/splash-sinabung-1.jpg') }}" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>Sedikitnya 16 orang meninggal karena terkena letusan gunung berapi Sinabung, Indonesia</h1>
							<p>Korban tewas yang terkena dampak dari gunung berapi yang telah menampakkan keaktifannya sejak sebulan yang lalu meningkat menjadi 16 korban. Minggu setelah tim penyelamat menemukan mayat hangus dan seorang mahasiswa yang luka parah yang akhirnya meninggal di rumah sakit.</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="{{ URL::asset('img/splash-sinabung-2.jpg') }}" alt="Second slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>Pihak Berwenang Indonesia Telah Disiapkan Untuk Menghadapi Bencana Lainnya</h1>
							<p>Seorang wanita yang bekerja di ladangnya yang telah ditutupi oleh abu dari erupsi gunung berapi.</p>
						</div>
					</div>
				</div>
				<div class="item active">
					<img src="{{ URL::asset('img/splash-sinabung-3.jpg') }}" alt="Third slide">
					<div class="container">
						<div class="carousel-caption">							
							<h1>Erupsi mematikan dari gunung berapi di Indonesia</h1>
							<p>Seorang pengendara motor menjelajahi jalan yang telah tertutup abu vulkanik dan lumpur, diikuti dengan hujan abu tebal dari erupsi Gunung Berapi Sinabung pada 12 Januari 2014</p>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="row">
			<div class="col-sm-8 sidebar">
				<!-- Bagian Deskripsi Bencana -->
				<h2>Deskripsi Bencana</h2>
				<table class="table table-condensed">
					<thead>
						<tr>
							<th>Jenis</th>
							<th>Deskripsi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Status Gawat Darurat</td>
							<td>Siaga 1</td>
						</tr>
						<tr>
							<td>Jenis Bencana</td>
							<td>Gunung Meletus</td>
						</tr>
						<tr>
							<td>Daerah Dampak Bencana</td>
							<td>Kecamatan Payung (Desa Sukameriah), Kecamatan Naman Teran (Desa Bekerah, Desa Simacem)</td>
						</tr>
						<tr>
							<td>Waktu Terjadi</td>
							<td>15 September 2013, 00.00 WIB</td>
						</tr>
						<tr>
							<td>Penyebab Bencana</td>
							<td>Bencana Alamiah</td>
						</tr>
					</tbody>
				</table>
				<div id="map-canvas"></div>
			</div>
			<div class="col-sm-4">
				<p>
					<h1>
						Rp 23.000.000
					</h1>
				sudah terdonasi dari Rp. 11.250.000 (target donasi)
				</p>
				<a id="donateBtn" href="bencana/donasi" class="btn btn-lg btn-success">Donasi</a>
				<h2>Kondisi Bencana</h2>
				<!--Bagian Jumlah Korban -->
				<table class="table">
					<thead>
						<tr>
							<th><div class="label label-default">Luka Ringan</div></th>
							<th><div class="label label-warning">Luka Berat</div></th>
							<th><div class="label label-danger">Korban Jiwa</div></th>
							<th><div class="label label-success">Pengungsi</div></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>100</td>
							<td>11</td>
							<td>10</td>
							<td>59</td>
						</tr>
					</tbody>
				</table>
				<!--Bagian Tabel -->
				<table class="table">
					<thead>
						<tr>
							<th>Jenis</th>
							<th>Kondisi Lapangan</th>
							<th>Kebutuhan</th>
						</tr>
					</thead>
					<tbody>
						<tr class="alert alert-danger">
							<td>Tim Logistik</td>
							<td>15</td>
							<td>20</td>
						</tr>
						<tr class="alert alert-success">
							<td>Tim Medik</td>
							<td>35</td> 
							<td>30</td>
						</tr>
						<tr class="alert alert-success">
							<td>Tim Konsumsi</td>
							<td>25</td>
							<td>25</td>
						</tr>
						<tr class="alert alert-success">
							<td>Obat-Obatan</td>
							<td>100</td>
							<td>100</td>
						</tr>
						<tr class="alert alert-success">
							<td>Selimut</td>
							<td>20</td>
							<td>19</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop
@section("javascript")
	<script src="https://maps.googleapis.com/maps/api/js?region=GB"></script>
    <script>
		var stockholm = new google.maps.LatLng(-6.8815501,107.604016);
		var parliament = new google.maps.LatLng(-6.8815501,107.604016);
		var marker;
		var map;

		function initialize() {
		  var mapOptions = {
			zoom: 13,
			center: stockholm
		  };

		  map = new google.maps.Map(document.getElementById('map-canvas'),
				  mapOptions);

		  marker = new google.maps.Marker({
			map:map,
			position: parliament
		  });
		  google.maps.event.addListener(marker, 'click', toggleBounce);
		}

		function toggleBounce() {
		  if (marker.getAnimation() != null) {
			marker.setAnimation(null);
		  } else {
			marker.setAnimation(google.maps.Animation.BOUNCE);
		  }
		}
		google.maps.event.addDomListener(window, 'load', initialize);
		google.maps.event.addListener(marker, "rightclick", function() {
				marker.setIcon('http://icons.iconarchive.com/icons/yellowicon/game-stars/256/Mario-icon.png');
		});
	    </script>
		<script>
		var x = document.getElementById("location");
		function getLocation() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
			} else {
				x.innerHTML = "Geolocation is not supported by this browser.";
			}
		}
		function showPosition(position) {
			x.innerHTML = "Latitude: " + position.coords.latitude + 
			"<br>Longitude: " + position.coords.longitude; 
		}
	</script>
@stop