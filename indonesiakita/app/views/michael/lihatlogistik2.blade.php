@extends("layout")
@section("css")
	<style type="text/css">
		/* Fill in your css */
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
				<li class="active"><a href="../logistik">Lihat Logistik<span class="sr-only">(current)</span></a></li>
				<li><a href="../update">Update Data</a></li>
				<li><a href="../userrole">Pembagian Tugas</a></li>
				<li><a href="../request">Lihat Request</a></li>
				<li><a href="../timdarurat">Pembentukan Tim Darurat</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<div class="navbar" style="background-image: url({{ URL::asset('img/cover_lihat_logistik.jpg') }}); height: 225px;"></div>
		
		<h3>Berikut adalah hasil pembagian logistik berdasarkan daerah <a class="btn btn-lg btn-success" onclick="return window.print()">Cetak</a></h3>
		<div class="row">
			<div class="col-sm-12 sidebar">
				<table class="table" cellpadding="20px">
					<tr>
						<td>
							<h3>Kecamatan Barastagi</h3>
						</td>
						<td>
							<h3>Desa Daulu</h3>
						</td>
						<td>
							<h3>Desa Gurusinga</h3>
						</td>
					</tr>
					<tr>
						<td>
							30 Bungkus Makanan Kering
						</td>
						<td>
							40 Bungkus Makanan Kering
						</td>
						<td>
							50 Bungkus Makanan Kering
						</td>
					</tr>
					<tr>
						<td>
							10 Kaleng Susu Bayi
						</td>
						<td>
							15 Kaleng Susu Bayi
						</td>
						<td>
							5 Kaleng Susu Bayi
						</td>
					</tr>
					<tr>
						<td>
							12 Galon Mineral
						</td>
						<td>
							18 Galon Mineral
						</td>
						<td>
							6 Galon Mineral
						</td>
					</tr>
					<tr>
						<td>
							50 Botol Mineral
						</td>
						<td>
							100 Botol Mineral
						</td>
						<td>
							70 Botol Mineral
						</td>
					</tr>
					<tr>
						<td>
							30 Liter Bensin
						</td>
						<td>
							50 Liter Bensin
						</td>
						<td>
							40 Liter Bensin
						</td>
					</tr>
					<tr>
						<td>
							30 Liter Solar
						</td>
						<td>
							40 Liter Solar
						</td>
						<td>
							50 Liter Solar
						</td>
					</tr>
					<tr>
						<td>
							30 Set Pakaian Dewasa
						</td>
						<td>
							20 Set Pakaian Dewasa
						</td>
						<td>
							20 Set Pakaian Dewasa
						</td>
					</tr>
					<tr>
						<td>
							10 Set Pakaian Bayi
						</td>
						<td>
							10 Set Pakaian Bayi
						</td>
						<td>
							10 Set Pakaian Bayi
						</td>
					</tr>
					<tr>
						<td>
							60 Popok Bayi
						</td>
						<td>
							80 Popok Bayi
						</td>
						<td>
							60 Popok Bayi
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<br>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
@stop
@section("javascript")
	<script type="text/javascript">
		// Module for the demo
		angular.module('splashDemo', ['ui.splash'])
		.controller('MainCtrl', ['$splash', function ($splash) {
		  this.openSplash = function () {
		    $splash.open({
		      title: 'File telah dikirim ke printer!',
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