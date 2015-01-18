<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<img src="{{ URL::asset('img/logo.jpg') }}">
		</div>
		<div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown" title="Login">
						Anda belum login <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<form class="navbar-form" role="form" action="login" method="post">
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Username" name="username">
							</div>
							<div class="form-group">
								<input class="form-control" type="password" placeholder="Password" name="password">
							</div>
								<button class="col-md-6 col-middle btn btn-success" type="submit">Login</button>
								<a class="col-md-6 col-middle btn btn-warning">
									Daftar
								</a>
							</div>
						</form>
					</ul>

				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>