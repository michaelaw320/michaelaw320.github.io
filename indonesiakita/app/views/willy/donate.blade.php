@extends("layout")
@section("css")
	<style type="text/css">
		#splash {
			width: 100%;
		}
		#donateBtn {
			width: 100%;
		}
	</style>
@stop
@section("content")
	<img id="splash" src="{{ URL::asset('img/splash-donate.jpg') }}">
	<div class="starter-template" ng-app="splashDemo" ng-controller="MainCtrl as main">
		<h1>Donasi</h1>

		<div class="panel with-nav-tabs panel-default">
		    <div class="panel-heading">
	            <ul class="nav nav-tabs">
	                <li class="active"><a href="#via_kartuKredit" data-toggle="tab">Kartu Kredit</a></li>
	                <li><a href="#via_kartuKredit" data-toggle="tab">Cimb Clicks</a></li>
	                <li><a href="#via_kartuKredit" data-toggle="tab">Mandiri Click Pay</a></li>
	                <li><a href="#via_kartuKredit" data-toggle="tab">Mandiri e-Cash</a></li>
	                <li><a href="#via_kartuKredit" data-toggle="tab">BCA Klikpay</a></li>
	                <li><a href="#via_kartuKredit" data-toggle="tab">Mandiri Debit VbV</a></li>
	                <li><a href="#via_kartuKredit" data-toggle="tab">BNI Debit Online</a></li>
	            </ul>
		    </div>
		    <div class="panel-body">
		        <div class="tab-content">
		            <div id="via_kartuKredit" class="tab-pane fade in active">
						<form class="navbar-form" role="form">
							<div class="row">
								<div class="col-sm-4 col-md-4">
									<h2>Detail Pembayaran</h2>
									<div class="Field">
										<h4>Nomor Kartu Kredit</h4>
										<div class="form-group">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="Field">
										<h4>Berlaku Hingga</h4>
										<div class="form-group">
											<select class="form-control">
												<option value="0"></option>
												<option value="01">01-Jan</option>
												<option value="02">02-Feb</option>
												<option value="03">03-Mar</option>
												<option value="04">04-Apr</option>
												<option value="05">05-Mei</option>
												<option value="06">06-Jun</option>
												<option value="07">07-Jul</option>
												<option value="08">08-Agu</option>
												<option value="09">09-Sep</option>
												<option value="10">10-Okt</option>
												<option value="11">11-Nov</option>
												<option value="12">12-Des</option>
											</select>
											Bulan
										</div>
										<div class="form-group">
											<select class="form-control">
												<option value="0"></option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option>
											</select>
											Tahun
										</div>
									</div>
									<div class="Field">
										<div class="form-group">
											<h4>CVV 3 Digit <span id="cvvhelp" class="glyphicon glyphicon-question-sign" rel="popover" data-content="CVV adalah tiga digit angka terakhir yang terdapat pada bagian belakang kartu kredit, biasanya berada di tempat tanda tangan pada kartu kredit." data-trigger="hover" data-title="Apa itu CVV?"></span></h4>
											<div class="form-group">
												<input type="password" class="form-control">
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-5 col-md-5">
									<h2>Nama dan Alamat Penagihan</h2>
									<div class="Field">
										<div class="form-group">
											<h4>Nama Depan</h4>
											<div class="form-group">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<h4>Nama Belakang</h4>
											<div class="form-group">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="Field">
										<div class="form-group">
											<h4>Negara</h4>
											<div class="form-group">
												<select class="form-control">
													<option value="AF">Afghanistan</option>
													<option value="AX">Åland Islands</option>
													<option value="AL">Albania</option>
													<option value="DZ">Algeria</option>
													<option value="AS">American Samoa</option>
													<option value="AD">Andorra</option>
													<option value="AO">Angola</option>
													<option value="AI">Anguilla</option>
													<option value="AQ">Antarctica</option>
													<option value="AG">Antigua and Barbuda</option>
													<option value="AR">Argentina</option>
													<option value="AM">Armenia</option>
													<option value="AW">Aruba</option>
													<option value="AU">Australia</option>
													<option value="AT">Austria</option>
													<option value="AZ">Azerbaijan</option>
													<option value="BS">Bahamas</option>
													<option value="BH">Bahrain</option>
													<option value="BD">Bangladesh</option>
													<option value="BB">Barbados</option>
													<option value="BY">Belarus</option>
													<option value="BE">Belgium</option>
													<option value="BZ">Belize</option>
													<option value="BJ">Benin</option>
													<option value="BM">Bermuda</option>
													<option value="BT">Bhutan</option>
													<option value="BO">Bolivia</option>
													<option value="BA">Bosnia and Herzegovina</option>
													<option value="BW">Botswana</option>
													<option value="BV">Bouvet Island</option>
													<option value="BR">Brazil</option>
													<option value="IO">British Indian Ocean Territory</option>
													<option value="BN">Brunei Darussalam</option>
													<option value="BG">Bulgaria</option>
													<option value="BF">Burkina Faso</option>
													<option value="BI">Burundi</option>
													<option value="KH">Cambodia</option>
													<option value="CM">Cameroon</option>
													<option value="CA">Canada</option>
													<option value="CV">Cape Verde</option>
													<option value="KY">Cayman Islands</option>
													<option value="CF">Central African Republic</option>
													<option value="TD">Chad</option>
													<option value="CL">Chile</option>
													<option value="CN">China</option>
													<option value="CX">Christmas Island</option>
													<option value="CC">Cocos (Keeling) Islands</option>
													<option value="CO">Colombia</option>
													<option value="KM">Comoros</option>
													<option value="CG">Congo</option>
													<option value="CD">Congo, The Democratic Republic of The</option>
													<option value="CK">Cook Islands</option>
													<option value="CR">Costa Rica</option>
													<option value="CI">Cote D'ivoire</option>
													<option value="HR">Croatia</option>
													<option value="CU">Cuba</option>
													<option value="CY">Cyprus</option>
													<option value="CZ">Czech Republic</option>
													<option value="DK">Denmark</option>
													<option value="DJ">Djibouti</option>
													<option value="DM">Dominica</option>
													<option value="DO">Dominican Republic</option>
													<option value="EC">Ecuador</option>
													<option value="EG">Egypt</option>
													<option value="SV">El Salvador</option>
													<option value="GQ">Equatorial Guinea</option>
													<option value="ER">Eritrea</option>
													<option value="EE">Estonia</option>
													<option value="ET">Ethiopia</option>
													<option value="FK">Falkland Islands (Malvinas)</option>
													<option value="FO">Faroe Islands</option>
													<option value="FJ">Fiji</option>
													<option value="FI">Finland</option>
													<option value="FR">France</option>
													<option value="GF">French Guiana</option>
													<option value="PF">French Polynesia</option>
													<option value="TF">French Southern Territories</option>
													<option value="GA">Gabon</option>
													<option value="GM">Gambia</option>
													<option value="GE">Georgia</option>
													<option value="DE">Germany</option>
													<option value="GH">Ghana</option>
													<option value="GI">Gibraltar</option>
													<option value="GR">Greece</option>
													<option value="GL">Greenland</option>
													<option value="GD">Grenada</option>
													<option value="GP">Guadeloupe</option>
													<option value="GU">Guam</option>
													<option value="GT">Guatemala</option>
													<option value="GG">Guernsey</option>
													<option value="GN">Guinea</option>
													<option value="GW">Guinea-bissau</option>
													<option value="GY">Guyana</option>
													<option value="HT">Haiti</option>
													<option value="HM">Heard Island and Mcdonald Islands</option>
													<option value="VA">Holy See (Vatican City State)</option>
													<option value="HN">Honduras</option>
													<option value="HK">Hong Kong</option>
													<option value="HU">Hungary</option>
													<option value="IS">Iceland</option>
													<option value="IN">India</option>
													<option value="ID" selected="selected">Indonesia</option>
													<option value="IR">Iran, Islamic Republic of</option>
													<option value="IQ">Iraq</option>
													<option value="IE">Ireland</option>
													<option value="IM">Isle of Man</option>
													<option value="IL">Israel</option>
													<option value="IT">Italy</option>
													<option value="JM">Jamaica</option>
													<option value="JP">Japan</option>
													<option value="JE">Jersey</option>
													<option value="JO">Jordan</option>
													<option value="KZ">Kazakhstan</option>
													<option value="KE">Kenya</option>
													<option value="KI">Kiribati</option>
													<option value="KP">Korea, Democratic People's Republic of</option>
													<option value="KR">Korea, Republic of</option>
													<option value="KW">Kuwait</option>
													<option value="KG">Kyrgyzstan</option>
													<option value="LA">Lao People's Democratic Republic</option>
													<option value="LV">Latvia</option>
													<option value="LB">Lebanon</option>
													<option value="LS">Lesotho</option>
													<option value="LR">Liberia</option>
													<option value="LY">Libyan Arab Jamahiriya</option>
													<option value="LI">Liechtenstein</option>
													<option value="LT">Lithuania</option>
													<option value="LU">Luxembourg</option>
													<option value="MO">Macao</option>
													<option value="MK">Macedonia, The Former Yugoslav Republic of</option>
													<option value="MG">Madagascar</option>
													<option value="MW">Malawi</option>
													<option value="MY">Malaysia</option>
													<option value="MV">Maldives</option>
													<option value="ML">Mali</option>
													<option value="MT">Malta</option>
													<option value="MH">Marshall Islands</option>
													<option value="MQ">Martinique</option>
													<option value="MR">Mauritania</option>
													<option value="MU">Mauritius</option>
													<option value="YT">Mayotte</option>
													<option value="MX">Mexico</option>
													<option value="FM">Micronesia, Federated States of</option>
													<option value="MD">Moldova, Republic of</option>
													<option value="MC">Monaco</option>
													<option value="MN">Mongolia</option>
													<option value="ME">Montenegro</option>
													<option value="MS">Montserrat</option>
													<option value="MA">Morocco</option>
													<option value="MZ">Mozambique</option>
													<option value="MM">Myanmar</option>
													<option value="NA">Namibia</option>
													<option value="NR">Nauru</option>
													<option value="NP">Nepal</option>
													<option value="NL">Netherlands</option>
													<option value="AN">Netherlands Antilles</option>
													<option value="NC">New Caledonia</option>
													<option value="NZ">New Zealand</option>
													<option value="NI">Nicaragua</option>
													<option value="NE">Niger</option>
													<option value="NG">Nigeria</option>
													<option value="NU">Niue</option>
													<option value="NF">Norfolk Island</option>
													<option value="MP">Northern Mariana Islands</option>
													<option value="NO">Norway</option>
													<option value="OM">Oman</option>
													<option value="PK">Pakistan</option>
													<option value="PW">Palau</option>
													<option value="PS">Palestinian Territory, Occupied</option>
													<option value="PA">Panama</option>
													<option value="PG">Papua New Guinea</option>
													<option value="PY">Paraguay</option>
													<option value="PE">Peru</option>
													<option value="PH">Philippines</option>
													<option value="PN">Pitcairn</option>
													<option value="PL">Poland</option>
													<option value="PT">Portugal</option>
													<option value="PR">Puerto Rico</option>
													<option value="QA">Qatar</option>
													<option value="RE">Reunion</option>
													<option value="RO">Romania</option>
													<option value="RU">Russian Federation</option>
													<option value="RW">Rwanda</option>
													<option value="SH">Saint Helena</option>
													<option value="KN">Saint Kitts and Nevis</option>
													<option value="LC">Saint Lucia</option>
													<option value="PM">Saint Pierre and Miquelon</option>
													<option value="VC">Saint Vincent and The Grenadines</option>
													<option value="WS">Samoa</option>
													<option value="SM">San Marino</option>
													<option value="ST">Sao Tome and Principe</option>
													<option value="SA">Saudi Arabia</option>
													<option value="SN">Senegal</option>
													<option value="RS">Serbia</option>
													<option value="SC">Seychelles</option>
													<option value="SL">Sierra Leone</option>
													<option value="SG">Singapore</option>
													<option value="SK">Slovakia</option>
													<option value="SI">Slovenia</option>
													<option value="SB">Solomon Islands</option>
													<option value="SO">Somalia</option>
													<option value="ZA">South Africa</option>
													<option value="GS">South Georgia and The South Sandwich Islands</option>
													<option value="ES">Spain</option>
													<option value="LK">Sri Lanka</option>
													<option value="SD">Sudan</option>
													<option value="SR">Suriname</option>
													<option value="SJ">Svalbard and Jan Mayen</option>
													<option value="SZ">Swaziland</option>
													<option value="SE">Sweden</option>
													<option value="CH">Switzerland</option>
													<option value="SY">Syrian Arab Republic</option>
													<option value="TW">Taiwan, Province of China</option>
													<option value="TJ">Tajikistan</option>
													<option value="TZ">Tanzania, United Republic of</option>
													<option value="TH">Thailand</option>
													<option value="TL">Timor-leste</option>
													<option value="TG">Togo</option>
													<option value="TK">Tokelau</option>
													<option value="TO">Tonga</option>
													<option value="TT">Trinidad and Tobago</option>
													<option value="TN">Tunisia</option>
													<option value="TR">Turkey</option>
													<option value="TM">Turkmenistan</option>
													<option value="TC">Turks and Caicos Islands</option>
													<option value="TV">Tuvalu</option>
													<option value="UG">Uganda</option>
													<option value="UA">Ukraine</option>
													<option value="AE">United Arab Emirates</option>
													<option value="GB">United Kingdom</option>
													<option value="US">United States</option>
													<option value="UM">United States Minor Outlying Islands</option>
													<option value="UY">Uruguay</option>
													<option value="UZ">Uzbekistan</option>
													<option value="VU">Vanuatu</option>
													<option value="VE">Venezuela</option>
													<option value="VN">Viet Nam</option>
													<option value="VG">Virgin Islands, British</option>
													<option value="VI">Virgin Islands, U.S.</option>
													<option value="WF">Wallis and Futuna</option>
													<option value="EH">Western Sahara</option>
													<option value="YE">Yemen</option>
													<option value="ZM">Zambia</option>
													<option value="ZW">Zimbabwe</option>
												</select>
											</div>
										</div>
									</div>
									<div class="Field">
										<div class="form-group">
											<h4>Kota</h4>
											<div class="form-group">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<h4>Kode Pos</h4>
											<div class="form-group">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="Field">
										<div class="form-group">
											<h4>Telepon</h4>
											<div class="form-group">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3 col-md-3">
									<h1>Finalisasi</h1>
									<div class="Field">
										<div class="form-group">
											<h3>Jumlah Donasi
												<div class="form-group">
													Rp. <input type="text" class="form-control">
												</div>
											</h3>
										</div>
									</div>
									<a id="donateBtn" class="btn btn-lg btn-success" ng-click="main.openSplash()">Donasi</a>
									<div style="padding-top: 10px;">
										<img src="{{ URL::asset('img/verisign.jpg') }}" style="width:100%;">
									</div>
								</div>
							</div>
						</form>
					</div>
					<div id="via_cimbClicks" class="tab-pane fade"></div>
					<div id="via_mandiriClickPay" class="tab-pane fade"></div>
					<div id="via_mandiriECash" class="tab-pane fade"></div>
					<div id="via_bcaKlikpay" class="tab-pane fade"></div>
					<div id="via_mandiriDebitVbV" class="tab-pane fade"></div>
					<div id="via_bniDebitOnline" class="tab-pane fade"></div>
		        </div>
		    </div>
		</div>
	</div>
@stop
@section("javascript")
	<script type="text/javascript">
		/* Fill in your javascript */
		$('#cvvhelp').popover();
	</script>
	<script type="text/javascript">
		// Module for the demo
		angular.module('splashDemo', ['ui.splash'])
		.controller('MainCtrl', ['$splash', function ($splash) {
		  this.openSplash = function () {
		    $splash.open({
		      title: 'Terima kasih telah melakukan donasi!',
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
		      '  <a class="btn btn-lg btn-outline" ng-bind="btnText || \'Ok\'" ng-click="$close()" href="http://localhost/indonesiakita/public/bencana"></a>' +
		      '</div>'
		    );
		  }
		]);
	</script>
@stop