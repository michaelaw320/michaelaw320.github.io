@extends("layout")
@section("css")
	<style type="text/css">
		#map-canvas {
			width: 100%;
			height: 548px;
		}
		.mini-map-canvas {
			width: 100%;
			height: 200px;
		}
		.panel-google-plus {
		    position: relative;
		    border-radius: 0px;
		    border: 1px solid rgb(216, 216, 216);
		    font-family: 'Roboto', sans-serif;
		}
		.panel-google-plus > .dropdown {
		    position: absolute;
		    top: 5px;
		    right: 15px;
		}
		.panel-google-plus > .dropdown > span > span {
		    font-size: 10px;   
		}
		.panel-google-plus > .dropdown > .dropdown-menu {
		    left: initial;
		    right: 0px;
		    border-radius: 2px;
		}
		.panel-google-plus > .panel-google-plus-tags {
		    position: absolute;
		    top: 35px;
		    right: -3px;
		}
		.panel-google-plus > .panel-google-plus-tags > ul {
		    list-style: none;
		    padding: 0px;
		    margin: 0px;
		}
		.panel-google-plus > .panel-google-plus-tags > ul:hover {
		    box-shadow: 0px 0px 3px rgb(0, 0, 0);   
		    box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.25);   
		}
		.panel-google-plus > .panel-google-plus-tags > ul > li {
		    display: block;
		    right: 0px;
		    width: 0px;
		    padding: 5px 0px 5px 0px;
		    background-color: rgb(245, 245, 245);
		    font-size: 12px;
		    overflow: hidden;
		}
		.panel-google-plus > .panel-google-plus-tags > ul > li::after {
		    content:"";
		    position: absolute;
		    top: 0px;
		    right: 0px;
		    height: 100%;
			border-right: 3px solid rgb(66, 127, 237);
		}
		.panel-google-plus > .panel-google-plus-tags > ul:hover > li,
		.panel-google-plus > .panel-google-plus-tags > ul > li:first-child {
		    padding: 5px 15px 5px 10px;
		    width: auto;
		    cursor: pointer;
		    margin-left: auto;
		}
		.panel-google-plus > .panel-google-plus-tags > ul:hover > li {
		    background-color: rgb(255, 255, 255);   
		}
		.panel-google-plus > .panel-google-plus-tags > ul > li:hover {
		    background-color: rgb(66, 127, 237);
		    color: rgb(255, 255, 255);
		}
		.panel-google-plus > .panel-heading,
		.panel-google-plus > .panel-footer {
		    background-color: rgb(255, 255, 255);
		    border-width: 0px; 
		}
		.panel-google-plus > .panel-heading {
		    margin-top: 20px;    
		    padding-top: 0px;
		    padding-bottom: 0px;
		}
		.panel-google-plus > .panel-heading > img { 
		    margin-right: 15px;
		}
		.panel-google-plus > .panel-heading > h3 {
		    margin: 0px;
		    font-size: 14px;
		    font-weight: 700;
		}
		.panel-google-plus > .panel-heading > h5 {
		    color: rgb(153, 153, 153);
		    font-size: 12px;
		    font-weight: 400;
		}
		.panel-google-plus > .panel-body {
		    padding-top: 10px;
		    font-size: 13px;
		    padding-bottom: 10px;
		}
		.panel-google-plus > .panel-body > .panel-google-plus-image {
		    display: block;
		    text-align: center;
		    background-color: rgb(245, 245, 245);
		    border: 1px solid rgb(217, 217, 217);
		}
		.panel-google-plus > .panel-body > .panel-google-plus-image > img {
		    max-width: 100%;
		}

		.panel-google-plus > .panel-footer {
		    padding-top: 0px;
		    padding-bottom: 0px;
		    margin-bottom: 10px;
		    font-size: 14px;
		    font-weight: 700;
		}
		.panel-google-plus > .panel-footer > .btn {
		    float: left;
		    margin-right: 8px;
		}
		.panel-google-plus > .panel-footer > .input-placeholder {
		    display: block;
		    margin-left: 98px;
		    color: rgb(153, 153, 153);
		    font-size: 12px;
		    font-weight: 400;
		    padding: 8px 6px 7px;
		    border: 1px solid rgb(217, 217, 217);
		    border-radius: 2px;
		    box-shadow: rgba(0, 0, 0, 0.0470588) 0px 1px 0px 0px;
		}
		.panel-google-plus.panel-google-plus-show-comment > .panel-footer > .input-placeholder {
		    display: none;   
		}
		.panel-google-plus > .panel-google-plus-comment {
		    display: none;
		    padding: 10px 20px 15px;
		    border-top: 1px solid rgb(229, 229, 229);
		    background-color: rgb(245, 245, 245);
		}
		.panel-google-plus.panel-google-plus-show-comment > .panel-google-plus-comment {
		    display: block;
		}
		/*.panel-google-plus > .panel-google-plus-comment > img {
		    float: left;   
		}*/
		.panel-google-plus > .panel-google-plus-comment > .panel-google-plus-textarea {
		    float: right;
		    width: calc(100% - 56px);
		}
		.panel-google-plus > .panel-google-plus-comment > .panel-google-plus-textarea > textarea {
		    display: block;
		    /*margin-left: 60px;
		    width: calc(100% - 56px);*/
		    width: 100%;
		    background-color: rgb(255, 255, 255);
		    border: 1px solid rgb(217, 217, 217);
		    box-shadow: rgba(0, 0, 0, 0.0470588) 0px 1px 0px 0px;
		    resize: vertical;
		}
		.panel-google-plus > .panel-google-plus-comment > .panel-google-plus-textarea > .btn {
		    margin-top: 10px;
		    margin-right: 8px;
		    width: 100%;
		}
		@media (min-width: 992px) {
		    .panel-google-plus > .panel-google-plus-comment > .panel-google-plus-textarea > .btn {
		        width: auto;
		    }    
		}
		.panel-google-plus .btn {
		    border-radius: 3px;   
		}
		.panel-google-plus .btn-default {
		    border: 1px solid rgb(217, 217, 217);
		    box-shadow: rgba(0, 0, 0, 0.0470588) 0px 1px 0px 0px;
		}
		.panel-google-plus .btn-default:hover, 
		.panel-google-plus .btn-default:focus, 
		.panel-google-plus .btn-default:active {
		    background-color: rgb(255, 255, 255);
		    border-color: rgb(0, 0, 0);    
		}
	</style>
@stop
@section("content")
	<div class="starter-template">
		<div class="row">
			<div class="[ col-xs-12 col-sm-6 ]">
				<div class="[ panel panel-default ] panel-google-plus">
	                <div class="panel-footer">
	                	<h3>Status : <select class="form-control" style="display: inline; width:auto;"><option>Sibuk</option><option>Siap Sedia</option></select></h3>
	                </div>
	            </div>
	            <div class="[ panel panel-default ] panel-google-plus">
	                <div class="panel-body">
	                	<textarea style="resize: none; width: 100%; border: none;" placeholder="Tuliskan notifikasi"></textarea>
	                </div>
	                <div class="panel-footer">
	                    <button type="button" class="[ btn btn-default btn-xs ] map">
	                        <span class="glyphicon glyphicon-map-marker"></span>(Posisi sekarang)
	                    </button>
	                </div>
	                <div class="panel-google-plus-comment">
	                	<div id="map-dummy-1" class="mini-map-canvas"></div>
	                </div>
	            </div>
	            <div class="[ panel panel-default ] panel-google-plus">
	                <div class="panel-heading">
	                    <h3>Adiguna Sucipto</h3>
	                    <h5><span>Jun 27, 2014</span></h5>
	                </div>
	                <div class="panel-body">
	                    <p>Saya membutuhkan pertolongan pertama secepatnya sekarang juga. Siapapun yang bisa membantu tolong ke sini sesegara mungkin.</p>
	                </div>
	                <div class="panel-footer">
	                    <button type="button" class="[ btn btn-default btn-xs ] map">
	                        <span class="glyphicon glyphicon-map-marker"></span>
	                    </button>
	                </div>
	                <div class="panel-google-plus-comment">
	                	<div id="map-dummy-2" class="mini-map-canvas"></div>
	                </div>
	            </div>
	            <div class="[ panel panel-default ] panel-google-plus">
	                <div class="panel-heading">
	                    <h3>Adiguna Sucipto</h3>
	                    <h5><span>Jun 28, 2014</span></h5>
	                </div>
	                <div class="panel-body">
	                    <p>Saya membutuhkan 3 orang untuk membantu saya dalam mengangkat orang yang tertimpa batu.</p>
	                </div>
	                <div class="panel-footer">
	                    <button type="button" class="[ btn btn-default btn-xs ] map">
	                        <span class="glyphicon glyphicon-map-marker"></span>
	                    </button>
	                </div>
	                <div class="panel-google-plus-comment">
	                	<div id="map-dummy-3" class="mini-map-canvas"></div>
	                </div>
	            </div>
	        </div>
			<div class="[ col-xs-12 col-sm-6 ]">
	            <div id="map-canvas"></div>
	        </div>
		</div>
	</div>
@stop
@section("javascript")
	<script type="text/javascript">
		$("textarea").autosize();
	   $('.panel-google-plus > .panel-footer > .map, .panel-google-plus > .panel-google-plus-comment > .panel-google-plus-textarea > button[type="reset"]').on('click', function(event) {
	        var $panel = $(this).closest('.panel-google-plus');
	            $comment = $panel.find('.panel-google-plus-comment');
	        $panel.toggleClass('panel-google-plus-show-comment');
	   });
		$('textarea').keyup(function(e){
			if(e.keyCode == 13)
			{
				var text = $(this).val();
				$(this).val("");
				var panelgoogleplusDiv = document.createElement("div");
				$(panelgoogleplusDiv).addClass("[ panel panel-default ] panel-google-plus");

				var panelheadingDiv = document.createElement("div");
				$(panelheadingDiv).addClass("panel-heading");
				$(panelheadingDiv).append("<h3>"+"Kevin Huang"+"</h3>");
				$(panelheadingDiv).append("<h5><span>"+(new Date()).toUTCString()+"</span></h5>");
				
				var panelbodyDiv = document.createElement("div");
				$(panelbodyDiv).addClass("panel-body");
				$(panelbodyDiv).append("<p>"+text+"</p>");
				
				var panelfooterDiv = document.createElement("div");
				$(panelfooterDiv).addClass("panel-footer");
				$(panelfooterDiv).append('<button type="button" class="[ btn btn-default btn-xs ] map"><span class="glyphicon glyphicon-map-marker"></span></button>');
				
				var panelcommentDiv = document.createElement("div");
				$(panelcommentDiv).addClass("panel-google-plus-comment");
				$(panelcommentDiv).append('<div id="map-dummy-3" class="mini-map-canvas"></div>');

				$(panelgoogleplusDiv).append($(panelheadingDiv));
				$(panelgoogleplusDiv).append($(panelbodyDiv));
				$(panelgoogleplusDiv).append($(panelfooterDiv));
				$(panelgoogleplusDiv).append($(panelcommentDiv));
				var $panel = $(this).closest('.panel-google-plus');
				$(panelgoogleplusDiv).insertAfter($panel);
				console.log("gila");
			}
		});
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?region=GB"></script>
	<script type="text/javascript">
		/* Fill in your javascript */
		var stockholm = new google.maps.LatLng(-6.8815501,107.604016);
		var mapOptions = {
			zoom: 20,
			center: stockholm
		};
		//var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
		var mapdummy = new google.maps.Map(document.getElementById('map-dummy-1'),mapOptions);
		var mapdummy2 = new google.maps.Map(document.getElementById('map-dummy-2'),mapOptions);
		var mapdummy3 = new google.maps.Map(document.getElementById('map-dummy-3'),mapOptions);
	</script>
	<script type="text/javascript">
		 var stockholm = new google.maps.LatLng(-7.45559,108.88026);
		 var locuser1 = new google.maps.LatLng(-7.45669,108.87936);
		 var locuser2 = new google.maps.LatLng(-7.45779,108.87246);
		 var locuser3 = new google.maps.LatLng(-7.45889,108.87536);
		 var locuser4 = new google.maps.LatLng(-7.45999,108.88426);
		 var map;

		 function initialize() {
		 	var mapOptions = {
		 		zoom: 15,
		 		center: stockholm
		 	};
		 	var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
		 	usermarker1 = new google.maps.Marker({
		 		map:map,
		 		position: locuser1,
		 		title : 'Jill : Kondisi Sibuk',
		 		icon : '{{ URL::asset('img/idleuser.png') }}',
		 		size: new google.maps.Size(1, 32),
		 	});
		 	usermarker2 = new google.maps.Marker({
		 		map:map,
		 		position: locuser2,
		 		title : 'Stephen : Siap sedia',
		 		icon : '{{ URL::asset('img/busyuser.png') }}',
		 		size: new google.maps.Size(1, 32),
		 	});
		 	usermarker3 = new google.maps.Marker({
		 		map:map,
		 		position: locuser3,
		 		title : 'Jack : Siap sedia',
		 		icon : '{{ URL::asset('img/idleuser.png') }}',
		 		size: new google.maps.Size(1, 32),
		 	});
		 	usermarker4 = new google.maps.Marker({
		 		map:map,
		 		position: locuser4,
		 		title : 'Eve : Sibuk',
		 		icon : '{{ URL::asset('img/busyuser.png') }}',
		 		size: new google.maps.Size(1, 32),
		 	});
		 	var infowindow1 = new google.maps.InfoWindow({
		 	  content:"Jill<br>Kondisi Sibuk<br>"
		 	  });
			var infowindow2 = new google.maps.InfoWindow({
			  content:"Stephen<br>Kondisi Siap Sedia<br>"
			  });
			var infowindow3 = new google.maps.InfoWindow({
			  content:"Jack<br>Kondisi Siap Sedia<br>"
			  });
			var infowindow4 = new google.maps.InfoWindow({
			  content:"Eve<br>Kondisi Sibuk<br>"
			  });

		 	google.maps.event.addListener(usermarker1, 'click', function() {
		 	  infowindow1.open(map,usermarker1);
			  infowindow2.close();
			  infowindow3.close();
			  infowindow4.close();
		 	  });
			google.maps.event.addListener(usermarker2, 'click', function() {
		 	  infowindow2.open(map,usermarker2);
			  infowindow1.close();
			  infowindow3.close();
			  infowindow4.close();
		 	  });
			google.maps.event.addListener(usermarker3, 'click', function() {
		 	  infowindow3.open(map,usermarker3);
			  infowindow2.close();
			  infowindow1.close();
			  infowindow4.close();
		 	  });
			google.maps.event.addListener(usermarker4, 'click', function() {
		 	  infowindow4.open(map,usermarker4);
			  infowindow2.close();
			  infowindow3.close();
			  infowindow1.close();
		 	  });
		 }
		 google.maps.event.addDomListener(window, 'load', initialize);
		
		// var x = document.getElementById("location");
		// function getLocation() {
		// 	if (navigator.geolocation) {
		// 	if (navigator.geolocation) {
		// 		navigator.geolocation.getCurrentPosition(showPosition);
		// 	} else {
		// 		x.innerHTML = "Geolocation is not supported by this browser.";
		// 	}
		// }
		// function showPosition(position) {
		// 	x.innerHTML = "Latitude: " + position.coords.latitude + 
		// 	"<br>Longitude: " + position.coords.longitude; 
		// }
	</script>
@stop