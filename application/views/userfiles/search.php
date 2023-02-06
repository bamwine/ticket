<div class="ReservationPages Availability MobileIndex">	
<form id="FlightSearch" name="FlightSearch" action="<?php echo base_url()?>install/index/confirm" method="POST" >
<input type="text" name="datas[]" id="datas" />
 <?php include 'navigation.php';?>
 
	<div id="mainContent" class="main__container">
		<div class="container availability__main__container">
			<div class="row">
				<div id="subContent">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 availability-content"><div id="errorSection" class="error-div">
							<ul id="scriptValidationMessages" class="error-div">
							</ul></div>
<div id="extraContentA">
</div>
<div id="flightsGrid" class="all-routes">
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
							<?php $getclassd	= $getclass;
							foreach($getclassd as $row){?>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4  fare-class" style="background-color:<?php echo $row['color']?>;">
												<a href="#" data-toggle="modal">
													<span><?php echo $row['name']?> </span>
													<sup>
														<i class="glyphicon glyphicon-info-sign"></i>
													</sup>
												</a>
										</div>
							<?php } ?>
										
							</div>
						
						</div>
						
						<?php $getclassd	= $flightschedule;
							foreach($getclassd as $row){ ?>
						<div id="<?php echo $row['flight_no']?>" class="flight-details true">
						
		<div class="info col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 departure-info">
			<span class="departure-time"><?php echo $row['departure_time']?></span>
			<br />
			<div class="departure-airport"><?php echo $row['from_city']?></div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 divider  ">
			<div class="plane-icon-container">
				<div class="plane-icon-image">
					
				</div>
			</div>
		</div>
		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 arrival-info">
			<span class="arrival-time"><?php echo $row['arrival_time']?>  
											</span>
				<span class="another-day">+1</span>
			<br />
			<div class="arrival-airport"><?php echo $row['to_city']?></div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 modal-side">
			<a href="#<?php echo $row['flight_no']?>_0_modal" data-toggle="modal">
			<span class="modal-side-links">  <i class="glyphicon glyphicon-info-sign"></i>
					Travel duration:  12  hour(s) 20 minute(s) (1 layover(s))
				
			</span></a>
		</div>
		

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 flight-extras">
</div>
</div>

<div class="prices col-lg-8 col-md-8 col-sm-8 col-xs-12">

		<?php $flightpack	= $getclass;
		foreach($flightpack as $rowpack){
			
			
		?>

		
		
	<?php $prices	= $this->crud_model->get_flights_types_money($row['flight_no'],$rowpack['class_id']);
	
			//echo "class".$rowpack['class_id'];
			//echo "class".$rowpack['class_price'];
			//echo $row['flight_no'];
			
			if(!$prices){
			?>	
				<div class="not-selectable price col-lg-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="inner-price not-selectable-inner false">
			<span>Sold Out</span>
		</div>
	</div>
				
			<?php	
			} else {
			
	foreach($prices as $row2){
		
		
	 if($row2['seats']=="" || $row2['seats']==0||empty($row2)){
		 
	
		?>
	<div class="not-selectable price col-lg-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="inner-price not-selectable-inner false">
			<span>Sold Out</span>
		</div>
	</div>
		
	<?php
	} else {
	?>
	
	
		<div class="button-fare price col-lg-4 col-md-4 col-sm-4  true fare-link ">
			
			<div class="inner-price selectable-inner">
			<a id="xcxc">
					 <div class="mobile-tag col-xs-4 col-md-12 col-sm-12 col-lg-12"><?php echo $this->crud_model->get_flights_pakagename($row2['class_name']);?></div>
					 <div class="mobile-price col-xs-4 col-md-12 col-sm-12 col-lg-12 true">
							<span class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><?php echo $row2['class_price']?>.00</span>
							<span class="col-lg-12 col-xs-12">USD</span>
					 </div>

						<div class="price-button col-xs-4 col-md-12 col-sm-12 col-lg-12">
							<button class="price-button-inside false" id="<?php echo $row['flight_no']?>:<?php echo $row2['class_name']?>:<?php echo $row2['class_price']?>">
									SELECT
								
							</button>
						</div>
								<span class="last-seat">
																Last
																<?php echo $row2['seats']?>
																Seats
															</span>
						<div class="clearfix"></div></a>
				</div>
		
		</div>
	
	<?php 
	
}


}

			}
} 

?>
	
	
</div>
<!-- desktop -->
<div class="clearfix"></div>
<!-- branded --></div>

						 
						 <?php } ?>
						 
						<div>
						</div>
						</div>

	<div class="pagination__parent">
		<div class="pagination  pageList0"></div>
	</div>

					</div>
				</div>
				<!-- flightInfoPanel  begin-->
				<div id="sidebarInfoA" class="flight__selection__sidebar">
				</div>
				<!-- flightInfoPanel  end-->
			</div>
			
	<?php  
		//if ($this->session->userdata('searchdata')) {
		$searchdata=$this->session->userdata('searchdata');
		
		?>		
	<div id="basket" class="sticky-basket">
	<div class="basketCollepse">
		<div class="basket-collapse-title">
			<span class="show-details-label"><i class="glyphicon glyphicon-chevron-up"></i>Show Details</span>
			<span class="hide-details-label"><i class="glyphicon glyphicon-chevron-down"></i>Hide Details</span>
		</div>
	</div>

	<div class="clear-selection"><a  onclick="">Clear Selection</a> 
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
				<span class="route-information"><?php echo $searchdata[0]['from_city']; ?> &gt; <?php echo $searchdata[0]['to_city']; ?></span>
				<br />
				<span class="route-departing-location">Departing From: <?php echo $searchdata[0]['from_city']; ?></span>
					<br />
					<span class="route-departing-date">
					Departing At
								<?php echo $searchdata[0]['departure_date']; ?> - <?php echo $searchdata[0]['departure_time']; ?> 
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
			<span class="price-data"><?php echo $searchdata[1]['class_price']; ?>.00 USD</span>
			<br />
			<span class="show-detail basketCollepse"><i class="glyphicon glyphicon-chevron-up"></i>Show Pricing Details</span>
			<br />
		</div><span class="col-lg-5 col-md-6 col-sm-6 col-xs-12 continue-side"><input type="submit" name="" value="CONTINUE" class="continue-button" /></span>
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
					<div class="detailed-route">Flight : <?php echo $searchdata[0]['flight_no']; ?> on <?php echo $searchdata[0]['departure_date']; ?> </div>
					<div class="common-block-for-margin">
						<div class="between-flight-icon"></div>
							<div class="detailed-departure-flight-information">
								<span class="detailed-time"><?php echo $searchdata[0]['departure_time']; ?>  
								</span>
								<span class="detailed-location"><?php echo $searchdata[0]['from_city']; ?></span>
								<br />
								<span class="detailed-time"><?php echo $searchdata[0]['arrival_time']; ?>  
									
									 </span>
								<span class="detailed-location"><?php echo $searchdata[0]['to_city']; ?></span>
							</div>
					</div>
					<div>
									<span class="detailed-cabin">Cabin: Economy</span>
										<span> || </span>
										<span class="detailed-fare">Reservation Class: <?php echo $this->crud_model->get_flights_pakagename($searchdata[1]['class_name']);?>
											 
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
						<td><?php echo $searchdata[1]['class_price']*0.4; ?>.00 USD</td>
					</tr>
					<tr>
						<td>Total Tax Amount</td>
						<td><?php echo $searchdata[1]['class_price']*0.25; ?>.00 USD</td>
					</tr>
						<tr>
							<td>Total Surcharge</td>
							<td><?php echo $searchdata[1]['class_price']*0.35; ?>.00 USD</td>
						</tr>
					<tr>
						<td class="price-selection-inside-title">Total Price</td>
						<td class="price-selection-inside"><?php echo $searchdata[1]['class_price']; ?>.00 USD</td>
					</tr>
				</table>
			</div>
		</div><span class="col-lg-5 col-md-6 col-sm-6 col-xs-12 continue-side"><input type="submit" name="" value="CONTINUE" class="continue-button" /></span>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 with-membership-info">
		<div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 loyalty-member-information">
		</div>
	</div>
</div>

</div>
	
	</div>
	<span id="priceFreeze"></span>
	
	</div>
	   
	<?php 
	
	
	//} 
	
	?>
	   </div>
	</div>

    

</div>

</form>
</div>