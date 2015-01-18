@extends("layout")
@section("css")
	<style type="text/css">
		/* Fill in your css */
		#bagiLogistik {
			width: 100%;
		}
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
				<li class="active"><a href="logistik">Lihat Logistik<span class="sr-only">(current)</span></a></li>
				<li><a href="update">Update Data</a></li>
				<li><a href="userrole">Pembagian Tugas</a></li>
				<li><a href="request">Lihat Request</a></li>
				<li><a href="timdarurat">Pembentukan Tim Darurat</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<table class="table table-condensed" style="display: inline-block;">
			<tr>
				<td colspan="2">
					<img src="{{ URL::asset('img/cover_lihat_logistik.jpg') }}">
				</td>
			</tr>
		</table>
		<div class="row">
			<div class="col-sm-8 sidebar">
				<table class="table table-condensed" cellpadding="20px">
					<tr>
						<td colspan="2">
							<h3>Persediaan Logistik Saat Ini:</h3>
						</td>
					</tr>
					<tr>
						<td>
							Makanan Kering:
						</td>
						<td>
							120 Bungkus
						</td>
					</tr>
					<tr>
						<td>
							Susu Bayi:
						</td>
						<td>
							30 Kaleng
						</td>
					</tr>
					<tr>
						<td>
							Mineral Galon:
						</td>
						<td>
							35 Galon
						</td>
					</tr>
					<tr>
						<td>
							Mineral Botol:
						</td>
						<td>
							250 Botol
						</td>
					</tr>
					<tr>
						<td>
							Set Alat Tukang:
						</td>
						<td>
							25 Set
						</td>
					</tr>
					<tr>
						<td>
							Genset:
						</td>
						<td>
							7 Buah
						</td>
					</tr>
					<tr>
						<td>
							Bensin:
						</td>
						<td>
							120 Liter
						</td>
					</tr>
					<tr>
						<td>
							Solar:
						</td>
						<td>
							120 Liter
						</td>
					</tr>
					<tr>
						<td>
							Set Pakaian Dewasa:
						</td>
						<td>
							70 Pasang
						</td>
					</tr>
					<tr>
						<td>
							Set Pakaian Anak:
						</td>
						<td>
							50 Pasang
						</td>
					</tr>
					<tr>
						<td>
							Set Pakaian Bayi:
						</td>
						<td>
							20 Pasang
						</td>
					</tr>
					<tr>
						<td>
							Popok Bayi:
						</td>
						<td>
							200 Buah
						</td>
					</tr>
				</table>
			</div>
			<div class="row-sm-8 col-sm-4">
				<!-- Bagian Deskripsi Bencana -->
				<h3>Bagi Logistik</h3>
				<table class="table" >
					<thead>
						<tr>
							<td>
								<p>Pembagian logistik terhadap 3 daerah lokasi bencana, yaitu:<br></p>
								<p>1. Kecamatan Barastagi, Kabupaten Karo, Sumatera Utara<br></p>
								<p>2. Desa Daulu<br></p>
								<p>3. Desa Gurusinga</p>
							</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<a id="bagiLogistik" href="logistik/bagilogistik" class="btn btn-lg btn-success">Bagi Logistik</a>
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