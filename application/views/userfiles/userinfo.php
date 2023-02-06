<div class="ReservationPages RezvPaxEntry PassengerInfo MobileIndex">
	
<form  method="POST" action="<?php echo base_url()?>install/userinfo/confirm" enctype="application/x-www-form-urlencoded">
<input type="text" name="datas" id="datas" value="<?php echo  $session ;?>"/>
<span id="passengerForm">
<?php include 'navigation.php';?>  
  
                <div class="container mainContainer">
                    <div class="row">
                        <div class="passenger-info-left-side col-lg-9 col-md-12 col-sm-12 col-xs-12">
                            
                            <div class="cont passenger__information">
                                <div class="col-lg-12 col-sm-12 col-md-12  pass__info__header">
                                    <h3 class="ssr-selection pass__info__title">
                     					<span class="icon-passInfo pass_info__icon"></span><span class="m-arrow arrow__icon">  <i class="flaticon-avatar avatar__icon"></i></span>
                        				<span class="blue-bar pass__info__bar">Passenger Information</span>
                        			</h3>
                                    <hr class="carved2" />
                                </div>
                                <div class="clearfix"></div>
                                <div class="tab-container pass__tab__container">
                                    <div id="myTabContent" class="tab-content rezvpaxentry-tab-content passenger__form">
                                        <!-- Adults -->
                                            <div class="tab-pane  active in" id="tabPax1" data-pax-type="ADLT">
                                                <div class="inline-form">
                                                        <div class="active list pax-inline-label">
                                                            <span class="ptabnum ptabnum passenger__count"> 1. Passenger:</span><span class="ptabtype passenger__type"> Adult</span>
                                                            
                                                        </div>
														<div id="pax-Info-1" class="adultContentDiv pass__adult__form">
														<span class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-4 pass__title">
	      <label for="gender1">Title *</label>
	      <div class="input-group input-group-select-down"><select id="gender1" name="gender1" class="form-control no-selectize" size="1">	<option value="">Select</option>
	<option value="M">Mr.</option>
	<option value="F">Mrs./Miss</option>
</select>
	      </div></span>
	  
	  <div class="form-group col-lg-3 col-md-4 col-sm-4 col-xs-8 pass__name">
	      <label for="name1">Name *</label><input id="name1" type="text" name="name1" autocomplete="off" class="form-control passenger-control-name" maxlength="24" />
		
		  <div class="clearfix"></div>
	  </div>
	  
	  <div class="form-group col-lg-3 col-md-5 col-sm-5 col-xs-12 pass__surname">
	      <label for="surname1">Surname *</label><input id="surname1" type="text" name="surname1" autocomplete="off" class="form-control passenger-control-surname" maxlength="24" />
	      <div class="clearfix"></div>
	  </div>
	  <div class="clearfix"></div>
	  <span id="nationalityGroup1" class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12 pass__nationality">
        
		<label for="country">Nationality</label>
        <div class="input-group input-group-select-down">
	<select id="nationality1" name="nationality1" class="form-control search" size="1" onchange="mojarra.ab(this,event,'change')">
	<option value="">Select</option>
	
	<option value="AF">Afghanistan (‫افغانستان‬‎)</option>
	<option value="AL">Albania (Shqipëri)</option>
	<option value="DZ">Algeria (‫الجزائر‬‎)</option>
	<option value="AS">American Samoa</option>
	<option value="AD">Andorra</option>
	<option value="AO">Angola</option>
	<option value="AI">Anguilla</option>
	<option value="AG">Antigua and Barbuda</option>
	<option value="AR">Argentina</option>
	<option value="AM">Armenia (Հայաստան)</option>
	<option value="AW">Aruba</option>
	<option value="AU">Australia</option>
	<option value="AT">Austria (Österreich)</option>
	<option value="AZ">Azerbaijan (Azərbaycan)</option>
	<option value="BS">Bahamas</option>
	<option value="BH">Bahrain (‫البحرين‬‎)</option>
	<option value="BD">Bangladesh (বাংলাদেশ)</option>
	<option value="BB">Barbados</option>
	<option value="BY">Belarus (Беларусь)</option>
	<option value="BE">Belgium (België)</option>
	<option value="BZ">Belize</option>
	<option value="BJ">Benin (Bénin)</option>
	<option value="BM">Bermuda</option>
	<option value="BT">Bhutan (འབྲུག)</option>
	<option value="BO">Bolivia</option>
	<option value="BA">Bosnia and Herzegovina (Босна и Херцеговина)</option>
	<option value="BW">Botswana</option>
	<option value="BR">Brazil (Brasil)</option>
	<option value="IO">British Indian Ocean Territory</option>
	<option value="VG">British Virgin Islands</option>
	<option value="BN">Brunei</option>
	<option value="BG">Bulgaria (България)</option>
	<option value="BF">Burkina Faso</option>
	<option value="BI">Burundi (Uburundi)</option>
	<option value="KH">Cambodia (កម្ពុជា)</option>
	<option value="CM">Cameroon (Cameroun)</option>
	<option value="CA">Canada</option>
	<option value="CV">Cape Verde (Kabu Verdi)</option>
	<option value="BQ">Caribbean Netherlands</option>
	<option value="KY">Cayman Islands</option>
	<option value="CF">Central African Republic (République centrafricaine)</option>
	<option value="TD">Chad (Tchad)</option>
	<option value="CL">Chile</option>
	<option value="CN">China (中国)</option>
	<option value="CO">Colombia</option>
	<option value="KM">Comoros (‫جزر القمر‬‎)</option>
	<option value="CD">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</option>
	<option value="CG">Congo (Republic) (Congo-Brazzaville)</option>
	<option value="CK">Cook Islands</option>
	<option value="CR">Costa Rica</option>
	<option value="CI">Côte d’Ivoire</option>
	<option value="HR">Croatia (Hrvatska)</option>
	<option value="CU">Cuba</option>
	<option value="CW">Curaçao</option>
	<option value="CY">Cyprus (Κύπρος)</option>
	<option value="CZ">Czech Republic (Česká republika)</option>
	<option value="DK">Denmark (Danmark)</option>
	<option value="DJ">Djibouti</option>
	<option value="DM">Dominica</option>
	<option value="DO">Dominican Republic (República Dominicana)</option>
	<option value="EC">Ecuador</option>
	<option value="EG">Egypt (‫مصر‬‎)</option>
	<option value="SV">El Salvador</option>
	<option value="GQ">Equatorial Guinea (Guinea Ecuatorial)</option>
	<option value="ER">Eritrea</option>
	<option value="EE">Estonia (Eesti)</option>
	<option value="ET">Ethiopia</option>
	<option value="FK">Falkland Islands (Islas Malvinas)</option>
	<option value="FO">Faroe Islands (Føroyar)</option>
	<option value="FJ">Fiji</option>
	<option value="FI">Finland (Suomi)</option>
	<option value="FR">France</option>
	<option value="GF">French Guiana (Guyane française)</option>
	<option value="PF">French Polynesia (Polynésie française)</option>
	<option value="GA">Gabon</option>
	<option value="GM">Gambia</option>
	<option value="GE">Georgia (საქართველო)</option>
	<option value="DE">Germany (Deutschland)</option>
	<option value="GH">Ghana (Gaana)</option>
	<option value="GI">Gibraltar</option>
	<option value="GR">Greece (Ελλάδα)</option>
	<option value="GL">Greenland (Kalaallit Nunaat)</option>
	<option value="GD">Grenada</option>
	<option value="GP">Guadeloupe</option>
	<option value="GU">Guam</option>
	<option value="GT">Guatemala</option>
	<option value="GN">Guinea (Guinée)</option>
	<option value="GW">Guinea-Bissau (Guiné Bissau)</option>
	<option value="GY">Guyana</option>
	<option value="HT">Haiti</option>
	<option value="HN">Honduras</option>
	<option value="HK">Hong Kong (香港)</option>
	<option value="HU">Hungary (Magyarország)</option>
	<option value="IS">Iceland (Ísland)</option>
	<option value="IN">India (भारत)</option>
	<option value="ID">Indonesia</option>
	<option value="IR">Iran (‫ایران‬‎)</option>
	<option value="IQ">Iraq (‫العراق‬‎)</option>
	<option value="IE">Ireland</option>
	<option value="IL">Israel (‫ישראל‬‎)</option>
	<option value="IT">Italy (Italia)</option>
	<option value="JM">Jamaica</option>
	<option value="JP">Japan (日本)</option>
	<option value="JO">Jordan (‫الأردن‬‎)</option>
	<option value="KZ">Kazakhstan (Казахстан)</option>
	<option value="KE">Kenya</option>
	<option value="KI">Kiribati</option>
	<option value="CP">KKTC</option>
	<option value="KW">Kuwait (‫الكويت‬‎)</option>
	<option value="KG">Kyrgyzstan (Кыргызстан)</option>
	<option value="LA">Laos (ລາວ)</option>
	<option value="LV">Latvia (Latvija)</option>
	<option value="LB">Lebanon (‫لبنان‬‎)</option>
	<option value="LS">Lesotho</option>
	<option value="LR">Liberia</option>
	<option value="LY">Libya (‫ليبيا‬‎)</option>
	<option value="LI">Liechtenstein</option>
	<option value="LT">Lithuania (Lietuva)</option>
	<option value="LU">Luxembourg</option>
	<option value="MO">Macau (澳門)</option>
	<option value="MK">Macedonia (FYROM) (Македонија)</option>
	<option value="MG">Madagascar (Madagasikara)</option>
	<option value="MW">Malawi</option>
	<option value="MY">Malaysia</option>
	<option value="MV">Maldives</option>
	<option value="ML">Mali</option>
	<option value="MT">Malta</option>
	<option value="MH">Marshall Islands</option>
	<option value="MQ">Martinique</option>
	<option value="MR">Mauritania (‫موريتانيا‬‎)</option>
	<option value="MU">Mauritius (Moris)</option>
	<option value="MX">Mexico (México)</option>
	<option value="FM">Micronesia</option>
	<option value="MD">Moldova (Republica Moldova)</option>
	<option value="MC">Monaco</option>
	<option value="MN">Mongolia (Монгол)</option>
	<option value="ME">Montenegro (Crna Gora)</option>
	<option value="MS">Montserrat</option>
	<option value="MA">Morocco (‫المغرب‬‎)</option>
	<option value="MZ">Mozambique (Moçambique)</option>
	<option value="MM">Myanmar (Burma) (မြန်မာ)</option>
	<option value="NA">Namibia (Namibië)</option>
	<option value="NR">Nauru</option>
	<option value="NP">Nepal (नेपाल)</option>
	<option value="NL">Netherlands (Nederland)</option>
	<option value="NC">New Caledonia (Nouvelle-Calédonie)</option>
	<option value="NZ">New Zealand</option>
	<option value="NI">Nicaragua</option>
	<option value="NE">Niger (Nijar)</option>
	<option value="NG">Nigeria</option>
	<option value="NU">Niue</option>
	<option value="NF">Norfolk Island</option>
	<option value="KP">North Korea (조선 민주주의 인민 공화국)</option>
	<option value="MP">Northern Mariana Islands</option>
	<option value="NO">Norway (Norge)</option>
	<option value="OM">Oman (‫عُمان‬‎)</option>
	<option value="PK">Pakistan (‫پاکستان‬‎)</option>
	<option value="PW">Palau</option>
	<option value="PS">Palestine (‫فلسطين‬‎)</option>
	<option value="PA">Panama (Panamá)</option>
	<option value="PG">Papua New Guinea</option>
	<option value="PY">Paraguay</option>
	<option value="PE">Peru (Perú)</option>
	<option value="PH">Philippines</option>
	<option value="PL">Poland (Polska)</option>
	<option value="PT">Portugal</option>
	<option value="PR">Puerto Rico</option>
	<option value="QA">Qatar (‫قطر‬‎)</option>
	<option value="RE">Réunion (La Réunion)</option>
	<option value="RO">Romania (România)</option>
	<option value="RU">Russia (Россия)</option>
	<option value="RW">Rwanda</option>
	<option value="BL">Saint Barthélemy (Saint-Barthélemy)</option>
	<option value="SH">Saint Helena</option>
	<option value="KN">Saint Kitts and Nevis</option>
	<option value="LC">Saint Lucia</option>
	<option value="MF">Saint Martin (Saint-Martin (partie française))</option>
	<option value="PM">Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</option>
	<option value="VC">Saint Vincent and the Grenadines</option>
	<option value="WS">Samoa</option>
	<option value="SM">San Marino</option>
	<option value="ST">São Tomé and Príncipe (São Tomé e Príncipe)</option>
	<option value="SA">Saudi Arabia (‫المملكة العربية السعودية‬‎)</option>
	<option value="SN">Senegal (Sénégal)</option>
	<option value="RS">Serbia (Србија)</option>
	<option value="SC">Seychelles</option>
	<option value="SL">Sierra Leone</option>
	<option value="SG">Singapore</option>
	<option value="SX">Sint Maarten</option>
	<option value="SK">Slovakia (Slovensko)</option>
	<option value="SI">Slovenia (Slovenija)</option>
	<option value="SB">Solomon Islands</option>
	<option value="SO">Somalia (Soomaaliya)</option>
	<option value="ZA">South Africa</option>
	<option value="KR">South Korea (대한민국)</option>
	<option value="SS">South Sudan (‫جنوب السودان‬‎)</option>
	<option value="ES">Spain (España)</option>
	<option value="LK">Sri Lanka (ශ්‍රී ලංකාව)</option>
	<option value="SD">Sudan (‫السودان‬‎)</option>
	<option value="SR">Suriname</option>
	<option value="SZ">Swaziland</option>
	<option value="SE">Sweden (Sverige)</option>
	<option value="CH">Switzerland (Schweiz)</option>
	<option value="SY">Syria (‫سوريا‬‎)</option>
	<option value="TW">Taiwan (台灣)</option>
	<option value="TJ">Tajikistan</option>
	<option value="TZ">Tanzania</option>
	<option value="TH">Thailand (ไทย)</option>
	<option value="TL">Timor-Leste</option>
	<option value="TG">Togo</option>
	<option value="TK">Tokelau</option>
	<option value="TO">Tonga</option>
	<option value="TT">Trinidad and Tobago</option>
	<option value="TN">Tunisia (‫تونس‬‎)</option>
	<option value="TR">Turkey (Türkiye)</option>
	<option value="TM">Turkmenistan</option>
	<option value="TC">Turks and Caicos Islands</option>
	<option value="TV">Tuvalu</option>
	<option value="VI">U.S. Virgin Islands</option>
	<option value="UA">Ukraine (Україна)</option>
	<option value="AE">United Arab Emirates (‫الإمارات العربية المتحدة‬‎)</option>
	<option value="GB">United Kingdom</option>
	<option value="US">United States</option>
	<option value="UG">Uganda</option>
	<option value="UY">Uruguay</option>
	<option value="UZ">Uzbekistan (Oʻzbekiston)</option>
	<option value="VU">Vanuatu</option>
	<option value="VA">Vatican City (Città del Vaticano)</option>
	<option value="VE">Venezuela</option>
	<option value="VN">Vietnam (Việt Nam)</option>
	<option value="WF">Wallis and Futuna</option>
	<option value="YE">Yemen (‫اليمن‬‎)</option>
	<option value="ZM">Zambia</option>
	<option value="ZW">Zimbabwe</option>
</select>
        </div></span>
    <div class="clearfix"></div><div id="fixedbdateDiv0" class="pass__birthday"><input id="bday_hidden_1" type="hidden" name="bday_hidden_1" format="dd/MM/yyyy" />
            <div class="form-group col-lg-2 col-md-3 col-sm-2 col-xs-4 pass__birthday__day">
				<label for="bday1">Date of Birth</label>
                <div class="input-group input-group-select-down"><select id="bday_day_1" name="bday_day_1" class="form-control search no-selectize" size="1">	<option value="">Day</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
</select>
                </div>
            </div>
            <div class="form-group col-lg-2 col-md-3 col-sm-3 col-xs-4 pass__birthday__month">
                <label class="not-visible">.</label>
                <div class="input-group input-group-select-down">
		<select id="bday_month_1" name="bday_month_1" class="form-control search no-selectize" size="1">	<option value="">Month</option>
	<option value="1">January</option>
	<option value="2">February</option>
	<option value="3">March</option>
	<option value="4">April</option>
	<option value="5">May</option>
	<option value="6">June</option>
	<option value="7">July</option>
	<option value="8">August</option>
	<option value="9">September</option>
	<option value="10">October</option>
	<option value="11">November</option>
	<option value="12">December</option>
</select>
                </div>
            </div>
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-4 pass__birthday__year">
                <label class="not-visible">.</label>
                <div class="input-group input-group-select-down"><select id="bday_year_1" name="bday_year_1" class="form-control search no-selectize" size="1">	<option value="">Year</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
	<option value="1949">1949</option>
	<option value="1948">1948</option>
	<option value="1947">1947</option>
	<option value="1946">1946</option>
	<option value="1945">1945</option>
	<option value="1944">1944</option>
	<option value="1943">1943</option>
	<option value="1942">1942</option>
	<option value="1941">1941</option>
	<option value="1940">1940</option>
	<option value="1939">1939</option>
	<option value="1938">1938</option>
	<option value="1937">1937</option>
	<option value="1936">1936</option>
	<option value="1935">1935</option>
	<option value="1934">1934</option>
	<option value="1933">1933</option>
	<option value="1932">1932</option>
	<option value="1931">1931</option>
	<option value="1930">1930</option>
	<option value="1929">1929</option>
	<option value="1928">1928</option>
	<option value="1927">1927</option>
	<option value="1926">1926</option>
	<option value="1925">1925</option>
	<option value="1924">1924</option>
	<option value="1923">1923</option>
	<option value="1922">1922</option>
	<option value="1921">1921</option>
	<option value="1920">1920</option>
	<option value="1919">1919</option>
	<option value="1918">1918</option>
	<option value="1917">1917</option>
	<option value="1916">1916</option>
	<option value="1915">1915</option>
	<option value="1914">1914</option>
	<option value="1913">1913</option>
	<option value="1912">1912</option>
	<option value="1911">1911</option>
	<option value="1910">1910</option>
	<option value="1909">1909</option>
	<option value="1908">1908</option>
	<option value="1907">1907</option>
	<option value="1906">1906</option>
	<option value="1905">1905</option>
	<option value="1904">1904</option>
	<option value="1903">1903</option>
	<option value="1902">1902</option>
	<option value="1901">1901</option>
	<option value="1900">1900</option>
	<option value="1899">1899</option>
	<option value="1898">1898</option>
	<option value="1897">1897</option>
	<option value="1896">1896</option>
	<option value="1895">1895</option>
	<option value="1894">1894</option>
	<option value="1893">1893</option>
	<option value="1892">1892</option>
	<option value="1891">1891</option>
	<option value="1890">1890</option>
	<option value="1889">1889</option>
	<option value="1888">1888</option>
	<option value="1887">1887</option>
	<option value="1886">1886</option>
	<option value="1885">1885</option>
	<option value="1884">1884</option>
	<option value="1883">1883</option>
	<option value="1882">1882</option>
	<option value="1881">1881</option>
	<option value="1880">1880</option>
	<option value="1879">1879</option>
	<option value="1878">1878</option>
	<option value="1877">1877</option>
	<option value="1876">1876</option>
	<option value="1875">1875</option>
	<option value="1874">1874</option>
	<option value="1873">1873</option>
	<option value="1872">1872</option>
	<option value="1871">1871</option>
	<option value="1870">1870</option>
</select>
                </div>
            </div></div>
    <div class="clearfix"></div><span id="docIssueCountryGroup1"></span><span id="fixednationalIDADLT0"><div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12 pass__nat__id">
			<label for="natId1">
				National ID  Number
			</label><input id="natId1" type="text" name="natId1" autocomplete="off" class="form-control" maxlength="11" /></div></span><span id="passportNumberGroup1"></span><span id="passportExpiryGroup1"></span><span class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12 pass__county">
        <label for="countryofresidence">Country of Residence</label>
        <div class="input-group input-group-select-down">
	<select id="countryofresidence1" name="countryofresidence1" class="form-control search selectized" size="1">	<option value="">Select</option>
	
	<option value="AF">Afghanistan (‫افغانستان‬‎)</option>
	<option value="AL">Albania (Shqipëri)</option>
	<option value="DZ">Algeria (‫الجزائر‬‎)</option>
	<option value="AS">American Samoa</option>
	<option value="AD">Andorra</option>
	<option value="AO">Angola</option>
	<option value="AI">Anguilla</option>
	<option value="AG">Antigua and Barbuda</option>
	<option value="AR">Argentina</option>
	<option value="AM">Armenia (Հայաստան)</option>
	<option value="AW">Aruba</option>
	<option value="AU">Australia</option>
	<option value="AT">Austria (Österreich)</option>
	<option value="AZ">Azerbaijan (Azərbaycan)</option>
	<option value="BS">Bahamas</option>
	<option value="BH">Bahrain (‫البحرين‬‎)</option>
	<option value="BD">Bangladesh (বাংলাদেশ)</option>
	<option value="BB">Barbados</option>
	<option value="BY">Belarus (Беларусь)</option>
	<option value="BE">Belgium (België)</option>
	<option value="BZ">Belize</option>
	<option value="BJ">Benin (Bénin)</option>
	<option value="BM">Bermuda</option>
	<option value="BT">Bhutan (འབྲུག)</option>
	<option value="BO">Bolivia</option>
	<option value="BA">Bosnia and Herzegovina (Босна и Херцеговина)</option>
	<option value="BW">Botswana</option>
	<option value="BR">Brazil (Brasil)</option>
	<option value="IO">British Indian Ocean Territory</option>
	<option value="VG">British Virgin Islands</option>
	<option value="BN">Brunei</option>
	<option value="BG">Bulgaria (България)</option>
	<option value="BF">Burkina Faso</option>
	<option value="BI">Burundi (Uburundi)</option>
	<option value="KH">Cambodia (កម្ពុជា)</option>
	<option value="CM">Cameroon (Cameroun)</option>
	<option value="CA">Canada</option>
	<option value="CV">Cape Verde (Kabu Verdi)</option>
	<option value="BQ">Caribbean Netherlands</option>
	<option value="KY">Cayman Islands</option>
	<option value="CF">Central African Republic (République centrafricaine)</option>
	<option value="TD">Chad (Tchad)</option>
	<option value="CL">Chile</option>
	<option value="CN">China (中国)</option>
	<option value="CO">Colombia</option>
	<option value="KM">Comoros (‫جزر القمر‬‎)</option>
	<option value="CD">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</option>
	<option value="CG">Congo (Republic) (Congo-Brazzaville)</option>
	<option value="CK">Cook Islands</option>
	<option value="CR">Costa Rica</option>
	<option value="CI">Côte d’Ivoire</option>
	<option value="HR">Croatia (Hrvatska)</option>
	<option value="CU">Cuba</option>
	<option value="CW">Curaçao</option>
	<option value="CY">Cyprus (Κύπρος)</option>
	<option value="CZ">Czech Republic (Česká republika)</option>
	<option value="DK">Denmark (Danmark)</option>
	<option value="DJ">Djibouti</option>
	<option value="DM">Dominica</option>
	<option value="DO">Dominican Republic (República Dominicana)</option>
	<option value="EC">Ecuador</option>
	<option value="EG">Egypt (‫مصر‬‎)</option>
	<option value="SV">El Salvador</option>
	<option value="GQ">Equatorial Guinea (Guinea Ecuatorial)</option>
	<option value="ER">Eritrea</option>
	<option value="EE">Estonia (Eesti)</option>
	<option value="ET">Ethiopia</option>
	<option value="FK">Falkland Islands (Islas Malvinas)</option>
	<option value="FO">Faroe Islands (Føroyar)</option>
	<option value="FJ">Fiji</option>
	<option value="FI">Finland (Suomi)</option>
	<option value="FR">France</option>
	<option value="GF">French Guiana (Guyane française)</option>
	<option value="PF">French Polynesia (Polynésie française)</option>
	<option value="GA">Gabon</option>
	<option value="GM">Gambia</option>
	<option value="GE">Georgia (საქართველო)</option>
	<option value="DE">Germany (Deutschland)</option>
	<option value="GH">Ghana (Gaana)</option>
	<option value="GI">Gibraltar</option>
	<option value="GR">Greece (Ελλάδα)</option>
	<option value="GL">Greenland (Kalaallit Nunaat)</option>
	<option value="GD">Grenada</option>
	<option value="GP">Guadeloupe</option>
	<option value="GU">Guam</option>
	<option value="GT">Guatemala</option>
	<option value="GN">Guinea (Guinée)</option>
	<option value="GW">Guinea-Bissau (Guiné Bissau)</option>
	<option value="GY">Guyana</option>
	<option value="HT">Haiti</option>
	<option value="HN">Honduras</option>
	<option value="HK">Hong Kong (香港)</option>
	<option value="HU">Hungary (Magyarország)</option>
	<option value="IS">Iceland (Ísland)</option>
	<option value="IN">India (भारत)</option>
	<option value="ID">Indonesia</option>
	<option value="IR">Iran (‫ایران‬‎)</option>
	<option value="IQ">Iraq (‫العراق‬‎)</option>
	<option value="IE">Ireland</option>
	<option value="IL">Israel (‫ישראל‬‎)</option>
	<option value="IT">Italy (Italia)</option>
	<option value="JM">Jamaica</option>
	<option value="JP">Japan (日本)</option>
	<option value="JO">Jordan (‫الأردن‬‎)</option>
	<option value="KZ">Kazakhstan (Казахстан)</option>
	<option value="KE">Kenya</option>
	<option value="KI">Kiribati</option>
	<option value="CP">KKTC</option>
	<option value="KW">Kuwait (‫الكويت‬‎)</option>
	<option value="KG">Kyrgyzstan (Кыргызстан)</option>
	<option value="LA">Laos (ລາວ)</option>
	<option value="LV">Latvia (Latvija)</option>
	<option value="LB">Lebanon (‫لبنان‬‎)</option>
	<option value="LS">Lesotho</option>
	<option value="LR">Liberia</option>
	<option value="LY">Libya (‫ليبيا‬‎)</option>
	<option value="LI">Liechtenstein</option>
	<option value="LT">Lithuania (Lietuva)</option>
	<option value="LU">Luxembourg</option>
	<option value="MO">Macau (澳門)</option>
	<option value="MK">Macedonia (FYROM) (Македонија)</option>
	<option value="MG">Madagascar (Madagasikara)</option>
	<option value="MW">Malawi</option>
	<option value="MY">Malaysia</option>
	<option value="MV">Maldives</option>
	<option value="ML">Mali</option>
	<option value="MT">Malta</option>
	<option value="MH">Marshall Islands</option>
	<option value="MQ">Martinique</option>
	<option value="MR">Mauritania (‫موريتانيا‬‎)</option>
	<option value="MU">Mauritius (Moris)</option>
	<option value="MX">Mexico (México)</option>
	<option value="FM">Micronesia</option>
	<option value="MD">Moldova (Republica Moldova)</option>
	<option value="MC">Monaco</option>
	<option value="MN">Mongolia (Монгол)</option>
	<option value="ME">Montenegro (Crna Gora)</option>
	<option value="MS">Montserrat</option>
	<option value="MA">Morocco (‫المغرب‬‎)</option>
	<option value="MZ">Mozambique (Moçambique)</option>
	<option value="MM">Myanmar (Burma) (မြန်မာ)</option>
	<option value="NA">Namibia (Namibië)</option>
	<option value="NR">Nauru</option>
	<option value="NP">Nepal (नेपाल)</option>
	<option value="NL">Netherlands (Nederland)</option>
	<option value="NC">New Caledonia (Nouvelle-Calédonie)</option>
	<option value="NZ">New Zealand</option>
	<option value="NI">Nicaragua</option>
	<option value="NE">Niger (Nijar)</option>
	<option value="NG">Nigeria</option>
	<option value="NU">Niue</option>
	<option value="NF">Norfolk Island</option>
	<option value="KP">North Korea (조선 민주주의 인민 공화국)</option>
	<option value="MP">Northern Mariana Islands</option>
	<option value="NO">Norway (Norge)</option>
	<option value="OM">Oman (‫عُمان‬‎)</option>
	<option value="PK">Pakistan (‫پاکستان‬‎)</option>
	<option value="PW">Palau</option>
	<option value="PS">Palestine (‫فلسطين‬‎)</option>
	<option value="PA">Panama (Panamá)</option>
	<option value="PG">Papua New Guinea</option>
	<option value="PY">Paraguay</option>
	<option value="PE">Peru (Perú)</option>
	<option value="PH">Philippines</option>
	<option value="PL">Poland (Polska)</option>
	<option value="PT">Portugal</option>
	<option value="PR">Puerto Rico</option>
	<option value="QA">Qatar (‫قطر‬‎)</option>
	<option value="RE">Réunion (La Réunion)</option>
	<option value="RO">Romania (România)</option>
	<option value="RU">Russia (Россия)</option>
	<option value="RW">Rwanda</option>
	<option value="BL">Saint Barthélemy (Saint-Barthélemy)</option>
	<option value="SH">Saint Helena</option>
	<option value="KN">Saint Kitts and Nevis</option>
	<option value="LC">Saint Lucia</option>
	<option value="MF">Saint Martin (Saint-Martin (partie française))</option>
	<option value="PM">Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</option>
	<option value="VC">Saint Vincent and the Grenadines</option>
	<option value="WS">Samoa</option>
	<option value="SM">San Marino</option>
	<option value="ST">São Tomé and Príncipe (São Tomé e Príncipe)</option>
	<option value="SA">Saudi Arabia (‫المملكة العربية السعودية‬‎)</option>
	<option value="SN">Senegal (Sénégal)</option>
	<option value="RS">Serbia (Србија)</option>
	<option value="SC">Seychelles</option>
	<option value="SL">Sierra Leone</option>
	<option value="SG">Singapore</option>
	<option value="SX">Sint Maarten</option>
	<option value="SK">Slovakia (Slovensko)</option>
	<option value="SI">Slovenia (Slovenija)</option>
	<option value="SB">Solomon Islands</option>
	<option value="SO">Somalia (Soomaaliya)</option>
	<option value="ZA">South Africa</option>
	<option value="KR">South Korea (대한민국)</option>
	<option value="SS">South Sudan (‫جنوب السودان‬‎)</option>
	<option value="ES">Spain (España)</option>
	<option value="LK">Sri Lanka (ශ්‍රී ලංකාව)</option>
	<option value="SD">Sudan (‫السودان‬‎)</option>
	<option value="SR">Suriname</option>
	<option value="SZ">Swaziland</option>
	<option value="SE">Sweden (Sverige)</option>
	<option value="CH">Switzerland (Schweiz)</option>
	<option value="SY">Syria (‫سوريا‬‎)</option>
	<option value="TW">Taiwan (台灣)</option>
	<option value="TJ">Tajikistan</option>
	<option value="TZ">Tanzania</option>
	<option value="TH">Thailand (ไทย)</option>
	<option value="TL">Timor-Leste</option>
	<option value="TG">Togo</option>
	<option value="TK">Tokelau</option>
	<option value="TO">Tonga</option>
	<option value="TT">Trinidad and Tobago</option>
	<option value="TN">Tunisia (‫تونس‬‎)</option>
	<option value="TR">Turkey (Türkiye)</option>
	<option value="TM">Turkmenistan</option>
	<option value="TC">Turks and Caicos Islands</option>
	<option value="TV">Tuvalu</option>
	<option value="VI">U.S. Virgin Islands</option>
	<option value="UA">Ukraine (Україна)</option>
	<option value="AE">United Arab Emirates (‫الإمارات العربية المتحدة‬‎)</option>
	<option value="GB">United Kingdom</option>
	<option value="US">United States</option>
	<option value="UG">Uganda</option>
	<option value="UY">Uruguay</option>
	<option value="UZ">Uzbekistan (Oʻzbekiston)</option>
	<option value="VU">Vanuatu</option>
	<option value="VA">Vatican City (Città del Vaticano)</option>
	<option value="VE">Venezuela</option>
	<option value="VN">Vietnam (Việt Nam)</option>
	<option value="WF">Wallis and Futuna</option>
	<option value="YE">Yemen (‫اليمن‬‎)</option>
	<option value="ZM">Zambia</option>
	<option value="ZW">Zimbabwe</option>
</select>
        </div></span>
    
    <div class="clearfix"></div>
    <div class="clearfix"></div></div>
                                                    
                                                    
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        <!-- Adults END -->
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        <div class="clearfix"></div>
    <div class="cont contacts__block">
        <div class="col-lg-12 col-sm-12 col-md-12 nopadding heading">
            <h3 class="ssr-selection title">
					<span class="icon-contactInfo contact__info__icon"></span>
					<span class="m-arrow arrow__icon"><i class="flaticon-contact contact__icon"></i></span>
					<span class="blue-bar title__bar">Contact Information</span></h3>
            <hr class="carved2" />
        </div>
        <div class="clearfix"></div>
        <div class="contact__info__wrapper">
            <div class="panel panel-default contact__info__block">
                <div class="panel-body">
                    <div class="inline-form"><div id="contacts">
					<div id="contact0" class="contact__info__block__body" data-contact-type="STD">
                                    
                                   
                                        <div class="form-group col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                            <label for="contact_name">Name *</label><input id="contact_name0" type="text" name="contact_name0" autocomplete="off" class="form-control b-r" maxlength="24" />
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group col-lg-3 col-md-5 col-sm-5 col-xs-12">
                                            <label for="contact_surname">Surname *</label><input id="contact_surname0" type="text" name="contact_surname0" autocomplete="off" class="form-control b-r" maxlength="24" />
                                            <div class="clearfix"></div>
                                        </div><input id="hidden-country0" type="hidden" name="hidden-country0" value="UG" />
                                    <div class="clearfix"></div>
									<div id="contactPhone0" class="form-group col-lg-4 col-sm-4 col-xs-12">
						   <label for="tel-number">Phone Number *</label>
						   <input id="telephone" name="frst-tel-number0" value="" class="form-control b-r"  type="tel" />
						   
										   </div>
										   
										   <div class="form-group col-lg-4 col-sm-4 col-xs-12">
                                        <label for="tel-number">Alternative Telephone</label>
										<input id="telephone" name="alt-tel-number0" value="" class="form-control b-r" type="tel" /></div>
                                    <div class="form-group col-lg-4 col-sm-4 col-xs-12">
                                        <label>Email *</label><input id="email0" name="email0" autocomplete="off" class="form-control b-r" dir="ltr" placeholder="Email" type="email" />
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="clearfix"></div></div>
	                        <div class="clearline"></div>
							
								
								</div>
	                        <div class="clearfix"></div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
       
                            
                            
                            <div class="passenger__info__bottom">
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 nopadding rezvPaxEntryContinue bottom__area">
                                    <div class="leftText bottom__back__button  rtl-left"><a href="<?php echo base_url()?>install"  class="btn btn-default  btn-back2">BACK</a>
                                    </div>
                                    <div class="btn-continueDiv bottom__cont__btn  rtl-right"><input id="btnSave" type="submit" name="btnSave" value="CONTINUE" class="btn btn-danger btn-cont pull-right" />
                                    </div>
                                </div>
                            </div>
                        </div><div id="passengerStickyPanel" class="col-lg-3 col-md-12 col-sm-12 col-xs-12 passengerinfo-sticky sticky passenger-sticky"><div id="flightInfoChildPanel" class="panel panel-default flight__selection__info__table">
            <div class="passenger-sticky-top-header">
                <span class="ps-left-side">Reservation Summary</span>
            </div>
            <div class="flight__selection__info__table__content">
                <div class="clearfix"></div>
                        <div class="header">
                            <span>
                                      <i class="fa fa-plane" aria-hidden="true"></i>    
                                      <strong>Departure</strong>
                                   
                                </span>
                            <div class="clearfix"></div>
                        </div>
                            <div class="flinfo-b segment__table">
                                <div class="clearfix"></div>
                                <table class="table-condensed segment__details segmentDetails_0">
                                    <tbody>
                                        <tr>
                                            <td><span class="text-dect"> Departing</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>Bujumbura International Airport 
											<?php echo $searchdata2['from_city']; ?> </span></td>
                                        </tr>
                                        <tr>
                                            <td><span><span class="schDepDate">06/03/2020 - 19:55</span></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <hr />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-dect">Arrival</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>Entebbe International Airport</span></td>
                                        </tr>
                                        <tr>
                                            <td><span><span class="schDepDate">06/03/2020 - 22:10</span></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <hr />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="segment__flight__details segmentDetails_0">
                                    <tbody>
                                        <tr>
                                            <td><span class="text-dect">Flight  
                                                    <span class="operatingCarrier">UR</span>-<span class="operatingFlightNo">361</span>
                                                </span></td>
                                            <td>
                                                    <span class="text-dect">Cabin  
                                                    <span class="depCabinClass">Economy</span></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="clearfix"></div>
                            <!--div class="flinfo-b segment__table">
                                    <span class="col-md-12 col-xs-12  red segment__conn__number"> 
                                            <strong>Connection:
                                                
                                                <span class="transitCity1">EBB</span>
                                                <br /></strong></span>
                                <div class="clearfix"></div>
                                
                            </div-->
							
							<div class="total__details__content">
                <table class="table-condensed ">
                    <tbody>
                        <tr>
                            <td class="td__three"><span> Ticket Cost </span></td>
                            <td class="td__four">
                                <span><span class="totalFare">70.00 USD</span>                  
                                </span>
                            </td>
                        </tr>
                            <tr>
                                <td class="td__three"><span href="#TaxTypesModal" data-toggle="modal" class="tax__types__modal__link"> <strong>Total Tax Amount</strong> </span></td>
                                <td class="td__four">
                                    <span href="#TaxTypesModal" data-toggle="modal" class="tax__types__modal__link"><span class="totalSurchargeIncludeFuelSurcharge">50.00 USD</span>            
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="td__three"><span href="#SurChargeModal" data-toggle="modal" class="tax__types__modal__link"> <strong>Surcharge</strong> </span></td>
                                <td class="td__four">
                                    <span href="#SurChargeModal" data-toggle="modal" class="tax__types__modal__link"><span class="totalFare">80.00 USD</span>            
                                    </span>
                                </td>
                            </tr>
                        
                        <tr>
                            <td class="td__five"><strong>TOTAL</strong></td>
                            <td class="td__six">                                    
                                    <span class="totalAmountDirection"><strong>200.00 USD
                                    </strong></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="clearfix"></div></div>
            
                            
            </div>
            
            </div>
			
			</div>
						
			</div>



	             
				</div>
                
	</span>			
	
	</form>

</div>