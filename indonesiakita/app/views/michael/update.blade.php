@extends("layout")
@section("css")
	<style type="text/css">
		/* Fill in your css */
		/* Map Width */
		#map-canvas {
			width: 100%;
			height: 200px;
		}
	</style>
@stop
@section("content")
	<div class="starter-template" ng-app="splashDemo" ng-controller="MainCtrl as main">
		<!-- Tab Header -->
		<nav class="navbar navbar-default" role="navigation">
		  <div class="container-fluid">
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li><a href="logistik">Lihat Logistik</a></li>
				<li class="active"><a href="update">Update Data<span class="sr-only">(current)</span></a></li>
				<li><a href="userrole">Pembagian Tugas</a></li>
				<li><a href="request">Lihat Request</a></li>
				<li><a href="timdarurat">Pembentukan Tim Darurat</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

	<div class="navbar" style="background-image: url({{ URL::asset('img/cover_update_data.jpg') }}); height: 225px;"></div>
	
	
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
						<td><input type="text" value="Status Gawat Darurat"></td>
						<td><input type="text" value="Siaga 1"></td>
					</tr>
					<tr>
						<td><input type="text" value="Jenis Bencana"></td>
						<td><input type="text" value="Gunung Meletus"></td>
					</tr>
					<tr>
						<td><input type="text" value="Daerah Dampak Bencana"></td>
						<td><input type="text" value="Kecamatan Payung (Desa Sukameriah), Kecamatan Naman Teran (Desa Bekerah, Desa Simacem)"></td>
					</tr>
					<tr>
						<td><input type="text" value="Waktu Terjadi"></td>
						<td><input type="text" value="15 September 2013, 00.00 WIB"></td>
					</tr>
					<tr>
						<td><input type="text" value="Penyebab Bencana"></td>
						<td><input type="text" value="Bencana Alamiah"></td>
					</tr>
				</tbody>
			</table>
			<div id="map-canvas"></div>
		</div>
		<div class="col-sm-4">
			<h2>Donasi</h2>
			<p>
				Target donasi Rp. <input type="text" value="11.250.000">
			</p>
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
						<td><input type="text" value="100" size="4"></td>
						<td><input type="text" value="11" size="4"></td>
						<td><input type="text" value="10" size="4"></td>
						<td><input type="text" value="59" size="4"></td>
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
						<td><input type="text" value="15" size="4"></td>
						<td><input type="text" value="20" size="4"></td>
					</tr>
					<tr class="alert alert-success">
						<td>Tim Medik</td>
						<td><input type="text" value="35" size="4"></td> 
						<td><input type="text" value="30" size="4"></td>
					</tr>
					<tr class="alert alert-success">
						<td>Tim Konsumsi</td>
						<td><input type="text" value="25" size="4"></td>
						<td><input type="text" value="25" size="4"></td>
					</tr>
					<tr class="alert alert-success">
						<td>Obat-Obatan</td>
						<td><input type="text" value="100" size="4"></td>
						<td><input type="text" value="100" size="4"></td>
					</tr>
					<tr class="alert alert-success">
						<td>Selimut</td>
						<td><input type="text" value="20" size="4"></td>
						<td><input type="text" value="19" size="4"></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<button class="btn btn-lg btn-success" type="submit" ng-click="main.openSplash()">Update</button>
	<!-- TODO: import modulnya kak ikhsan untuk page update, ganti angkanya dengan form text kosong placeholdernya nilai originalnya -->	
	</div>
@stop
@section("javascript")
	<script src="https://maps.googleapis.com/maps/api/js?region=GB"></script>
	<script type="text/javascript">
		/* Fill in your javascript */
		var myLatlng = new google.maps.LatLng(-6.8815501,107.604016);
		var mapOptions = {
		  zoom: 4,
		  center: myLatlng
		}
		var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

		// Place a draggable marker on the map
		var marker = new google.maps.Marker({
		    position: myLatlng,
		    map: map,
		    draggable:true,
		    title:"Drag me!"
		});
	</script>
	<script type="text/javascript">
		// Module for the demo
		angular.module('splashDemo', ['ui.splash'])
		.controller('MainCtrl', ['$splash', function ($splash) {
		  this.openSplash = function () {
		    $splash.open({
		      title: 'Perubahan telah disimpan!',
		      message: ""
		    });
		  };
		}]);

		// Re-usable $splash module
		angular.module('ui.splash', ['ui.bootstrap'])
		.service('$splash', [
		  '$modal',
		  '$rootScope',
		  function($modal, $rootScope) {
		    return {
		      open: function (attrs, opts) {
		        var scope = $rootScope.$new();
		        angular.extend(scope, attrs);
		        opts = angular.extend(opts || {}, {
		          backdrop: false,
		          scope: scope,
		          templateUrl: 'splash/content.html',
		          windowTemplateUrl: 'splash/index.html'
		        });
		        return $modal.open(opts);
		      }
		    };
		  }
		])
		.run([
		  '$templateCache',
		  function ($templateCache) {
		    $templateCache.put('splash/index.html',
		      '<section class="splash" ng-class="{\'splash-open\': animate}" ng-style="{\'z-index\': 1000, display: \'block\'}" ng-click="close($event)">' +
		      '  <div class="splash-inner" ng-transclude></div>' +
		      '</section>'
		    );
		    $templateCache.put('splash/content.html',
		      '<div class="splash-content text-center">' +
		      '  <h1 ng-bind="title"></h1>' +
		      '  <p class="lead" ng-bind="message"></p>' +
		      '  <button class="btn btn-lg btn-outline" ng-bind="btnText || \'Ok\'" ng-click="$close()"></button>' +
		      '</div>'
		    );
		  }
		]);
	</script>
@stop