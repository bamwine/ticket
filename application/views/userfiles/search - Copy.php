<div class="ReservationPages Availability MobileIndex">	
<form id="FlightSearch" name="FlightSearch" method="post" action="<?php echo base_url()?>install/userinfo" enctype="application/x-www-form-urlencoded" target="_top">
<input type="hidden" name="FlightSearch" value="FlightSearch" />

 <?php include 'navigation.php';?>
 
            <div id="mainContent" class="main__container">
                <div class="container availability__main__container">
                    <div class="row">
                        <div id="subContent">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 availability-content"><div id="errorSection" class="error-div">
                                    <ul id="scriptValidationMessages" class="error-div">
                                    </ul></div>
	<div id="extraContentA">
	</div><div id="flightsGrid" class="all-routes">
                <div class="row selection-row flightGrid0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 search-selection-title">
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7 selection-side">
                            <span class="route-title"> Outbound:</span>
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 search-side">
                            <span class="new-search">
                                <a data-toggle="modal" href="#research">
                                    <i class="glyphicon glyphicon-refresh"></i>Search Again</a>
                            </span>
                            <div class="unique-monthly" style="display:none;"><a href="#" onclick="mojarra.jsfcljs(document.getElementById('FlightSearch'),{'j_idt44':'j_idt44'},'');return false">
                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Calendar View
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 search-flight-info">
                        <span class="route-info">
                                <span>Bujumbura International Airport</span>
                                <span><i class="glyphicon glyphicon-plane"></i></span> 
                                <span>Nairobi - Jomo Kenyatta </span>
                                on
                                
                                    05/03/2020
                                
                        </span>
                        </div>
                            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 change-currency sorting-flight">
                                    <div class="col-lg-6 col-md-6 col-xs-7 col-sm-6 sort-flights">
                                        <div class="sorting-flight-label">Sort Flights:</div>
                                        <div class="sorting-flight-dropdown">
                                            <div class="ibe-select-menu"><select id="sortFlights" name="sortFlights" class="no-selectize" size="1" onchange="mojarra.ab(this,event,'change','sortFlights','flightGrid0')">	<option value="price_0_0">By Price</option>
	<option value="departureDate_0_0" selected="selected">Outbound: Departure Time</option>
	<option value="duration_0_0">Outbound: Travel Duration</option>
	<option value="arrivalDate_0_0">Outbound: Arrival Time</option>
	<option value="stops_0_0">Outbound: Stop Count</option>
</select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-6 col-md-6 col-xs-5 col-sm-6 changing-currency">
                                        <div class="change-currency-label">Change Currency</div>
                                        <div class="change-currency-dropdown">
                                            <div class="ibe-select-menu"><select id="j_idt64" name="j_idt64" class="no-selectize" size="1" onchange="mojarra.ab(this,event,'change','@this','@form')">	<option value="USD" selected="selected">USD</option>
	<option value="UGX">UGX</option>
</select>
                                            </div>
                                        </div>
                                    </div>
                                <div class="clearfix"></div>
                            </div>
                    </div><div id="filter_0"></div>
    <div class="clearfix"></div>
                </div><div id="flightGrid0" class="route-details" data-show-flight-list-tools="false">
		<div class="select-day-container row">
			<div class="select-day-wrapper col-lg-11 col-md-11 col-sm-11 col-xs-12">
				<div class="row">
					<div class="previous-day-icon col-lg-1 col-md-1 col-sm-1"><a href="#" onclick="mojarra.jsfcljs(document.getElementById('FlightSearch'),{'j_idt91':'j_idt91'},'');return false">
							<i class="glyphicon glyphicon-chevron-left"></i></a>
					</div>

					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 date-picker-middle">
							<div class="select-day-element col-lg-4 col-md-4 col-sm-4 col-xs-4 "><a id="j_idt94:0:j_idt96" href="#" onclick="mojarra.ab(this,event,'click',0,'flightGrid0 filter_0');return false">
									<div class="day-element-inside">
										<div class="day-element-date"><span class="picker-date">04/03/2020</span>
											<br /><span class="picker-day">Wednesday</span>
										</div>
											<div class="day-element-price true bestDay">
														<span>140.00</span>
														<span>USD</span>
											</div>
									</div></a>
							</div>
							<div class="select-day-element col-lg-4 col-md-4 col-sm-4 col-xs-4 "><a id="j_idt94:1:j_idt96" href="#" onclick="mojarra.ab(this,event,'click',0,'flightGrid0 filter_0');return false">
									<div class="day-element-inside">
										<div class="day-element-date"><span class="picker-date">05/03/2020</span>
											<br /><span class="picker-day">Thursday</span>
										</div>
											<div class="day-element-price false ">
													<div class="no-flight-day">
																No Flight
															
													</div>
											</div>
									</div></a>
							</div>
							<div class="select-day-element col-lg-4 col-md-4 col-sm-4 col-xs-4 selected-day"><a id="j_idt94:2:j_idt96" href="#" onclick="mojarra.ab(this,event,'click',0,'flightGrid0 filter_0');return false">
									<div class="day-element-inside">
										<div class="day-element-date"><span class="picker-date">06/03/2020</span>
											<br /><span class="picker-day">Friday</span>
										</div>
											<div class="day-element-price true ">
														<span>190.00</span>
														<span>USD</span>
											</div>
									</div></a>
							</div>
					</div>

					<div class="next-day-icon col-lg-1 col-md-1 col-sm-1"><a href="#" onclick="mojarra.jsfcljs(document.getElementById('FlightSearch'),{'j_idt129':'j_idt129'},'');return false">
							<i class="glyphicon glyphicon-chevron-right"></i></a>
					</div>

				</div>
			</div>
			<div class="monthly-view-wrapper col-lg-1 col-md-1 col-sm-1 col-xs-1"><a href="#" onclick="mojarra.jsfcljs(document.getElementById('FlightSearch'),{'j_idt137':'j_idt137'},'');return false">
					<i class="glyphicon glyphicon-calendar"></i>
					<div class="monthly-view-label">Calendar View</div></a>				
			</div>
		</div>
		<div class="responsive-monthly-view row" style="padding: 5px;">
			<div class="previous-day-area col-xs-4 " style="text-align: left; text-decoration: underline; color: #ffcc00"><a href="#" onclick="mojarra.jsfcljs(document.getElementById('FlightSearch'),{'j_idt141':'j_idt141'},'');return false">
							<i class="glyphicon glyphicon-chevron-left"></i> Previous Days
						</a>
			</div>
			<div class="responsive-monthly-view-wrapper col-xs-4" style="text-align: center; color: #fff;"><a href="#" onclick="mojarra.jsfcljs(document.getElementById('FlightSearch'),{'j_idt148':'j_idt148'},'');return false">
						<i class="glyphicon glyphicon-calendar"></i>
						<div class="monthly-view-label">Calendar View</div></a>
			</div>
			<div class="next-day-area col-xs-4" style="text-align: right; text-decoration: underline; color: #ffcc00"><a href="#" onclick="mojarra.jsfcljs(document.getElementById('FlightSearch'),{'j_idt151':'j_idt151'},'');return false">
							Next Days<i class="glyphicon glyphicon-chevron-right"></i></a>
			</div>
		</div>
                                <div class="flights-header">
                                    <div class="info-header col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <span class="flight-information">Flight Information</span>
                                    </div>
                                    <div class="fare-info col-lg-8 col-md-8 col-sm-8">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 PROMOTION fare-class">
                                                        <a href="#PROMOTION_modal" data-toggle="modal">
                                                            <span>PROMO</span>
                                                            <sup>
                                                                <i class="glyphicon glyphicon-info-sign"></i>
                                                            </sup>
                                                        </a>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 FLEXIBLE fare-class">
                                                        <a href="#FLEXIBLE_modal" data-toggle="modal">
                                                            <span>FLEX</span>
                                                            <sup>
                                                                <i class="glyphicon glyphicon-info-sign"></i>
                                                            </sup>
                                                        </a>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 BUSINESS fare-class">
                                                        <a href="#BUSINESS_modal" data-toggle="modal">
                                                            <span>Business</span>
                                                            <sup>
                                                                <i class="glyphicon glyphicon-info-sign"></i>
                                                            </sup>
                                                        </a>
                                                </div>
                                    </div>
                                </div><div id="flightID_0_2_0" class="flight-details true">
<div class="info col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 departure-info">
                    <span class="departure-time">19:55</span>
                    <br />
                    <div class="departure-airport">Bujumbura International Airport</div>
				</div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 divider  ">
                    <div class="plane-icon-container">
                        <div class="plane-icon-image">
							
						</div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 arrival-info">
                    <span class="arrival-time">
                                                        09:15   
                                                    </span>
                        <span class="another-day">+1</span>
                    <br />
                    <div class="arrival-airport">Nairobi - Jomo Kenyatta</div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 modal-side">
                	<a href="#flightID_0_2_0_0_modal" data-toggle="modal"><span class="modal-side-links">  <i class="glyphicon glyphicon-info-sign"></i>
	                        Travel duration:  12  hour(s) 20 minute(s) (1 layover(s))
	                    
                    </span></a>
                </div>
                <div id="flightID_0_2_0_0_modal" class="modal flight-details-modal" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                <h4 class="modal-title">Flight Information
                                </h4>
                            </div>
                            <div class="modal-body">
							        <div class="flight">
							            <div class="flight-modal-title">Flight 1: Bujumbura to Entebbe</div>
							            <div class="flight-modal-body">
							                <table>
							                    <tr>
							                        <td>Flight Number</td>
							                        <td>UR-361</td>
							                    </tr>
							                    <tr>
							                        <td>From</td>
							                        <td>Bujumbura International Airport</td>
							                    </tr>
							                    <tr>
							                        <td>Departing Date</td>
							                        <td>06/03/2020 19:55</td>
							                    </tr>
							                    <tr>
							                        <td>To</td>
							                        <td>Entebbe International Airport</td>
							                    </tr>
							                    <tr>
							                        <td>Arrival Date</td>
							                        <td>06/03/2020 22:10</td>
							                    </tr>
							                    <tr>
							                        <td>Flight Duration</td>
							                        <td>1 hour(s) 15  minute(s)</td>
							                    </tr>
							                    <tr>
							                        <td>Aircraft Type</td>
							                        <td>CRJ900 12C/64Y</td>
							                    </tr>                   
							                </table>
							            </div>
							        </div>
							            <div class="flight-modal-layover-seperator">
							                <span>Layover at: Entebbe - Layover time: 9  hour(s) 50 minute(s)</span>
							            </div>
							        <div class="flight">
							            <div class="flight-modal-title">Flight 2: Entebbe to Nairobi</div>
							            <div class="flight-modal-body">
							                <table>
							                    <tr>
							                        <td>Flight Number</td>
							                        <td>UR-202</td>
							                    </tr>
							                    <tr>
							                        <td>From</td>
							                        <td>Entebbe International Airport</td>
							                    </tr>
							                    <tr>
							                        <td>Departing Date</td>
							                        <td>07/03/2020 08:00</td>
							                    </tr>
							                    <tr>
							                        <td>To</td>
							                        <td>Nairobi - Jomo Kenyatta</td>
							                    </tr>
							                    <tr>
							                        <td>Arrival Date</td>
							                        <td>07/03/2020 09:15</td>
							                    </tr>
							                    <tr>
							                        <td>Flight Duration</td>
							                        <td>1 hour(s) 15  minute(s)</td>
							                    </tr>
							                    <tr>
							                        <td>Aircraft Type</td>
							                        <td>CRJ900 12C/64Y</td>
							                    </tr>                   
							                </table>
							            </div>
							        </div>
							</div>
                        </div>
                    </div>
                </div>   
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 flight-extras">
        </div>
    </div>

	<div class="prices col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="button-fare price col-lg-4 col-md-4 col-sm-4  true fare-link selected">
                    
                    <div class="inner-price selectable-inner"><a id="j_idt1445:0:j_idt1510" href="#" onclick="mojarra.ab(this,event,'click',0,'flightsGrid basket');return false">
	                         <div class="mobile-tag col-xs-4 col-md-12 col-sm-12 col-lg-12">PROMO</div>
	                         <div class="mobile-price col-xs-4 col-md-12 col-sm-12 col-lg-12 true">
	                                <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">190.00</span>
		                            <span class="col-lg-12 col-xs-12">USD</span>
	                         </div>
	    
	                            <div class="price-button col-xs-4 col-md-12 col-sm-12 col-lg-12">
	                                <button class="price-button-inside true">
	                                        SELECTED
	                                    
	                                </button>
	                            </div>
	                                    <span class="last-seat">
	                                                                    Last
	                                                                    2
	                                                                    Seats
	                                                                </span>
	                            <div class="clearfix"></div></a>
                        </div>
                </div>
            <div class="not-selectable price col-lg-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="inner-price not-selectable-inner false">
                    <span>Sold Out</span>
                </div>
            </div>
            <div class="not-selectable price col-lg-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="inner-price not-selectable-inner false">
                    <span>Sold Out</span>
                </div>
            </div>
	</div>
	<!-- desktop -->
<div class="clearfix"></div>
	<!-- branded --></div><div id="flightID_0_2_1" class="flight-details false">
<div class="info col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 departure-info">
                    <span class="departure-time">19:55</span>
                    <br />
                    <div class="departure-airport">Bujumbura International Airport</div>
				</div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 divider">
                    <div class="plane-icon-container">
                        <div class="plane-icon-image">
							
						</div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 arrival-info">
                    <span class="arrival-time">
                                                        21:20   
                                                    </span>
                        <span class="another-day">+1</span>
                    <br />
                    <div class="arrival-airport">Nairobi - Jomo Kenyatta</div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 modal-side">
                	<a href="#flightID_0_2_1_0_modal" data-toggle="modal"><span class="modal-side-links">  <i class="glyphicon glyphicon-info-sign"></i>
	                        Travel duration:  1 day(s) 25 minute(s) (1 layover(s))
	                    
                    </span></a>
                </div>
                <div id="flightID_0_2_1_0_modal" class="modal flight-details-modal" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                <h4 class="modal-title">Flight Information
                                </h4>
                            </div>
                            <div class="modal-body">
							        <div class="flight">
							            <div class="flight-modal-title">Flight 1: Bujumbura to Entebbe</div>
							            <div class="flight-modal-body">
							                <table>
							                    <tr>
							                        <td>Flight Number</td>
							                        <td>UR-361</td>
							                    </tr>
							                    <tr>
							                        <td>From</td>
							                        <td>Bujumbura International Airport</td>
							                    </tr>
							                    <tr>
							                        <td>Departing Date</td>
							                        <td>06/03/2020 19:55</td>
							                    </tr>
							                    <tr>
							                        <td>To</td>
							                        <td>Entebbe International Airport</td>
							                    </tr>
							                    <tr>
							                        <td>Arrival Date</td>
							                        <td>06/03/2020 22:10</td>
							                    </tr>
							                    <tr>
							                        <td>Flight Duration</td>
							                        <td>1 hour(s) 15  minute(s)</td>
							                    </tr>
							                    <tr>
							                        <td>Aircraft Type</td>
							                        <td>CRJ900 12C/64Y</td>
							                    </tr>                   
							                </table>
							            </div>
							        </div>
							            <div class="flight-modal-layover-seperator">
							                <span>Layover at: Entebbe - Layover time: 21  hour(s) 55 minute(s)</span>
							            </div>
							        <div class="flight">
							            <div class="flight-modal-title">Flight 2: Entebbe to Nairobi</div>
							            <div class="flight-modal-body">
							                <table>
							                    <tr>
							                        <td>Flight Number</td>
							                        <td>UR-204</td>
							                    </tr>
							                    <tr>
							                        <td>From</td>
							                        <td>Entebbe International Airport</td>
							                    </tr>
							                    <tr>
							                        <td>Departing Date</td>
							                        <td>07/03/2020 20:05</td>
							                    </tr>
							                    <tr>
							                        <td>To</td>
							                        <td>Nairobi - Jomo Kenyatta</td>
							                    </tr>
							                    <tr>
							                        <td>Arrival Date</td>
							                        <td>07/03/2020 21:20</td>
							                    </tr>
							                    <tr>
							                        <td>Flight Duration</td>
							                        <td>1 hour(s) 15  minute(s)</td>
							                    </tr>
							                    <tr>
							                        <td>Aircraft Type</td>
							                        <td>CRJ900 12C/64Y</td>
							                    </tr>                   
							                </table>
							            </div>
							        </div>
							</div>
                        </div>
                    </div>
                </div>   
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 flight-extras">
        </div>
    </div>

	<div class="prices col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="button-fare price col-lg-4 col-md-4 col-sm-4  false fare-link ">
                    
                    <div class="inner-price selectable-inner"><a id="j_idt1794:0:j_idt1859" href="#" onclick="mojarra.ab(this,event,'click',0,'flightsGrid basket');return false">
	                         <div class="mobile-tag col-xs-4 col-md-12 col-sm-12 col-lg-12">PROMO</div>
	                         <div class="mobile-price col-xs-4 col-md-12 col-sm-12 col-lg-12 true">
	                                <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">190.00</span>
		                            <span class="col-lg-12 col-xs-12">USD</span>
	                         </div>
	    
	                            <div class="price-button col-xs-4 col-md-12 col-sm-12 col-lg-12">
	                                <button class="price-button-inside false">
	                                        SELECT
	                                    
	                                </button>
	                            </div>
	                                    <span class="last-seat">
	                                                                    Last
	                                                                    2
	                                                                    Seats
	                                                                </span>
	                            <div class="clearfix"></div></a>
                        </div>
                </div>
            <div class="not-selectable price col-lg-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="inner-price not-selectable-inner false">
                    <span>Sold Out</span>
                </div>
            </div>
            <div class="not-selectable price col-lg-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="inner-price not-selectable-inner false">
                    <span>Sold Out</span>
                </div>
            </div>
	</div>
	<!-- desktop -->
<div class="clearfix"></div>
	<!-- branded --></div>
                                <div>
                                </div></div>

            <div class="pagination__parent">
                <div class="pagination  pageList0"></div>
            </div>

	<div class="modal modal-lg comparetable_0">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h4 class="modal-title">?Bundle Compare Table head translate?</h4>
				</div>
				<div class="modal-body">BundleCompareTableContent_html_translate
				</div>
			</div>
		</div>
	</div>
            
			
			<div id="PROMOTION_modal" class="modal" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                            <h4 class="modal-title">Promotion Fare Rules
                            </h4>
                        </div>
                        <div class="modal-body"><table style="margin-left: auto; margin-right: auto;" border="2px;" width="602">
<tbody>
<tr>
<td width="170">
<p style="text-align: center;">&nbsp;</p>
</td>
<td style="text-align: center;" width="104">
<p><span style="color: #0000ff;"><strong>PROMO</strong></span></p>
<p><span style="color: #0000ff;"><strong>&nbsp;X</strong></span></p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Flight change fee</strong></p>
</td>
<td width="104">
<p><span style="color: #ff0000;"><strong>USD 100 </strong></span></p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Flight no-show</strong></p>
</td>
<td width="104">
<p><span style="color: #ff0000;"><strong>USD 100</strong></span></p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Flight cancellation</strong></p>
</td>
<td width="104">
<p><span style="color: #ff0000;"><strong>USD 100</strong></span></p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Partial cancellation</strong></p>
</td>
<td width="104">
<p><span style="color: #ff0000;"><strong>Not permitted</strong></span></p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Open date itinerary</strong></p>
</td>
<td width="104">
<p>Not permitted</p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Infant Fare</strong></p>
<p><strong>(below 2 years)</strong></p>
</td>
<td width="104">
<p>90% discount on adult fare</p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Child Fare</strong></p>
<p><strong>(above 2 years and below 12 years)</strong></p>
</td>
<td width="104">
<p>25% discount on the adult fare</p>
</td>
</tr>
</tbody>
</table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="FLEXIBLE_modal" class="modal" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                            <h4 class="modal-title">Flexible Fare Rules
                            </h4>
                        </div>
                        <div class="modal-body"><table style="margin-left: auto; margin-right: auto;" border="2px;" width="602">
<tbody>
<tr>
<td width="170">
<p style="text-align: center;">&nbsp;</p>
</td>
<td style="text-align: center;" width="104">
<p><span style="color: #0000ff;"><strong>ECON&nbsp; RESTRICTED</strong></span></p>
<p><span style="color: #0000ff;"><strong>Q/U/L/N</strong></span></p>
</td>
<td style="text-align: center;" width="104">
<p><span style="color: #0000ff;"><strong>ECON UNRESTRICTED</strong></span></p>
<p><span style="color: #0000ff;"><strong>Y</strong></span><span style="color: #0000ff;"><strong>&nbsp;</strong></span></p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Flight change fee</strong></p>
</td>
<td width="104">
<p><span style="color: #ff0000;"><strong>USD 50</strong></span></p>
</td>
<td width="104">
<p><span style="color: #ff0000;"><strong>FREE</strong></span></p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Flight no-show</strong></p>
</td>
<td width="104">
<p><span style="color: #ff0000;"><strong>USD 50</strong></span></p>
</td>
<td width="104">
<p><span style="color: #ff0000;"><strong>USD 50</strong></span></p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Flight cancellation</strong></p>
</td>
<td width="104">
<p><span style="color: #ff0000;"><strong>USD 50</strong></span></p>
</td>
<td width="104">
<p><span style="color: #ff0000;"><strong>FREE</strong></span></p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Partial cancellation</strong></p>
</td>
<td width="104">
<p><span style="color: #ff0000;"><strong>USD 50</strong></span></p>
</td>
<td width="104">
<p><span style="color: #ff0000;"><strong>FREE</strong></span></p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Open date itinerary</strong></p>
</td>
<td width="104">
<p>Not permitted</p>
</td>
<td width="104">
<p>Not permitted</p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Infant Fare</strong></p>
<p><strong>(below 2 years)</strong></p>
</td>
<td width="104">
<p>90% discount on adult fare</p>
</td>
<td width="104">
<p>90% discount on adult fare</p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Child Fare</strong></p>
<p><strong>(above 2 years and below 12 years)</strong></p>
</td>
<td width="104">
<p>25% discount on the adult fare</p>
</td>
<td width="104">
<p>25% discount on the adult fare</p>
</td>
</tr>
</tbody>
</table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="BUSINESS_modal" class="modal" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                            <h4 class="modal-title">Business Fare Rules
                            </h4>
                        </div>
                        <div class="modal-body"><table style="margin-left: auto; margin-right: auto;" border="2px;" width="602">
<tbody>
<tr>
<td width="170">
<p style="text-align: center;">&nbsp;</p>
</td>
<td style="text-align: center;" width="104">
<p><span style="color: #0000ff;"><strong>BUSINESS UNRESTRICTED</strong></span></p>
<p><span style="color: #0000ff;"><strong>I/C</strong></span></p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Flight change fee</strong></p>
</td>
<td width="104">
<p><span style="color: #ff0000;"><strong>FREE</strong></span></p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Flight no-show</strong></p>
</td>
<td width="104">
<p><span style="color: #ff0000;"><strong>USD 50</strong></span></p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Flight cancellation</strong></p>
</td>
<td width="104">
<p><span style="color: #ff0000;"><strong>FREE</strong></span></p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Partial cancellation</strong></p>
</td>
<td width="104">
<p><span style="color: #ff0000;"><strong>FREE</strong></span></p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Open date itinerary</strong></p>
</td>
<td width="104">
<p>permitted</p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Infant Fare</strong></p>
<p><strong>(below 2 years)</strong></p>
</td>
<td width="104">
<p>90% discount on adult fare</p>
</td>
</tr>
<tr style="text-align: center;">
<td width="170">
<p><strong>Child Fare</strong></p>
<p><strong>(above 2 years and below 12 years)</strong></p>
</td>
<td width="104">
<p>25% discount on the adult fare&nbsp;</p>
</td>
</tr>
</tbody>
</table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div></div>
                            </div>
                        </div>
                        <!-- flightInfoPanel  begin-->
                        <div id="sidebarInfoA" class="flight__selection__sidebar">
                        </div>
                        <!-- flightInfoPanel  end-->
                    </div><div id="basket" class="sticky-basket">
            <div class="basketCollepse">
                <div class="basket-collapse-title">
                    <span class="show-details-label"><i class="glyphicon glyphicon-chevron-up"></i>Show Details</span>
                    <span class="hide-details-label"><i class="glyphicon glyphicon-chevron-down"></i>Hide Details</span>
                </div>
            </div>
            <div class="clear-selection"><a href="#" onclick="mojarra.jsfcljs(document.getElementById('FlightSearch'),{'j_idt280':'j_idt280'},'');return false">Clear Selection</a> 
            </div>
            <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 basket-summary">
        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 summary-left-area">
            <div class="col-lg-3 col-md-2 col-sm-2 col-xs-12 trip-details">
                <span class="trip-details-title">Your Trip Details</span>
                <br />
                <span class="trip-type">One Way</span>
                 <br />
                <span class="passenger-count">
                                        <span>1 Adult </span> <br />
                </span>
            </div>
                    <div class="col-lg-9 col-md-5 col-sm-5 col-xs-12 route-selection-side ">
                        <span class="route-selection-title"> <i class="glyphicon glyphicon-plane "></i> Outbound Flight(s)</span>
                        <br />
                        <span class="route-information">Bujumbura International Airport &gt; Nairobi - Jomo Kenyatta</span>
                        <br />
                        <span class="route-departing-location">Departing From: Bujumbura International Airport</span>
                            <br />
                            <span class="route-departing-date">
                            Departing At
                                        06/03/2020 - 19:55 
                                       </span>
                            <br />
                            <span class="route-duration">
			                        Travel duration: 12  hour(s) 20 minute(s) (1 layover(s))
			                    
                            </span>
                        <br />
                        <span class="show-detail basketCollepse"><i class="glyphicon glyphicon-chevron-up"></i> Show Flight Details</span>
                    </div>
        </div>
        
        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 summary-right-area">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 without-membership-info">
                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 price-information-side">
                    <span class="price-title">Total Price</span>
                    <br />
                    <span class="price-data">200.00 USD</span>
                    <br />
                    <span class="show-detail basketCollepse"><i class="glyphicon glyphicon-chevron-up"></i>Show Pricing Details</span>
                    <br />
                </div><span class="col-lg-5 col-md-6 col-sm-6 col-xs-12 continue-side"><input type="submit" name="j_idt310" value="CONTINUE" class="continue-button" /></span>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 with-membership-info">
                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 loyalty-member-information">
	                </div>
	            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 flight-details basket-detail">
        <div class="col-lg-5  col-md-12 col-sm-12 col-xs-12 detailed-left-area">
                    <div class="detailed-flight col-lg-offset-1 col-lg-11 col-md-6 col-sm-6 col-xs-12 basket-detail collapse ">
                        <div class="detailed-flight-header">
                            <span>
                                <i class="glyphicon glyphicon-plane "></i>Outbound Flight(s)</span>
                        </div>
                            <div class="detailed-route">Flight 1: UR-361 on 06/03/2020 </div>
                            <div class="common-block-for-margin">
                                <div class="between-flight-icon"></div>
                                    <div class="detailed-departure-flight-information">
                                        <span class="detailed-time">19:55  
                                        </span>
                                        <span class="detailed-location">Bujumbura International Airport</span>
                                        <br />
                                        <span class="detailed-time">22:10
                                            
                                             </span>
                                        <span class="detailed-location">Entebbe International Airport</span>
                                    </div>
                            </div>
                            <div>
                                            <span class="detailed-cabin">Cabin: Economy</span>
                                                <span> || </span>
                                                <span class="detailed-fare">Reservation Class: Q 
                                                (PROMO)
                                                	 
                                                </span>
                            </div>
                                <br />
                                <div class="transit-block">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 transit-icon"></div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 transit-connection">
                                        <span>Selected flight is connected via (  Entebbe
                                             )
                                        </span>
                                        <br />
                                        <span>
                                            ?Layover time begin? 9  hour(s) 50 minute(s) ?Layover time end?</span>
                                    </div>
                                </div>
                            <div class="detailed-route">Flight 2: UR-202 on 07/03/2020 </div>
                            <div class="common-block-for-margin">
                                <div class="between-flight-icon"></div>
                                    <div class="detailed-departure-flight-information">
                                        <span class="detailed-time">08:00  
                                        </span>
                                        <span class="detailed-location">Entebbe International Airport</span>
                                        <br />
                                        <span class="detailed-time">09:15
                                            
                                             </span>
                                        <span class="detailed-location">Nairobi - Jomo Kenyatta</span>
                                    </div>
                            </div>
                            <div>
                                            <span class="detailed-cabin">Cabin: Economy</span>
                                                <span> || </span>
                                                <span class="detailed-fare">Reservation Class: X 
                                                (PROMO)
                                                	 
                                                </span>
                            </div>
                    </div>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 detailed-right-area">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 without-membership-info">
                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 price-selection-side">
                    <span class="price-detail-header"></span>
                    <div class="passenger-details">
                        <span>
                            <i class="glyphicon glyphicon-info-sign"></i>
                            <a href="#PriceDetailModal" data-toggle="modal">
                                <span>Pricing Detail for</span>
                                    <span>1 Adult
                                    </span>
                                <span></span>
                            </a>
                        </span>
                    </div>
                    <div class="price-detail-body">
                        <table>
                            <tr>
                                <td>Ticket Cost</td>
                                <td>70.00 USD</td>
                            </tr>
                            <tr>
                                <td>Total Tax Amount</td>
                                <td>50.00 USD</td>
                            </tr>
                                <tr>
                                    <td>Total Surcharge</td>
                                    <td>80.00 USD</td>
                                </tr>
                            <tr>
                                <td class="price-selection-inside-title">Total Price</td>
                                <td class="price-selection-inside">200.00 USD</td>
                            </tr>
                        </table>
                    </div>
                </div><span class="col-lg-5 col-md-6 col-sm-6 col-xs-12 continue-side"><input type="submit" name="j_idt396" value="CONTINUE" class="continue-button" /></span>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 with-membership-info">
                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 loyalty-member-information">
                </div>
            </div>
        </div>
    </div>
    <div id="PriceDetailModal" class="modal price-details-modal" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h4 class="modal-title">Pricing Details
                    </h4>
                </div>
                <div class="modal-body">
                    <table class="table table-condensed">
                        <tbody>
                            <tr class="passengers" style="background-color: #ecf0f1;">
                                <td></td>
                                    <td style="font-weight: bold; text-decoration: underline; text-align: center;">ADULT</td>
                            </tr>
                            <tr class="base-fare" style="background-color: #fff">
                                <td style="font-weight: bold;">Base Fare</td>
                                    <td style="font-weight: bold; text-align: center;">70.00 USD
                                    </td>
                            </tr>
                                <tr class="taxes" style="background-color: #ecf0f1;">
                                    <td style="font-weight: bold;">Taxes</td>
                                        <td style="font-weight: bold; text-align: center;">40.00 USD
                                        </td>
                                </tr>
                                    <tr class="taxes-elements" style="background-color: #ecf0f1;">
                                        <td style="font-size: 12px;">BI</td>
                                                <td style="font-size: 12px; text-align: center;">40.00 USD
                                                </td>
                                    </tr>
                                <tr class="surcharges" style="background-color: #fff;">
                                    <td style="font-weight: bold; ">Surcharges</td>
                                        <td style="font-weight: bold; text-align: center;">80.00 USD
                                        </td>
                                </tr>
                                    <tr class="surcharges-elements" style="background-color: #fff;">
                                        <td style="font-size: 12px;">YR</td>
                                                <td style="font-size: 12px; text-align: center;">80.00 USD
                                                </td>
                                    </tr>
                            <tr style="background-color: #FFF;">
                                <td style="font-weight: bold;">Total Per Passenger</td>
                                    <td style="font-weight: bold; text-align: center;">190.00 USD
                                    </td>
                            </tr>
                            <tr style="background-color: #FFF;">
                                <td>Number of Passenger</td>
                                    <td style="text-align: center;">
                                        x1
                                    </td>
                            </tr>
                                <tr style="background-color: #ecf0f1;font-weight: bold;">
                                    <td>TOTAL</td>
                                    <td style="text-align: center;">190.00 USD
                                    </td>
                                </tr>
                                    <tr style="background-color: #FFF;">
                                        <td>Other Taxes</td>
                                        <td style="text-align: center;">10.00 USD
                                        </td>
                                    </tr>
                            <tr style="background-color: #ecf0f1;font-weight: bold; color:#c0392b;">
                                <td>GRAND TOTAL</td>
                                <td style="text-align: center;">200.00 USD
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div><span id="fareRulesDetailFragment">
     <div id="fareRulesDetailModal" class="modal price-details-modal" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h4 class="modal-title">Pricing Details
                    </h4>
                </div>
                <div class="modal-body">
                <div class="tab">
                	<div class="fare_rules_not_found">?IBE_MSG_FARE_RULES_NOT_FOUND?
                	</div>
                
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<style>
.tab {
	overflow: hidden;
	border-bottom: 1px solid #ccc;
}

.tablinks {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 10px;
	transition: 0.3s;
	background-color: #ccc;
}

.tablinks:hover {
    background-color: #ccc;
}

.tablinks.active {
    background-color: #69b342;
    color: #fff;
    border-radius: 10px 10px 0 0;
}

.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
	border-top: none;
	margin-bottom: 10px;
	width: 100%;
	float: left;
}
.rules{
	float: left;
    width: 100%;
    margin-bottom: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
	padding: 5px;
	background-color: #fff;
}
.rules .label {
    float: left;
    font-weight: bold;
    font-size: 16px;
    width: 100%;
    cursor: pointer;
}

.rules .rule__explanation {
    display: none;
    float: left;
    width: 100%;
    margin-top: 3px;
    font-size: 14px;
    margin-left: 5px;
    white-space: pre;
}
.rules .rule__explanation.toggled {
    display:block;
}

.segment__fare__rules{
	display: none;
}

.segment__fare__rules.toggled{
	display: block;
}

.segment__button{
	cursor: pointer;
    border: 1px solid #e5e5e5;
    background-color: #e5e5e5;
    padding: 5px;
	margin-bottom: 5px;
	float: left;
	color: #404040;
}
.segment__button.toggled{
	background-color: #69b342;
	color: #fff;
}


.rules .table-striped > tbody > tr:nth-of-type(odd){
	background-color: #fafafa;
}

.rules .label {
	background-color: #fff;
	color: #404040;
}

#fareRulesDetailModal .modal-body{
	float: left;
	width: 100%;
}
.segment__fare__rules table{
	width: 65%;
}
	</style></span>
            </div><span id="priceFreeze"></span></div>
                </div>
            </div>







	<div class="modal service-info">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">?Service Information?</h4>
				</div>
				<div class="modal-body">?Service Information Text?


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
            <!-- segmentGroup end		 -->
            <!-- research begin--><div id="research" class="modal" data-backdrop="static" aria-hidden="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                            <h4 class="modal-title">Search Again</h4>
                        </div>
                        <div class="modal-body"><div id="availabilitySearchForm">

		<div class="inline-form"><div class="col-lg-12"><table id="tripType" class="">
	<tr>
<td>
<input type="radio" checked="checked" name="tripType" id="tripType:0" value="ONE_WAY" onchange="mojarra.ab(this,event,'change','tripType','dynamicFlightSearchDiv')" /><label for="tripType:0"> One Way</label></td>
<td>
<input type="radio" name="tripType" id="tripType:1" value="ROUND_TRIP" onchange="mojarra.ab(this,event,'change','tripType','dynamicFlightSearchDiv')" /><label for="tripType:1"> Round Trip</label></td>
<td>
<input type="radio" name="tripType" id="tripType:2" value="MULTI_DIRECTIONAL" onchange="mojarra.ab(this,event,'change','tripType','dynamicFlightSearchDiv')" /><label for="tripType:2"> Multi Directional</label></td>
	</tr>
</table></div>

			<div class="clearpaddingbottom"></div><div id="dynamicFlightSearchDiv" class="availabilitySearchContainer">
				<div class="col-lg-6 col-sm-6 col-xs-12 selectHeight">
					<label for="depPort">From</label><div id="depPortDiv" class="input-group input-group-wide input-group-dep "><select id="depPort" name="depPort" class="form-control chosen-select search" size="1" onchange="mojarra.ab(this,event,'change','depPortDiv','dynamicFlightSearchDiv')">	<option value="" disabled="disabled">?From Placeholder?</option>
<optgroup label="Uganda">	<option value="EBB">Entebbe International Airport (EBB)</option>
</optgroup><optgroup label="Burundi (Uburundi)">	<option value="BJM" selected="selected">Bujumbura International Airport (BJM)</option>
</optgroup><optgroup label="Kenya">	<option value="MBA">Mombasa Moi International Airport (MBA)</option>
	<option value="NBO">Nairobi - Jomo Kenyatta (NBO)</option>
</optgroup><optgroup label="Somalia (Soomaaliya)">	<option value="MGQ">Aden Adde International Airport (MGQ)</option>
</optgroup><optgroup label="South Sudan (‫جنوب السودان‬‎)">	<option value="JUB">Juba Airport (JUB)</option>
</optgroup><optgroup label="Tanzania">	<option value="JRO">Kilimanjaro International Airport (JRO)</option>
	<option value="DAR">Mwalimu Julius K. Nyerere International Airport (DAR)</option>
	<option value="ZNZ">Zanzibar Airport (ZNZ)</option>
</optgroup></select></div>

					<div class="clearpaddingbottom"></div>
				</div>
				<div class="col-lg-6 col-sm-6 col-xs-12 selectHeight">
					<label for="arrPort">To</label><div id="arrPortDiv" class="input-group input-group-wide input-group-arr"><select id="arrPort" name="arrPort" class="form-control chosen-select search" size="1" onchange="mojarra.ab(this,event,'change','arrPortDiv','dynamicFlightSearchDiv')">	<option value="" disabled="disabled">?To Placeholder?</option>
<optgroup label="Uganda">	<option value="EBB">Entebbe International Airport (EBB)</option>
</optgroup><optgroup label="Kenya">	<option value="MBA">Mombasa Moi International Airport (MBA)</option>
	<option value="NBO" selected="selected">Nairobi - Jomo Kenyatta (NBO)</option>
</optgroup><optgroup label="Somalia (Soomaaliya)">	<option value="MGQ">Aden Adde International Airport (MGQ)</option>
</optgroup><optgroup label="South Sudan (‫جنوب السودان‬‎)">	<option value="JUB">Juba Airport (JUB)</option>
</optgroup><optgroup label="Tanzania">	<option value="JRO">Kilimanjaro International Airport (JRO)</option>
	<option value="DAR">Mwalimu Julius K. Nyerere International Airport (DAR)</option>
	<option value="ZNZ">Zanzibar Airport (ZNZ)</option>
</optgroup></select></div>

					<div class="clearpaddingbottom"></div>
				</div><div id="departureDateDiv" class="col-sm-12 col-xs-12 col-lg-6 col-sm-6 col-xs-12 selectHeight">
					<label for="departureDate">Departure Date</label>

					<div class="input-group input-group-wide input-group-callendar"><input id="departureDate" name="departureDate" value="02/03/2020" class="form-control" onchange="mojarra.ab(this,event,'valueChange','departureDateDiv','returnDateDiv')" min="01/03/2020" readonly="readonly" format="dd/MM/yyyy" placeholder="Choose Departure Date" type="date" />
					</div>

					<div class="clearpaddingbottom"></div></div>
				<div class="clearfix"></div>
				<div class="clearfix"></div>
					<div class="clearfix"></div>
					<div class="col-lg-12 col-sm-12 col-xs-12 search-again-item">
						<label>Adult (12+)</label>

						<div class="input-group input-group-wide input-group-adult"><select id="adult" name="adult" class="availability-search form-control h41 no-selectize" size="1">	<option value="0">0</option>
	<option value="1" selected="selected">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
</select>

						</div>

						<div class="clearpaddingbottom"></div>
					</div>

					<div class="col-lg-12 col-sm-12 col-xs-12 search-again-item">
						<label>Child (2-12)</label>

						<div class="input-group input-group-wide input-group-child"><select id="child" name="child" class="availability-search form-control no-selectize" size="1">	<option value="0" selected="selected">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
</select>



						</div>

						<div class="clearpaddingbottom"></div>
					</div>

					<div class="col-lg-12 col-sm-12 col-xs-12 search-again-item">
						<label>Infant (0-2)</label>

						<div class="input-group input-group-wide input-group-infant"><select id="infant" name="infant" class="availability-search form-control no-selectize" size="1">	<option value="0" selected="selected">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
</select>



						</div>

						<div class="clearpaddingbottom"></div>
					</div><div id="conditionalDiscountSection" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div><div id="cabinClassSection" class="col-lg-6 col-sm-6 col-xs-12 selectHeight cabin__class">
						<label for="cabinClassDiv">Cabin:</label><div id="cabinClassDiv" class="input-group input-group-wide input-group-cabin"><select id="cabinClass" name="cabinClass" class="form-control chosen-select search no-selectize" size="1">	<option value="" selected="selected">Select</option>
	<option value="BUSINESS">Business</option>
	<option value="ECONOMY">Economy</option>
</select></div>
						<div class="clearpaddingbottom"></div></div>
			
				<div class="clearfix"></div></div>

		</div></div>
                        </div>
                        <div class="modal-footer">
                            <div class="col-lg-3 col-xs-6">
                                <button type="button" class="btn btn-default btn-block btn-availabilitySearchClose" data-dismiss="modal">Close</button>
                            </div>
                            <div class="col-lg-4 col-xs-6 pull-right flip"><input id="btnSearch" type="submit" name="btnSearch" value="Flight Search" class="btn btn-danger btn-block pull-right flip" />
                            </div>
                        </div>
                    </div>
                </div></div>
            <!-- research end--><input type="hidden" name="javax.faces.ViewState" id="j_id1:javax.faces.ViewState:0" value="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" autocomplete="off" />

			</form>
        

		</div>