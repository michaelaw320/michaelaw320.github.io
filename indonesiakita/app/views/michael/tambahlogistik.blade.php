@extends("layout")
@section("css")
	<style type="text/css">
		/* Fill in your css */
		#btnUpdateData {
			width: 100%;
		}
	</style>
@stop
@section("content")
	<div class="starter-template">
		<table class="table table-condensed" style="display: inline-block;">
			<tr>
				<td colspan="2">
					<img src="{{ URL::asset('img/cover_tambah_logistik.jpg') }}">
				</td>
			</tr>
			<tr>
				<td width="400">
					<form class="form"> 
						<h3>Jenis Logistik:</h3> 
						<select class="form-control">
 						<option>Makanan</option>
						<option>Air</option>
						<option>Pakaian</option>
						<option>Kendaraan</option>
						<option>Peralatan Tukang</option>
						<option>Other</option>
						<!-- TODO nanti kalau dipilih other dia bisa input yg laen, tolong dilengkapin -->
						</select>
					</form>
				</td>
			</tr>
			<tr>
				<td>
					<h5> <input type="text" value="Jumlah" > </h5>
				</td>
			</tr>
			<tr>
				<td>
					<center><button id="btnUpdateData" class="btn btn-lg btn-success" type="submit">Update Data</button></center>
				</td>
			</tr>
		</table>
	</div>
@stop
@section("javascript")
	<script type="text/javascript">
		/* Fill in your javascript */
	</script>
@stop