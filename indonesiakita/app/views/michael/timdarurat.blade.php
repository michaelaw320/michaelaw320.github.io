@extends("layout")
@section("css")
	<style type="text/css">
		/* Fill in your css */
		.panel-heading {
		    padding: 5px 15px;
		}

		.panel-footer {
			padding: 1px 15px;
			color: #A0A0A0;
		}

		.profile-img {
			width: 96px;
			height: 96px;
			margin: 0 auto 10px;
			display: block;
			-moz-border-radius: 50%;
			-webkit-border-radius: 50%;
			border-radius: 50%;
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
						<li><a href="update">Update Data</a></li>
						<li><a href="userrole">Pembagian Tugas</a></li>
						<li><a href="request">Lihat Request</a></li>
						<li class="active"><a href="timdarurat">Pembentukan Tim Darurat<span class="sr-only">(current)</span></a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

		<div class="navbar" style="background-image: url({{ URL::asset('img/cover_tim_darurat.jpg') }}); height: 225px;"></div>
		
		<hr/>
		<p>Berikut adalah kandidat yang cocok untuk pembentukan tim darurat pada bencana ini.</p>
		<p>Apakah anda setuju? <a class="btn btn-success" ng-click="main.openSplash()">Bentukkan</a></p>

		<div class="row">
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="center-block">
								<img class="profile-img"
									src="{{ URL::asset('img/person1.jpg') }}">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-10  col-md-offset-1 ">
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
										</span> 
										<label class="form-control">Bianca Swift</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-calendar"></i>
										</span>
										<label class="form-control">32 tahun</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-fullscreen"></i>
										</span>
										<label class="form-control">165cm/55kg</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-book"></i>
										</span>
										<label class="form-control">Medik</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="center-block">
								<img class="profile-img"
									src="{{ URL::asset('img/person2.jpg') }}">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-10  col-md-offset-1 ">
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
										</span> 
										<label class="form-control">Jason Miraz</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-calendar"></i>
										</span>
										<label class="form-control">35 tahun</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-fullscreen"></i>
										</span>
										<label class="form-control">180cm/80kg</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-book"></i>
										</span>
										<label class="form-control">Geologi</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="center-block">
								<img class="profile-img"
									src="{{ URL::asset('img/person3.jpg') }}">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-10  col-md-offset-1 ">
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
										</span> 
										<label class="form-control">William Cruise</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-calendar"></i>
										</span>
										<label class="form-control">33 tahun</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-fullscreen"></i>
										</span>
										<label class="form-control">185cm/85kg</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-book"></i>
										</span>
										<label class="form-control">Jaringan IT</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="center-block">
								<img class="profile-img"
									src="{{ URL::asset('img/person4.jpg') }}">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-10  col-md-offset-1 ">
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
										</span> 
										<label class="form-control">Jessica Andrew</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-calendar"></i>
										</span>
										<label class="form-control">36 tahun</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-fullscreen"></i>
										</span>
										<label class="form-control">163cm/53kg</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-book"></i>
										</span>
										<label class="form-control">Terapik</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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
		      title: 'Tim telah dibuat!',
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