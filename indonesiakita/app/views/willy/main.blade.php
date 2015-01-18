@extends("layout")
@section("css")
	<style type="text/css">
		#map {
			width: 100%;
			margin-left: auto;
			margin-right: auto;
		}
		.mini-map-canvas {
			width: 100%;
			height: 400px;
		}
	</style>
@stop
@section("content")
	<div class="starter-template">
		<h1>Jadilah Relawan</h1>
		<p class="lead">Mari kita bantu sesama untuk membuat Indonesia yang lebih baik. <br> Bila setiap dari kita menolong 1 orang tiap hari. Negara Indonesia bakal menjadi negara yang terbahagia.</p>
		<canvas id="map"></canvas>
	</div>
@stop
@section("javascript")
	<script type="text/javascript">
		var canvas = document.getElementById('map');
		canvas.width = 1024;
		canvas.height = 366;
		var context = canvas.getContext('2d');

		var bgCanvas = new Image();
		bgCanvas.src = 'img/map.jpg';
		context.drawImage(bgCanvas, 0, 0, 1024, 366);
		var markImg = new Image();
		markImg.src = 'img/mark.png';		
		var marks = [];
		marks.push({
			x: 60,
			y: 15,
		});
		marks.push({
			x: 240,
			y: 210,
		});
		marks.push({
			x: 880,
			y: 150,
		});
		console.log("marks");
		$.each(marks, function(index, mark) {
			context.drawImage(markImg, mark.x, mark.y);
		});
		console.log("marks");
		canvas.addEventListener("mousemove", on_mousemove, false);
		canvas.addEventListener("click", on_click, false);
		//check if the mouse is over the link and change cursor style
		function on_mousemove (ev) {
			var x, y;
			// Get the mouse position relative to the canvas element.
			if (ev.layerX || ev.layerX == 0) { //for firefox
				x = ev.layerX;
				y = ev.layerY;
			}

			//is the mouse over the link?
			var over = false;
			$.each(marks, function(index, mark) {
				if (((mark.x <= x) && (x <= (mark.x+markImg.width))) && ((mark.y <= y) && (y <= (mark.y+markImg.height)))) {
					over = true;
				}
			});
			if (over)
				inLink = true;
		}

		//if the link has been clicked, go to link
		function on_click(e) {
			if (inLink)  {
				window.location = "bencana";
			}
		}
	</script>
	<!--<script src="https://maps.googleapis.com/maps/api/js?region=GB"></script>
	<script type="text/javascript">
		 var indonesia = new google.maps.LatLng(-0.77477,115.68973);
		 var gunungsinabung = new google.maps.LatLng(2.77477,97.68973);
		 var banjirjakarta = new google.maps.LatLng(-6.20876,106.84560);	
		 var map;

		 function initialize() {
		 	var mapOptions = {
		 		zoom: 4,
		 		center: indonesia
		 	};
		 	var map = new google.maps.Map(document.getElementById('map'),mapOptions);
		 	marker1 = new google.maps.Marker({
		 		map:map,
		 		position: gunungsinabung,
		 		title : 'Gunung Sinabung Meletus',
		 		size: new google.maps.Size(1, 32),
		 	});
			
		 	marker2 = new google.maps.Marker({
		 		map:map,
		 		position: banjirjakarta,
		 		title : 'Gunung Sinabung Meletus',
		 		size: new google.maps.Size(1, 32),
		 	});

		 	google.maps.event.addListener(marker1, 'click', function() {
		 	  //infowindow.open(map,campmarker);
			  window.location  = "bencana";
		 	  });
		 	google.maps.event.addListener(marker2, 'click', function() {
		 	  //infowindow.open(map,campmarker);
			  window.location  = "bencana";
		 	  });
		 }
		 google.maps.event.addDomListener(window, 'load', initialize);
	</script>-->
@stop