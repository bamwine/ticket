<div class="ReservationPages PaymentInfo MobileIndex">	
<form id="pass" name="pass" method="post" action="#" enctype="application/x-www-form-urlencoded">


<?php include 'navigation.php';?>

	<div class="container mainContainer">
				<div class="row">
					<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 tckt-prv"><span id="ticketPreviewError">
						<div data-title="Hata(lar) Olustu!" class="error-div"><div id="scriptValidationMessages"></div>
						</div></span>
						<div class="clearfix"></div><div id="priceFreezingPanel"></div><div id="paymentOptionsblock" class="form-inline">
						<!-- flight summary -->
						<div class="clearfix"></div>
						<div class="panel panel-default tppp ticket__prev__summary">
							<div class="col-lg-12 col-sm-12 col-md-12 nopadding tppsh pass__flight__summary">
								<h3 class="ssr-selection pass__flight__title">
								<span class="icon-flightPassInfo flight__pass__info__icon"></span>
								<span class="m-arrow arrow__icon"> <i class="flaticon-flight-info flight__info__icon"></i></span><span class="blue-bar pass__flight__info__bar">Passsenger and Flight Summary</span>
							</h3>
							</div>

							<div class="pass__flight__summary__heading col-lg-12 col-sm-12 col-md-12 ">
								<h3 class="panel-title tppt pass__flight__summary__title">
								Passsenger and Flight Summary
								
							</h3>
							</div><div class="panel-body tppb pass__flight__res__summary__body">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding summary-head pre__info">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding flight__dir">
				One Way reservation for:
			</div>
		<!--- DESKTOP -->
		<table class="payment-info-passenger-table">
			<thead>
				<tr>
					<th class="type">Passenger Type</th>
					<th class="title">Title *</th>
					<th class="name">Name and Surname</th>
					<th class="bdate">Birth Date</th>
				</tr>
			</thead>
			<tbody>
					<tr>
						
						<td class="title" data-title="?Type?"> Adult
						</td>
						<td class="title" data-title="Title *">MR
						</td>
						<td class="name" data-title="Name and Surname">
							<span>XXX BBBB</span>
						</td>
						<td class="bdate" data-title="Birth Date">
							<span>04/02/2003</span>
						</td>
						<td class="wheel-chair">

						</td>
					
					</tr>
			</tbody>
		</table>
		<!--- MOBILE -->
			<table class="payment-info-passenger-table-mobile fold-table">

				<tr class="view">
					<td class="name" data-title="Name and Surname">
						<i class="fa fa-caret-down" aria-hidden="true"></i>
						<span>XXX BBBB</span>
					</td>
				</tr>
				<tr class="fold">
					<div class="fold-content">
						<td>
							<table class="payment-info-passenger-table-mobile">
								<tr>
									<td class="type">Passenger Type</td>
									<td class="title" data-title="?Type?">ADLT</td>
								</tr>
								<tr>
									<td class="title">Title *</td>
									<td class="title" data-title="Title *">MR</td>
								</tr>
								<tr>
									<td class="bdate">Birth Date</td>
									<td class="bdate" data-title="Birth Date">
										<span>04/02/2003</span>
									</td>
								</tr>
							</table>
						</td>
					</div>


				</tr>
			</table>


	</div>
			<div class="clearfix"></div>
			<div class="clearline"></div>
			<div class="unique-flight accordion">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding summary-body segment__body">
					<span class="flight__count">Flight 1</span>
					<span class="accordion-toggle not-checked">
						<i class="fa fa-chevron-up" aria-hidden="true"></i>
					</span>
					<div class="col-lg-12 col-md-12 col-xs-12 col-sm-6 nopadding clearfix segment__body__info">
						<div class="ports segment__ports col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
							<div class="show-inline">
								<span class="from">
									Bujumbura International Airport (BJM)
	
								</span>
								<span class="plane__divider"></span>
								<span class="to">
	
									Entebbe International Airport (EBB)
								</span>
							</div>
							<div class="show-inline">
								<span class="segment__code">
									(UR-361)
									
								</span>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 nopadding clearfix dep__time">
							<i class="flaticon-clock61 clock__icon"></i>
							<span class="dep__time__title">Departure Date and Hour</span>
							<span class="dep__time__time">06/03/2020 - 19:55
							</span>
						</div>


						<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 nopadding clearfix arr__time">
							<i class="flaticon-clock61 clock__icon"></i>
							<span class="arr__time__title">Arrival Date and Hour</span>
							<span class="arr__time__time">06/03/2020 - 22:10
							</span>
						</div>
						
						<div class="accordion-content  "><div class="segment__class col-lg-3 col-md-12 col-sm-12 col-xs-12">
								Booking Class:
								<span>Q</span></div><div class="cabin col-lg-3 col-md-12 col-sm-12 col-xs-12">
								Cabin:
								<span> Economy</span></div><div class="fare-group col-lg-3 col-md-12 col-sm-12 col-xs-12">
								Fare Group:
								<span>PROMO</span></div><div class="modal-area col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<span href="href=#FareRulesModal_PROMO" data-toggle="modal"> </span>

								
								<div id="FareRulesModal_PROMO" class="modal">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
												<h4 class="modal-title">?IBE_MSG_PYI_FRS_Fare_Rule_Title?
												</h4>
											</div>
											<div class="modal-body">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-success" data-dismiss="modal">?IBE_MSG_PYI_FRS_Close?</button>
											</div>
										</div>
									</div>
								</div></div>
						</div>

					</div>



				</div>
					<table class=" fold-table add-ssr-table-mobile accordion-content  ">
						<tr class="view">

							<td class="name" data-title="Name and Surname">
								<i class="fa fa-caret-down" aria-hidden="true"></i>
								<span>XXX BBBB</span>
							</td>
						</tr>
						<tr class="fold">
							<td>
								<div class="fold-content">
									<table>
										<tr>
											<td class="luggage">Luggage</td>
											<td class="luggage" data-title="Luggage">
													2 ?IBE_MSG_PYI_FRS_Pieces?
													:
												
													23 KG
													<br />

											</td>
										</tr>
										<tr>
											<td class="seat">Seat</td>
											<td class="seat" data-title="Seat">
											</td>
										</tr>
										<tr>
											<td class="catering">Catering</td>
											<td class="catering" data-title="Catering">
											</td>
										</tr>
										<tr>
											<td class="ssr">SSR</td>
											<td class="ssr" data-title="SSR">
											</td>
										</tr>
									</table>
								</div>
							</td>

						</tr>

					</table>



				<div class="clearfix"></div>
				<div class="accordion-content ">
					<table class="payment-info-ssr-table">
						<thead>
							<th class="name">Name and Surname</th>
							<th class="luggage">Luggage</th>
							<th class="seat">Seat</th>
							<th class="catering">Catering</th>
							<th class="ssr">SSR</th>
						</thead>
						<tbody>
								<tr>
									<td class="name" data-title="Name and Surname">
										<span>XXX BBBB</span>
									</td>
									<td class="luggage" data-title="Luggage">
											2 ?IBE_MSG_PYI_FRS_Pieces?
											:
										
											23 KG
											<br />

									</td>
									<td class="seat" data-title="Seat">
									</td>

									<td class="catering" data-title="Catering">
									</td>

									<td class="ssr" data-title="SSR">
									</td>
								</tr>
						</tbody>
					</table>
				</div>

				<div class="clearfix"></div>
				<div class="clearline"></div>
			</div>
			<div class="clearfix"></div>
			<div class="clearline"></div>
			<div class="unique-flight accordion">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding summary-body segment__body">
					<span class="flight__count">Flight 2</span>
					<span class="accordion-toggle not-checked">
						<i class="fa fa-chevron-up" aria-hidden="true"></i>
					</span>
					<div class="col-lg-12 col-md-12 col-xs-12 col-sm-6 nopadding clearfix segment__body__info">
						<div class="ports segment__ports col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
							
							<div class="show-inline">
								<span class="segment__code">
									(UR-202)
									
								</span>
							</div>
						</div>

						


						
						
							</div>



				</div>
					

			</div>
			
			</div>
						
						</div>
										
						<!-- flight summary end  -->
								<div class="clearfix"></div>
					</div>
						
						
						<br />
					</div>
					
					
					<div class="sidebarMarginDiv"></div>
					<div class="ticket-preview-sticky col-lg-3 col-md-12 col-sm-12 col-xs-12">
						<div class="ticketpreview-sticky sticky ticket__prev__sidebar"><div id="paymentSummary">


		


		<div class="payment__summary__table">

			<div class="payment__summary__table__heading">

				<span class="payment__summary__table__title">
								 <span class="icon-cartInfo cart__title"></span> Your Basket
							</span>
			</div>

			<div class="payment__summary__table__content">
				<div class="flinfo-t segment__table__cont">
					<table class="table table-condensed">

						<tbody>

										<tr>
											<td class="tb1 td__one">
												<span>
				                                            Ticket Fare
				                                        </span>
											</td>
											<td class="tb2 td__two">
												<span>
												70.00 USD
												</span>

											</td>
										</tr>

										<tr>
											<td class="tb1 td__one">
												<span href="#TaxTypesModal" data-toggle="modal" class="tax__types__modal__link"> 
														Tax 
													</span>
											</td>

											<td class="tb2 td__two">
												<span href="#TaxTypesModal" data-toggle="modal" class="tax__types__modal__link">50.00 USD
													</span>
											</td>
										</tr>
										<tr>
											<td class="tb1 td__one">
												<span href="#SurChargeModal" data-toggle="modal" class="tax__types__modal__link"> 
			                                            Surcharge
			                                            </span>
											</td>
											<td class="tb2 td__two">
												<span href="#SurChargeModal" data-toggle="modal" class="tax__types__modal__link">
												80.00 USD
												</span>
											</td>

										</tr>
										<tr>
											<td class="tb1 td__one bold">
													TOTAL
												
											</td>
											<td class="tb2 td__two bold">
												<span>200.00 USD</span>
											</td>

										</tr>
						</tbody>
					</table>
				</div>
			</div>

		</div></div>
		
					</div>
					<div class="clearfix"></div>
				</div>

	
				
			</div>
			
			
			
			</div>
			

			</form>
		

		</div>