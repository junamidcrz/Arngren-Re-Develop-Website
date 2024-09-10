<!DOCTYPE html>
<head>
	<title>Arngren</title>
	<link rel="stylesheet" type="text/css" href="regpro.css">
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Train+One&family=Work+Sans:wght@100;300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap');

* {
	margin: 0;
	padding: 0;
	font-family: 'Work Sans', sans-serif;
	color: #383838;
}

.submit
{ 
  padding: 10px 50px; 
  border: none;
  color: white;
  margin-left: 100px;
  background-color: black;
}

.btn
{
	text-align: center;
	padding-bottom: 5%;
}

.reg
{
	text-align: center;
	padding-bottom: 20%;
	font-size: 13.5px;
}

.reg a:hover{
    color: blue;
	text-decoration: underline;
}


.tbl
{
	padding-left: 5%;
	padding-top: 5%;
}

.tbl2
{
	margin-left: 330px;
	margin-top: -411px;
	padding-bottom: 90px;
}

.lbl
{
 
}

.lbl2
{
	font-size: 25px;
	padding-bottom: 5%;
	padding-top: 5%;
}

#emailbox
{
	width:250px;
	font-size: 15px;
	border:none;
	background:transparent;
	border-bottom: solid 1px gray;
	outline: 0;
}

.bn
{
	padding-bottom: 10px;
	font-size: 15px;
}
.bnn
{
	padding-bottom: 30px;
	font-size: 15px;
}

#passwordbox
{
	width:250px;
	font-size: 15px;
	border:none;
	background:transparent;
	border-bottom: solid 1px gray;
	outline: 0;
}

#conpasswordbox
{
	width:250px;
	font-size: 15px;
	border:none;
	background:transparent;
	border-bottom: solid 1px gray;
	outline: 0;
}

.bt
{
	padding-bottom: 20px;
	font-size: 15px;
}

.col
{
	width:80%;
	margin-top: 5%;
	margin-left:auto;
	margin-right:auto;
	background-color: #F0F0F0;
	border-radius: 5px;
	box-shadow: 0px 10px;
	border: solid 1px;
	border-color: grey;
	opacity: 0.9;
}


.main-logo
{
    color: #4d84e2;
    font-size: 25px;
    font-weight: 800;
	font-family: 'Train One', cursive;
	cursor: pointer;
	float: top;
	margin-left: 3%;
	padding-top: 1%;
}

.imglogo
{
	width: 70px;
	height: 70px;
}

#mbn
{
	width:250px;
	font-size: 15px;
	border:none;
	background:transparent;
	border-bottom: solid 1px gray;
	outline: 0;
}

#country
{
	width:250px;
	font-size: 15px;
	border:none;
	background:beige;
	border-bottom: solid 1px gray;
	border-top: solid 1px gray;
	border-left: solid 1px gray;
	border-right: solid 1px gray;
	outline: 0;
}

#cities
{
	width:250px;
	font-size: 15px;
	border:none;
	background:beige;
	border-bottom: solid 1px gray;
	border-top: solid 1px gray;
	border-left: solid 1px gray;
	border-right: solid 1px gray;
	outline: 0;
}

.lblclr
{
	color:black;
	font-weight: bold;
	font-family: Calibri;
}

.divtwo
{
	margin-left: 595px;
	margin-top: -544px;
	padding-bottom: 150px;
	background-color:#E8E8E8;
	text-align: center;
	border-radius: 0px 5px 0px 0px;
	width:43%;
	height: 100%;
	border-top: solid 1px grey;
}

.imgreg
{
	margin-top: 90px;
}

.label
{
	margin-top: 100px;
}

body
{
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(img/bg.jpg);
}

</style>


<body>
	
<div class="col">
	<table class="tbl">
		<tr>
			<td class="bn"><p class="lblclr">Name</p><br><input type="text" name="email" id="emailbox" placeholder="First Name"></td>
		</tr>
		<tr>
			<td class="bn"><input type="text" name="email" id="emailbox" placeholder="Middle Name (optional)"></td>
		</tr>
		<tr>
			<td class="bnn"><input type="text" name="email" id="emailbox" placeholder="Surname"></td>
		</tr>
		<tr>
	        <td class="bn"><p class="lblclr">Email</p><br><input type="text" name="email" id="emailbox" placeholder="example: john@gmail.com" class="emailboxxx"></td>
	    </tr>
	    <tr>
            <td class="bn"><p class="lblclr">Password</p><br><input type="password" name="password" id="passwordbox" placeholder="********"></td>
        </tr>
        <tr>
            <td class="bn"><p class="lblclr">Confirm Password</p><br><input type="password" name="conpassword" id="conpasswordbox" placeholder="********"></td>
        </tr>
	    <tr>
	        <td class="reg"><p>Already have an account? Log In <a href="loginprocess.php">here</a></p></td>
	    </tr>
    </table>
    <table class="tbl2">
		<tr>
	        <td class="bn"><p class="lblclr">Mobile Number</p><br><input type="text" name="mbn" id="mbn" placeholder="example: 09134567821"></td>
	    </tr>
	    <tr>
            <td class="bn"><p class="lblclr">Country</p><br>
            	<select id="country" name="country">
			    <option>select country</option>
			    <option value="AF">Afghanistan</option>
			    <option value="AX">Aland Islands</option>
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
			    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
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
			    <option value="CD">Congo, Democratic Republic of the Congo</option>
			    <option value="CK">Cook Islands</option>
			    <option value="CR">Costa Rica</option>
			    <option value="CI">Cote D'Ivoire</option>
			    <option value="HR">Croatia</option>
			    <option value="CU">Cuba</option>
			    <option value="CW">Curacao</option>
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
			    <option value="GW">Guinea-Bissau</option>
			    <option value="GY">Guyana</option>
			    <option value="HT">Haiti</option>
			    <option value="HM">Heard Island and Mcdonald Islands</option>
			    <option value="VA">Holy See (Vatican City State)</option>
			    <option value="HN">Honduras</option>
			    <option value="HK">Hong Kong</option>
			    <option value="HU">Hungary</option>
			    <option value="IS">Iceland</option>
			    <option value="IN">India</option>
			    <option value="ID">Indonesia</option>
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
			    <option value="XK">Kosovo</option>
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
			    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
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
			    <option value="BL">Saint Barthelemy</option>
			    <option value="SH">Saint Helena</option>
			    <option value="KN">Saint Kitts and Nevis</option>
			    <option value="LC">Saint Lucia</option>
			    <option value="MF">Saint Martin</option>
			    <option value="PM">Saint Pierre and Miquelon</option>
			    <option value="VC">Saint Vincent and the Grenadines</option>
			    <option value="WS">Samoa</option>
			    <option value="SM">San Marino</option>
			    <option value="ST">Sao Tome and Principe</option>
			    <option value="SA">Saudi Arabia</option>
			    <option value="SN">Senegal</option>
			    <option value="RS">Serbia</option>
			    <option value="CS">Serbia and Montenegro</option>
			    <option value="SC">Seychelles</option>
			    <option value="SL">Sierra Leone</option>
			    <option value="SG">Singapore</option>
			    <option value="SX">Sint Maarten</option>
			    <option value="SK">Slovakia</option>
			    <option value="SI">Slovenia</option>
			    <option value="SB">Solomon Islands</option>
			    <option value="SO">Somalia</option>
			    <option value="ZA">South Africa</option>
			    <option value="GS">South Georgia and the South Sandwich Islands</option>
			    <option value="SS">South Sudan</option>
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
			    <option value="TL">Timor-Leste</option>
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
			    <option value="VI">Virgin Islands, U.s.</option>
			    <option value="WF">Wallis and Futuna</option>
			    <option value="EH">Western Sahara</option>
			    <option value="YE">Yemen</option>
			    <option value="ZM">Zambia</option>
			    <option value="ZW">Zimbabwe</option>
                </select>
             </td>
        </tr>
        <tr>
            <td class="bn"><p class="lblclr">City</p><br>
            	<select name="cities" id="cities">
            		<option>select city</option>
					<option value="Caloocan">Caloocan</option>
					<option value="Las Piñas">Las Piñas</option>
					<option value="Makati ">Makati </option>
					<option value="Malabon">Malabon</option>
					<option value="Mandaluyong">Mandaluyong</option>
					<option value="Manila">Manila</option>
					<option value="Marikina">Marikina</option>
					<option value="Muntinlupa">Muntinlupa</option>
					<option value="Navotas">Navotas</option>
					<option value="Parañaque">Parañaque</option>
					<option value="Pasay">Pasay</option>
					<option value="Pasig ">Pasig </option>
					<option value="Quezon City">Quezon City</option>
					<option value="San Juan">San Juan</option>
					<option value="Taguig">Taguig</option>
					<option value="Valenzuela">Valenzuela</option>
					<option value="Butuan">Butuan</option>
					<option value="Cabadbaran">Cabadbaran</option>
					<option value="Bayugan">Bayugan</option>
					<option value="Legazpi">Legazpi</option>
					<option value="Ligao">Ligao</option>
					<option value="Tabaco">Tabaco</option>
					<option value="Isabela">Isabela</option>
					<option value="Lamitan">Lamitan</option>
					<option value="Balanga">Balanga</option>
					<option value="Batangas City">Batangas City</option>
					<option value="Lipa">Lipa</option>
					<option value="Tanauan">Tanauan</option>
					<option value="Baguio">Baguio</option>
					<option value="Tagbilaran">Tagbilaran</option>
					<option value="Malaybalay">Malaybalay</option>
					<option value="Valencia">Valencia</option>
					<option value="Malolos">Malolos</option>
					<option value="Meycauayan">Meycauayan</option>
					<option value="San Jose del Monte">San Jose del Monte</option>
					<option value="Tuguegarao">Tuguegarao</option>
					<option value="Iriga">Iriga</option>
					<option value="Naga">Naga</option>
					<option value="Roxas">Roxas</option>
					<option value="Bacoor">Bacoor</option>
					<option value="Cavite City">Cavite City</option>
					<option value="Dasmariñas">Dasmariñas</option>
					<option value="Imus">Imus</option>
					<option value="Tagaytay">Tagaytay</option>
					<option value="Trece Martires">Trece Martires</option>
					<option value="Bogo">Bogo</option>
					<option value="Carcar">Carcar</option>
					<option value="Cebu City">Cebu City</option>
					<option value="Danao">Danao</option>
					<option value="Lapu-Lapu">Lapu-Lapu</option>
					<option value="Mandaue">Mandaue</option>
					<option value="Naga">Naga</option>
					<option value="Talisay">Talisay</option>
					<option value="Toledo">Toledo</option>
					<option value="Kidapawan">Kidapawan</option>
					<option value="Panabo">Panabo</option>
					<option value="Samal">Samal</option>
					<option value="Tagum">Tagum</option>
					<option value="Davao City">Davao City</option>
					<option value="Digos">Digos</option>
					<option value="Mati">Mati</option>
					<option value="Borongan">Borongan</option>
					<option value="Batac">Batac</option>	
					<option value="Laoag">Laoag</option>	
					<option value="Candon">Candon</option>	
					<option value="Vigan">Vigan</option>	
					<option value="Iloilo City">Iloilo City</option>
					<option value="Passi">Passi</option>	
					<option value="Cauayan">Cauayan</option>	
					<option value="Ilagan">Ilagan</option>	
					<option value="Santiago">Santiago</option>
					<option value="Tabuk">Tabuk</option>	
					<option value="San Fernando">San Fernando</option>	
					<option value="Biñan">Biñan</option>	
					<option value="Cabuyao">Cabuyao</option>	
					<option value="Calamba">Calamba</option>
					<option value="San Pablo">San Pablo</option>
					<option value="Santa Rosa">Santa Rosa</option>
					<option value="San Pedro">San Pedro</option>
					<option value="Iligan">Iligan</option>	
					<option value="Marawi">Marawi</option>	
					<option value="Baybay">Baybay</option>	
					<option value="Ormoc">Ormoc</option>	
					<option value="Tacloban">Tacloban</option>	
					<option value="Cotabato City">Cotabato City</option>
					<option value="Masbate City">Masbate City</option>
					<option value="Oroquieta">Oroquieta</option>
					<option value="Ozamiz">Ozamiz</option>
					<option value="Tangub">Tangub</option>
					<option value="Cagayan de Oro">Cagayan de Oro</option>
					<option value="El Salvador">El Salvador</option>
					<option value="Gingoog">Gingoog</option>
					<option value="Bacolod">Bacolod</option>
					<option value="Bago">Bago</option>
					<option value="Cadiz">Cadiz</option>
					<option value="Escalante">Escalante</option>
					<option value="Himamaylan">Himamaylan</option>
					<option value="Kabankalan">Kabankalan</option>
					<option value="La Carlota">La Carlota</option>
					<option value="Sagay">Sagay</option>
					<option value="San Carlos">San Carlos</option>
					<option value="Silay">Silay</option>
					<option value="Sipalay">Sipalay</option>
					<option value="Talisay">Talisay</option>
					<option value="Victorias">Victorias</option>
					<option value="Bais">Bais</option>
					<option value="Bayawan">Bayawan</option>
					<option value="Canlaon">Canlaon</option>
					<option value="Dumaguete">Dumaguete</option>
					<option value="Guihulngan">Guihulngan</option>
					<option value="Tanjay">Tanjay</option>
					<option value="Cabanatuan">Cabanatuan</option>
					<option value="Gapan">Gapan</option>
					<option value="Muñoz">Muñoz</option>
					<option value="Palayan">Palayan</option>
					<option value="San Jose">San Jose</option>
					<option value="Calapan	Oriental">Calapan	Oriental</option>
					<option value="Puerto Princesa">Puerto Princesa</option>
					<option value="Angeles">Angeles</option>
					<option value="Mabalacat ">Mabalacat </option>
					<option value="San Fernando">San Fernando</option>
					<option value="Alaminos">Alaminos</option>
					<option value="Dagupan">Dagupan</option>
					<option value="San Carlos">San Carlos</option>
					<option value="Urdaneta">Urdaneta</option>
					<option value="Lucena">Lucena</option>
					<option value="Tayabas">Tayabas</option>
					<option value="Antipolo">Antipolo</option>
					<option value="Calbayog">Calbayog</option>
					<option value="Catbalogan">Catbalogan</option>
					<option value="Sorsogon City">Sorsogon City</option>
					<option value="General Santos">General Santos</option>
					<option value="Koronadal">Koronadal</option>
					<option value="Maasin">Maasin</option>
					<option value="Tacurong">Tacurong</option>
					<option value="Surigao City">Surigao City</option>
					<option value="Bislig">Bislig</option>
					<option value="Tandag">Tandag</option>
					<option value="Tarlac City">Tarlac City</option>
					<option value="Olongapo">Olongapo</option>
					<option value="Dapitan">Dapitan</option>
					<option value="Dipolog">Dipolog</option>
					<option value="Pagadian">Pagadian</option>
					<option value="Zamboanga City">Zamboanga City</option>
				</select>
            </td>
        </tr>
	    <tr>
            <td class="bn"><p class="lblclr">Street</p><br><input type="password" name="conpassword" id="conpasswordbox" placeholder="example: Bernard St."></td>
        </tr>
        <tr>
            <td class="bn"><p class="lblclr">House No.</p><br><input type="password" name="conpassword" id="conpasswordbox" placeholder="example: 027"></td>
        </tr>
        <tr>
            <td class="btn"><input type="submit" id="register" class="submit" value="Register"></td>
        </tr>
    </table>
    <div class="divtwo">
    	<img src="img/logo.gif" class="imgreg">
    	<br>
    	<p class="main-logo">A R N G R E N</p>

    	<p class="label">Fill Up the form for registration</p>
    </div>
</div>
	<script src="arngren.js"></script>
</body>
</html>