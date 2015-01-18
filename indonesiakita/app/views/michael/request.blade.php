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
				<li><a href="logistik">Lihat Logistik</a></li>
				<li><a href="update">Update Data</a></li>
				<li><a href="userrole">Pembagian Tugas</a></li>
				<li class="active"><a href="request">Lihat Request<span class="sr-only">(current)</span></a></li>
				<li><a href="timdarurat">Pembentukan Tim Darurat</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		
		<div class="navbar" style="background-image: url({{ URL::asset('img/cover_lihat_request.jpg') }}); height: 225px;"></div>
		<!--<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Sheena Kristin A.Eschor</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
					<div class=" col-md-9 col-lg-9 "> 
						<table class="table table-user-information">
							<tbody>
								<tr>
									<td>Department:</td>
									<td>Programming</td>
								</tr>
								<tr>
									<td>Hire date:</td>
									<td>06/23/2013</td>
								</tr>
								<tr>
									<td>Date of Birth</td>
									<td>01/24/1988</td>
								</tr>
								<tr>
									<tr>
										<td>Gender</td>
										<td>Male</td>
									</tr>
									<tr>
										<td>Home Address</td>
										<td>Metro Manila,Philippines</td>
									</tr>
									<tr>
										<td>Email</td>
										<td><a href="mailto:info@support.com">info@support.com</a></td>
									</tr>
								</tr>
							</tbody>
						</table>

					<a href="#" class="btn btn-primary">My Sales Performance</a>
					<a href="#" class="btn btn-primary">Team Sales Performance</a>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
				<span class="pull-right">
				    <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
				    <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
				</span>
			</div>
		</div>
	</div>-->
		<!-- TODO modify code below, user request seperti carousel di page contoh -->
		
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="9999999999">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="row">
				<div class="col-md-6 col-md-offset-3" align="center">
				  <table class="table">
				  <td>
					<img src="{{ URL::asset('img/applicant1.jpg') }}"  height="270" width="187">
				  </td>
				  <td><b>
					Nama <br>
					Umur <br>
					Tinggi <br>
					Berat Badan <br>
					Catatan Medis <br>
					Mayor <br>
					Minor <br>
					Asal Organisasi <br>
					Link CV <br>
				  </b></td>
				  <td>
					Oscar De La Hoya <br>
					41 <br>
					179cm <br>
					75kg <br>
					Tidak ada alergi <br>
					Terapis <br>
					Pertolongan Pertama <br>
					WHO <br>
					http://www.dropbox.com/ <br>
				  </td>
				  </table>
				  <br>
				Tentukan peran: 
				  <select class="form-control">
						  <option>Koordinator</option>
						  <option>Relawan</option>
						  <option>Petugas Gudang</option>
				  </select>
				  <br>
				  <button type="button" class="btn btn-danger">Tolak</button>
				  <button type="button" class="btn btn-primary">Terima</button>
				  <br>
				</div>
			</div>
          </div>
          <div class="item">
            <div class="row">
				<div class="col-md-6 col-md-offset-3" align="center">
				  <table class="table">
				  <td>
					<img src="{{ URL::asset('img/applicant2.jpg') }}" height="270" width="187">
				  </td>
				  <td><b>
					Nama <br> <br> <br>
					Umur <br>
					Tinggi <br>
					Berat Badan <br>
					Catatan Medis <br>
					Mayor <br>
					Minor <br>
					Asal Organisasi <br>
					Link CV <br>
				  </b></td>
				  <td>
					Prof. Dr. Dr-Eng. dr. drg. ir. Reinaldo Michael Hasiandehlu, ST, MT, MCD, KFC, PHD, BMC, KYT <br>
					20 <br>
					179cm <br>
					75kg <br>
					Tidak ada alergi <br>
					Terapis <br>
					Pertolongan Pertama <br>
					WHO <br>
					http://www.dropbox.com/ <br>
				  </td>
				  </table>
				  <br>
				Tentukan peran: 
				  <select class="form-control">
						  <option>Koordinator</option>
						  <option>Relawan</option>
						  <option>Petugas Gudang</option>
				  </select>
				  <br>
				  <button type="button" class="btn btn-danger">Tolak</button>
				  <button type="button" class="btn btn-primary" ng-click="main.openSplash()">Terima</button>
				  <br>
				</div>
			</div>
          </div>
          
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
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
	<script type="text/javascript">
		/* Fill in your javascript */
	</script>
@stop