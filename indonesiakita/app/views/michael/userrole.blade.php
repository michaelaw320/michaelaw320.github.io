@extends("layout")
@section("css")
	<style type="text/css">
		/* Fill in your css */
	</style>
@stop
@section("content")
	<div class="starter-template">
		<!-- Tab Header -->
		<nav class="navbar navbar-default" role="navigation">
		  <div class="container-fluid">
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li><a href="logistik">Lihat Logistik</a></li>
				<li><a href="update">Update Data</a></li>
				<li class="active"><a href="userrole">Pembagian Tugas<span class="sr-only">(current)</span></a></li>
				<li><a href="request">Lihat Request</a></li>
				<li><a href="timdarurat">Pembentukan Tim Darurat</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		
		<div class="row">
			<div class="col-md-6" align="center">
			  <table class="table">
				<thead>
				  <tr>
					<td colspan="5">
						<img src="{{ URL::asset('img/cover_pembagian_tugas.jpg') }}">
					</td>
				  </tr>
				  <tr>
					<th>#</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Username</th>
					<th>Role</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>1</td>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
					<td> 
						<select class="form-control">
						  <option>Koordinator</option>
						  <option>Relawan</option>
						  <option>Petugas Gudang</option>
						</select>
					</td>
				  </tr>
				  <tr>
					<td>2</td>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
					<td>
						<select class="form-control">
						  <option>Koordinator</option>
						  <option>Relawan</option>
						  <option>Petugas Gudang</option>
						</select>
					</td>
				  </tr>
				  <tr>
					<td>3</td>
					<td>Larry</td>
					<td>the Bird</td>
					<td>@twitter</td>
					<td>
						<select class="form-control">
						  <option>Koordinator</option>
						  <option>Relawan</option>
						  <option>Petugas Gudang</option>
						</select>
					</td>
				  </tr>
				</tbody>
			  </table>
			</div>
		</div>
		
	</div>
@stop
@section("javascript")
	<script type="text/javascript">
		/* Fill in your javascript */
	</script>
@stop