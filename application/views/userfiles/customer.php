<div class="ReservationPages PaymentInfo MobileIndex">	
<form id="pass" name="pass" method="post" action="<?php echo base_url()?>install/payment" enctype="application/x-www-form-urlencoded">
<input type="text" name="datas" id="datas" value="<?php echo $session ;?>"/>


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
								<span class="from">
									Entebbe International Airport (EBB)
	
								</span>
								<span class="plane__divider"></span>
								<span class="to">
	
									Nairobi - Jomo Kenyatta (NBO)
								</span>
							</div>
							<div class="show-inline">
								<span class="segment__code">
									(UR-202)
									
								</span>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 nopadding clearfix dep__time">
							<i class="flaticon-clock61 clock__icon"></i>
							<span class="dep__time__title">Departure Date and Hour</span>
							<span class="dep__time__time">07/03/2020 - 08:00
							</span>
						</div>


						<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 nopadding clearfix arr__time">
							<i class="flaticon-clock61 clock__icon"></i>
							<span class="arr__time__title">Arrival Date and Hour</span>
							<span class="arr__time__time">07/03/2020 - 09:15
							</span>
						</div>
						
						<div class="accordion-content  "><div class="segment__class col-lg-3 col-md-12 col-sm-12 col-xs-12">
								Booking Class:
								<span>X</span></div><div class="cabin col-lg-3 col-md-12 col-sm-12 col-xs-12">
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
			</div></div>
							<!-- Checkin Panel End -->
							<div class="clearfix"></div>
						</div>
										
						<!-- flight summary end  -->
								<div class="cont payment__area">
									<div class="col-lg-12 col-sm-12 col-md-12 nopadding tppdh payment__heading">
										<h3 class="ssr-selection payment__title">
										<span class="icon-paymentContainer payment__icon"></span>
										<span class="m-arrow arrow__icon"> <i class="flaticon-card card__icon"></i></span><span class="blue-bar title__bar">Payment</span>
								
									</h3>
									</div><div id="totalPaymentAmount" class="col-lg-12 col-sm-12 col-xs-12 nopadding tpp payment__heading">
										<h3 class="ssr-selection payment__title">
										Payment
										
											<span class="pull-right total__payment"> 
	                                            	
	                                            <span class="total" id="totalAmountPayment">200.00 USD
													</span>
											</span>
									</h3></div>
									<div class="clearfix"></div><div id="paymentTabContainer" class="paymentTabContainer accordionContainer">
		<!--credit card captured start-->
					<!-- title --><div id="j_idt300" class="true PAYHOST accordion_title active" onclick="mojarra.ab(this,event,'click',0,'paymentTabContainer paymentSummary totalPaymentAmount ticketPreviewError')" cc_refid="502292">
						PAY FOR TICKET USING:
						</div>
					<!-- body --><div class="accordion_content captured-card-content"><span class="col-lg-7">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 captured-card-text">
						</div>
						<div class="col-lg-4 col-md-4 col-sm-3 col-xs-offset-4 col-xs-6 col-lg-offset-0 cc-captured-logo"><div class="payment_system_type_cc_PAYHOST en"></div>
						</div>
								<div class="clearfix"></div><div id="creditCardAddress"></div></span>
						<div class="col-lg-5 col-md-5 hidden-xs hidden-sm credit-card-image">
								<div class="card-wrapper"></div>
						</div>
							<div class="payment-types col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<h4 class="dangerous-title"></h4> 
								<div class="payment-type-image col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 interswitch-logo" src="<?php echo base_url() ?>uploads/combined-payment.png" />
								</div>
							</div><div id="rules-and-conditions2">	
							<div class="confirm__label col-sm-12">
								<validation for="buy-rules">Please Confirm General Rules and Regulations</validation>
								<input type="checkbox" name="buy-rules" id="buy-rules" />
								<label for="buy-rules">I have read and accept
					                        <a style="text-decoration: underline;" data-toggle="modal" href=".general-rules">General Rules and Conditions</a>				                        
											<!-- fare rules -->
											<!-- fare rules -->
					                        <br class="hidden-lg hidden-sm hidden-md" />
					                        <br class="hidden-lg hidden-sm hidden-md" />
					                    </label>
								<div class="clearfix"></div>
								<br />
								<div class="clearfix"></div>
							</div>
							<div class="confirm__label col-sm-12" style="display:none" id="creditCardOwnerRules">
								<validation for="buy-rules">?IBE_MSG_PYI_FPA_Please_confirm_Credit_card_ownerr_Rules_and_Regulations?</validation>
								<input type="checkbox" name="card-owner-rules" id="card-owner-rules" />
								<label for="card-owner-rules">?IBE_MSG_PYI_FPA_CC_read_and_accept_1?
					                        <a style="text-decoration: underline;" data-toggle="modal" href=".credit-card-owner-rules">?IBE_MSG_PYI_FPA_Credit_card_owner_Rules_and_Conditions?</a> 
					                        ?IBE_MSG_PYI_FPA_CC_read_and_accept_2?
					                        <br class="hidden-lg hidden-sm hidden-md" />
					                        <br class="hidden-lg hidden-sm hidden-md" />
					                    </label>
								<div class="clearfix"></div>
							</div></div><div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 bottom__cont__area accordion-bottom-area">
		<div class="col-lg-4 col-md-4 col-xs-10 col-sm-4 buySectionButtons bottom__cont rtl-right"><input id="btnBuy" type="submit" name="btnBuy" value="BUY TICKET" class="btn btn-danger btn-contBuy  buy__btn  btn-accordion-click" />
		</div></div>

	<div class="clearfix"></div></div>
		<!--credit card captured end-->
			<!-- reservation title --><div id="j_idt364" class="true RES accordion_title " onclick="mojarra.ab(this,event,'click',0,'paymentTabContainer')">
				MAKE RESERVATION AND PAY LATER
				</div>
			<!-- reservation body --><div class="payment-option-img"></div></div>
									<div class="clearfix"></div>
								</div>

							<div class="clearfix"></div><div id="binDiscountPanel" class="modal fade "><input id="appyDiscount" type="hidden" name="appyDiscount" value="false" />
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header"><a id="j_idt422" href="#" onclick="mojarra.ab(this,event,'click',0,'binDiscountPanel');return false" class="close">
							×
							</a>
						<h4 class="modal-title">?IBE_MSG_ANC_BIN_installments_title?
							</h4>
					</div>
					<div class="modal-body" id="installments-body">
						<div class="panel panel-default tppp ticket__prev__summary">
							<div class="pass__flight__summary__heading col-lg-12 col-sm-12 col-md-12 ">
								<h3 class="panel-title tppt pass__flight__summary__title">
									Campaigns
								</h3>
							</div>
							<div class="col-lg-12 col-xs-12 well tpcp discount__content">
								<div data-title="?IBE_MSG_PYI_Errors_Occured?" class="error-div">
								</div>

								
								<div class="inline-form">
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="modal-footer"><input id="j_idt441" type="submit" name="j_idt441" value="Close" class="btn btn-success" onclick="mojarra.ab(this,event,'click',0,'binDiscountPanel');return false" />
					</div>
				</div>
			</div></div></div>
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
									<div id="currency_select" class="well">
										<div class="cur-select currency__selector">
											<span class="col-md-10 col-xs-9 col-sm-10 col-lg-8 nopadding form-inline currency__selector__wrap"> 
										<div class="change-currency-txt change__currency__label">Change Currency</div>
                                    </span>
											<span class="col-lg-4 col-md-2 col-xs-3 col-sm-2 text-right nopadding select__currency__form">
										<div class="change-currency-input select__currency__input">
											<div class="input-group"><select id="currency" name="currency" class="form-control b-r no-selectize" size="1" onchange="submit()">	<option value="USD" selected="selected">USD</option>
	<option value="UGX">UGX</option>
</select>   
											</div>
										</div>
									</span>
											<div class="clearfix"></div>
										</div>

										<div class="clearfix"></div>
									</div>		
					</div>
					<div class="clearfix"></div>
				</div>


				<div id="TaxTypesModal" class="modal">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
								<h4 class="modal-title">Tax List
									</h4>
							</div>
							<div class="modal-body">
								<table class="table table-condensed ">
									<tbody>
											<tr>
												<td class="tb1 td__one">
													<span>
															?IBE_MSG_PYI_DNC_tax_label_BI? 
														</span>
												</td>

												<td class="tb2 td__two">
													<span>40.00 USD
														</span>
												</td>
											</tr>
											<tr>
												<td class="tb1 td__one">
													<span>
															UG 
														</span>
												</td>

												<td class="tb2 td__two">
													<span>10.00 USD
														</span>
												</td>
											</tr>
										<tr>
											<td class="tb1 td__one">
												<span> 
				                                       <strong>Total Tax</strong>
				                                   </span>
											</td>
											<td class="tb2 td__two">
												<span class="modal-currency">50.00 USD</span>
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
				
				

				<div id="SurChargeModal" class="modal">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
								<h4 class="modal-title">Surcharge List
									</h4>
							</div>
							<div class="modal-body">
								<table class="table table-condensed ">
									<tbody>
											<tr>
												<td class="tb1 td__one">
													<span>
															YR 
														</span>
												</td>

												<td class="tb2 td__two">
													<span>80.00 USD
														</span>
												</td>
											</tr>
										<tr>
											<td class="tb1 td__one">
												<span> 
				                                       <strong>Total Surcharge</strong>
				                                   </span>
											</td>
											<td class="tb2 td__two">
												<span><strong>80.00 USD</strong></span>
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
				
				
				
			</div>
			</div>
			
			<div class="clearfix"></div>
	<div class="modal general-rules">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">General Rules and Conditions</h4>
				</div>
				<div class="modal-body"><ol>
<li><strong>Agreement between You and Uganda Airlines</strong></li>
</ol>
<p><strong>PLEASE READ THESE TERMS AND CONDITIONS CAREFULLY BEFORE USING THIS WEBSITE. IF YOU DO NOT AGREE WITH THESE TERMS AND CONDITIONS, YOU MUST DISCONTINUE USING THIS WEBSITE.</strong></p>
<p>Thank you for visiting Uganda Airlines' website www.ugandairlines.com (the "Website"). The website is owned and operated by Uganda National Airlines Company Limited (trading as and hereinafter referred to as "Uganda Airlines") whose principal office is at EagleAir Hangar, Entebbe International Airport, Uganda. Uganda Airlines is a limited company formed by the Government of the Republic of Uganda in January 2018.</p>
<ul>
<li>For the avoidance of doubt, these Terms and Conditions relate only to your access to and use of the Website, as a guest or registered user, and activity on this Website will also be subject to our Conditions of Carriage. These will apply if you enter into a booking with us;</li>
<li>our Privacy Policy. This sets out the terms upon which we process, store and manage any personal data we collect from you, or that you agree to provide to us;</li>
<li>our Acceptable Use Policy. This sets out the permitted uses and any prohibited activity or use in relation to our Website. When using our Website, you must comply with the Acceptable Use Policy at all times;</li>
<li>our Cookie Policy. This explains the use of cookies on our Website and relevant information.</li>
</ul>
<p>By using this Website, you unconditionally and irrevocably confirm, agree and accept all of the terms and conditions contained herein and any other legal notices, policies, and guidelines linked to these Terms and Conditions (Agreement).</p>
<p>You represent and warrant that you possess the legal right, are of legal age and hold the capacity to enter into this Agreement. Further, you undertake that you will use this Website only in accordance with the Agreement.</p>
<ol start="2">
<li><strong>Modification</strong></li>
</ol>
<p>We may change these Terms and Conditions at any time without advance notice and at our sole discretion. Any changes to these Terms and Conditions shall become effective once posted on the Website and shall supersede all previous terms and conditions posted; however, the changes will not have any retrospective effect on contractual arrangements made through this Website prior to the changes coming into effect.</p>
<p>Your continued use of this Website after any change means that you have irrevocably accepted the amended and/or changed terms and conditions.</p>
<ol start="3">
<li><strong>Disclaimer</strong>
<ol>
<li><strong>General</strong></li>
</ol>
</li>
</ol>
<p>This Website is made available to you free of charge. Your access to and use of software and other materials on, though, or in connection with this Website is solely at your own discretion and risk. We make no warranty and/or guarantee whatsoever about the reliability, applicability, operation, stability or virus-free nature of such software or the Website.</p>
<p>We have taken all reasonable steps to ensure that the information provided by us on this Website is accurate. However, we cannot and have not checked the accuracy of the information, content and/ or data provided by external and third-party sources, for example, by the providers of other information, or of other parties linked to or from the Website. You agree and understand that we do not control or manage the content of any third-party websites and as such we cannot comment upon or guarantee the information they are providing. Your use of any third-party links or deviations away from the Website is solely at your own risk.</p>
<ol>
<li><strong>Reliance</strong></li>
</ol>
<p>Commentary and other materials posted on this Website are not intended to amount to advice or guidance upon which any reliance should be placed. Therefore, to the maximum extent permitted by applicable law, we disclaim all liability and responsibility whatsoever and howsoever arising from any reliance or guidance placed on such materials or information by any visitor to our Website, or by anyone who may be informed or act upon any of its contents.</p>
<ol>
<li><strong>Availability</strong></li>
</ol>
<p>We aim to ensure that the availability of the Website will be uninterrupted and that transmissions will be error-free. However, due to the nature of the internet, this cannot be guaranteed.</p>
<p>We reserve the right (and for any reason whatsoever) to withdraw or amend the service(s) we provide on the Website at any time, without notice and at our sole discretion. Also, your access to the Website may occasionally be suspended or restricted to allow for repairs, maintenance, or the introduction of new facilities or services. Although we will attempt to limit the frequency and duration of any such suspension or restriction, we will not be liable if for any reason the Website is unavailable at any time or period.</p>
<ol>
<li><strong>Access</strong></li>
</ol>
<p>You are responsible for making all arrangements necessary for you to have access to the Website and agree that you are solely responsible for all costs and expenses you may incur in relation to your use of the Website.</p>
<p>In addition, you are responsible for ensuring all persons accessing the Website through your internet connection and in your home or organization are fully aware of the existence of the Agreement and that they fully comply with it.</p>
<p>We seek to make the Website as accessible as possible. If you have any difficulties using the Website, please refer to the Website contact section below.</p>
<ol>
<li><strong>Account and Passwords</strong></li>
</ol>
<p>Where you are provided with a user name, code or password or similar information forming part of our security procedures, you must treat this information as confidential at all times and therefore you agree not to disclose it to any third party</p>
<p>We reserve the right to suspend, withdraw or disable any user name, code or password at any time if in our sole opinion you have failed to comply with any of the provisions of the Agreement.</p>
<p>It is your responsibility to notify us if you know or suspect that anyone other than you become aware of your Website user name, code or password and/or any other detail that should be confidential to you. All such notifications must be made to customercare@ugandairlines.com</p>
<ol>
<li><strong>Disclaimer of warranties</strong></li>
</ol>
<p>To the maximum extent permitted by applicable law, we disclaim all warranties, representations, covenants and/or guarantees relating to the information, data, software, applicability, products and/or services contained in this Website. All such information, data, software, applicability, products and/or services are provided 'as is' without warranty of any kind, including all implied warranties and conditions of merchantability, fitness for a particular purpose, title and non-infringement, irrespective of jurisdiction.</p>
<ol start="4">
<li><strong>Limitation of Liability</strong></li>
</ol>
<p>To the extent that you suffer damages whilst using the Website as a direct result of our negligence, our liability for those damages shall be strictly limited to the price that you have paid to purchase products and/or services on the Website.</p>
<p>However, we will not be liable, in contract, tort (including, without limitation, negligence), pre-contract or other representations (other than fraudulent or negligent misrepresentations) or otherwise out of or in connection with the Website for any other losses (including without limitation loss of revenues, profits (whether direct or indirect), contracts, business or anticipated savings), any loss of goodwill or reputation or any special, consequential or indirect losses suffered or incurred by you arising out of or in connection with your access to, use and/or availability of the Website.</p>
<p>For the avoidance of doubt, we shall have no liability to you whatsoever for any losses or damages you suffer as a result of accessing a third-party website from our Website.</p>
<p>Liability for carriage by air performed by us shall be governed by the Conditions of Carriage.</p>
<p>We will not be liable for any loss or damage caused by a virus, distributed denial-of-service attack, or other technologically harmful material that may infect your computer equipment, mobile communication device, applications, computer programmes, data or any other material, due to your use of the Website or downloading any content from it, or any website(s) linked to it.</p>
<p>Nothing in this limitation of liability shall exclude liabilities not permitted to be excluded by applicable law.</p>
<ol start="5">
<li><strong>Indemnity</strong></li>
</ol>
<p>As a condition of use of this Website, you agree to hold us harmless and indemnify us from and against any and all liabilities, losses, claims, expenses (including attorney's fees) and damages (whether direct or indirect) arising out or in connection with claims resulting from your use of this Website, including without limitation any claims or losses alleging facts that if true would constitute a breach by you of the Agreement.</p>
<ol start="6">
<li><strong>Links to third-party websites</strong></li>
</ol>
<p>Although the Website may have links to &lsquo;Preferred Partner&rsquo; or third-party websites, these websites are not operated, controlled or maintained by Uganda Airlines. As such, we cannot guarantee the accuracy or reliability of the information, data, products or services provided on such third-party sites nor the security of any information or date you may provide. Third-party links and pointers are included solely for your convenience and do not constitute any endorsement by us.</p>
<p>You assume sole responsibility and risk for use of third-party links and pointers.</p>
<ol start="7">
<li><strong>Limitations on use</strong></li>
</ol>
<p>You agree to use this Website solely to determine the availability of goods and services and make legitimate reservations or transact business with us. You agree to use the website only for personal, non-commercial use and not to make false reservations or any reservation in anticipation of demand.&nbsp;</p>
<p>We may cancel, without notice and at our sole discretion, all confirmations associated with multiple reservations to one or more destination on or about the same date.</p>
<p>You agree to not abuse the Website - 'abuse' includes, without limitation, using the Website to:</p>
<ul>
<li>defame, harass, stalk, threaten, abuse or otherwise violate others' rights as defined by any applicable law;</li>
<li>harm or interfere with the operation of others' computers and software in any respect, including, without limitation, by uploading, downloading or transmitting corrupt files or computer viruses;</li>
<li>violate applicable intellectual property, publicity or privacy rights, including, without limitation, by uploading, downloading or transmitting materials or software;</li>
<li>omit or misrepresent the origin of, or rights in, any file you download or upload, including, without limitation, by omitting proprietary language, author identifications, or notices of patent, copyright or trademark;</li>
<li>transmit, post, or otherwise disclose trade secrets, or other confidential or protected proprietary material or information;</li>
<li>download or upload files that are unlawful to distribute through the Website;</li>
<li>interfere with or disrupt the Website or servers or networks connected to the Website, including attempting to interfere with the access of any other user, host or network, including without limitation overloading, initiating, propagating, participating, directing or attempting any &lsquo;denial-of-service&rsquo; attacks, &lsquo;spamming&rsquo;, &lsquo;crashing&rsquo;, &lsquo;flooding&rsquo; or &lsquo;mail bombing&rsquo; the Website;</li>
<li>direct bots, spiders, crawlers, avatars, intelligent agents or any other automated process at Uganda Airlines&rsquo; computer systems or otherwise, create unreasonable load upon any of Uganda Airlines&rsquo; computer hardware, network, storage, input/output or electronic control devices or infrastructure;</li>
<li>transmit any information or software obtained through the Website, or copy, create, display, distribute, license, perform, publish, recreate, reproduce, sell, or transfer works deriving from the Website;</li>
<li>cause to appear any pop-up, pop-under, exit windows, expanding buttons, banners, advertisement, or anything else which minimizes, covers, or otherwise inhibits the full display of the Website;</li>
<li>use the Website in any way which interferes with the normal operation of the Website;</li>
<li>falsely use a password or personal identification number during logging into the Website, or misrepresent one's identity or authority to act on behalf of another; or</li>
<li>behave or omit to behave in any manner that violates any of these Terms and Conditions.</li>
</ul>
<p>Since we provide services and products in many parts of the world, this Website (and its links and pointers) may refer to certain goods, products and/or services that are not available in your area. A reference to goods, products and/or services without limiting their geographical scope does not automatically imply that we offer or intend to offer the same in all locations.</p>
<p><strong>Uploading Content to the Website</strong></p>
<p>If you choose to make use of a feature permitting you to upload content to the Website, or to make contact with other users of the Website, you must comply with the content requirements and standards set out in our Acceptable Use Policy.</p>
<p>You confirm and warrant that any information you upload or that is uploaded on your behalf complies with those standards, and you will be liable to us and indemnify us for any breach of this warranty.</p>
<p>Any content you upload will automatically be considered as non-confidential and you grant us a non-exclusive, royalty-free, irrevocable, worldwide right and license to use, copy (in whole or in part), adapt, distribute and disclose such content within Uganda Airlines, affiliates and third parties for any purpose whatsoever including, but not limited to, performance of a flight booking, dietary requirements, recruitment/careers, human resources and employment processing and any other purpose for which the content may, at the discretion of Uganda Airlines, have been uploaded. You hereby waive any and all moral rights under applicable law in relation to such content and, to the extent such rights cannot be waived, agree not to assert or enforce such rights against Uganda Airlines, its affiliates nor any third parties.</p>
<p>We reserve the right to disclose your identity to any third parties claiming that any content uploaded or posted by you to our site is a contravention of their intellectual property rights or their right to privacy.</p>
<p>We will not be liable or responsible to any third party in respect of any content posted by you or any other user of our Website.</p>
<p>We reserve the right to remove any posts or uploads you make to our Website if, in our sole opinion, your post does not comply with the content requirements and standards set out in our Acceptable Use Policy.</p>
<ol start="8">
<li><strong>Intellectual Property Rights</strong></li>
</ol>
<p>Information concerning Uganda Airlines and our services, including flight schedules, routes, fares, text, graphics, button icons, audio and video clips, digital downloads, data compilations (including customer, recruitment, employment and human resources information and/or data), logos and information regarding the status of our flights shall be referred to as Company Information for the purposes of the Agreement.</p>
<p>Uganda Airlines owns all intellectual property rights in the Website, its content, materials and in the Company, Information including, but not limited to, any copyright, trademarks, database rights and any and all other rights to and in the Company Information.</p>
<p>This Website is for your personal, non-commercial use. You may not modify, copy, distribute, transmit, display, perform, reproduce, publish, license, create derivative works from, transfer, or sell any information, software, products or services obtained from this Website.</p>
<p>You may print or download one copy of any relevant extracts or pages from our Website for your personal use. You must not amend or modify any paper or digital extracts taken from the Website or use any photographs, video/audio sequences, illustrations, graphics or logos as appear on the Website separately from accompanying text or in any context that differs from that displayed on the Website. Any materials, prints, copies or downloads obtained in breach of this Agreement are not authorized and will lead to the immediate termination of your right to use the Website and you must destroy or return any materials in your possession.</p>
<p>You agree and undertake that you will not use the Website nor any part of the Website for commercial purposes without obtaining a license from us to do so. Any license shall be granted in our sole discretion and where we do grant you such a license, your use of the content of our Website you will be subject to the terms of that license.</p>
<p>Uganda Airlines and any other product or trade names of Uganda National Airline Company Limited referenced herein or connected to the same are our service marks or registered or unregistered service trademarks. You may not, without our prior written consent use, replicate or carry out or omit to carry out any act that may infringe our title and rights to our service marks or trademarks; and your use of the Website by no means grants you any right and/or title to the same.</p>
<p>Other product and company names mentioned herein may be the trademarks of their respective owners and although we have been granted the right to use such trademarks for the Website, your use of the Website by no means affords you any rights or title to any third-party trademarks.</p>
<ol start="9">
<li><strong>Security</strong></li>
</ol>
<p>We will take all reasonable measures to ensure any information you transmit to us using the Website will remain confidential and protected from unauthorized access. However, no warranties are provided in relation to unauthorized access to that information. As such, we will not be liable for any unauthorized access unless such is caused solely by our gross negligence.</p>
<p>To ensure secure online payment and all other transactions of personal data, the Website uses a technology called Secure Socket Layer (SSL). SSL encrypts all communications between your browser and the web server so that the information remains private and integral. A closed lock on the browser window indicates a secure connection. For further information, please consult your browser's security specifications. If your browser is equipped with SSL, your transaction will automatically be secured.</p>
<ol start="10">
<li><strong>Conditions of carriage</strong></li>
</ol>
<p>The carriage of passengers and their baggage by air will be subject to the conditions of carriage of the carrier concerned. With respect to our flights, please read our general conditions of carriage for passengers and baggage.</p>
<ol start="11">
<li><strong>Website contact</strong></li>
</ol>
<p>Please use the Contact us section of the Website to get in touch with the Uganda Airlines Customer Centre and an agent will assist you with your query.</p>
<ol start="12">
<li><strong>Web browser compatibility</strong></li>
</ol>
<p>To view the Website and purchase travel online, we recommend you use a web browser equivalent to Internet Explorer 11, Chrome 54, Firefox 49 or Safari 10. The browser you use must support Secure Socket Layer (SSL) encryption and JavaScript. Disabling any of these features or using older non-compatible browsers may reduce Website functionality.</p>
<p>To determine which browser you are running, click on "Help" at the top of the browser and select the "About" menu item that describes your browser.</p>
<p>Please note that any "Beta" or "Preview" version of a browser may not properly work with these pages.</p>
<ol start="13">
<li><strong>General</strong></li>
</ol>
<p>The Agreement constitutes the entire agreement between you and Uganda Airlines relating to your use of the Website and supersedes any prior understandings or agreements (whether written or oral), claims, representations and understandings between us regarding such subject matter and the Agreement may not be amended or modified except by making such amendments or modifications available on this Website.</p>
<p>If any provision or part-provision of this Agreement is or becomes invalid, illegal or unenforceable, it shall be deemed modified to the minimum extent necessary to make it valid, legal and enforceable. If such modification is not possible, the relevant provision or part-provision shall be deemed deleted. Any modification to or deletion of a provision or part-provision shall not affect the validity and enforceability of the rest of this Agreement.</p>
<p>If we choose not to enforce any right that we have against you at any given time, then this does not prevent us from deciding to exercise or enforce that right at a later stage.</p>
<p>This Agreement is drafted in the English language. Should it be translated into any other language, the English language version shall prevail.</p>
<p>Any notice given under or in connection with this Agreement shall be in the English language. All other documents provided under or in connection with this agreement shall be in the English language or accompanied by a certified English translation. If such document is translated into any other language, the English language version shall prevail unless the document is a constitutional, statutory or other official documents.</p>
<p>Except for our group companies, affiliates, directors, employees or representatives, a person who is not a party to this Agreement has no right to enforce the terms of this Agreement.</p>
<p>You may not transfer any of your rights and duties in this Agreement to any other person (this includes, but is not limited to, a transfer by way of assignment or sublicence).</p>
<ol start="14">
<li><strong>Applicable law and jurisdiction</strong></li>
</ol>
<p>The Agreement and any dispute or claim arising out of or in connection with it or its subject matter or formation (including non-contractual disputes or claims) shall be governed by, and construed in accordance with, the laws of the Republic of Uganda.</p>
<p>Each party agrees that the courts of the Republic of Uganda shall have exclusive jurisdiction to settle any dispute or claim arising out of or in connection with this Agreement or its subject matter or formation (including non-contractual disputes or claims).</p> <br/>
<p><strong>Booking Policy</strong></p>
<p><strong>Introduction:</strong></p>
<p>The purpose of this document is to provide additional transparency and definition to Uganda Airlines booking policy.</p>
<p><strong>Objectives</strong></p>
<ul>
<li>Ensure inventory integrity and avoid circumvention of inventory controls.</li>
<li>Avoid GDS cost brought on by unproductive and inefficient bookings or actions.</li>
<li>Maintain and respect efficient cooperation between travel trades and airlines</li>
</ul>
<p><strong>Scope and application</strong></p>
<p>These policies apply to all GDS subscribers and our direct portal locations and are applicable to all bookings regardless if the itinerary is ultimately ticketed.</p>
<p>By engaging in any of the prohibited booking procedures listed below, Uganda Airlines reserves the right to inhibit access to its inventory systems or to charge penalties via agency debit memo.</p>
<p><strong>Policies</strong></p>
<ol>
<li><strong>Duplicate bookings</strong></li>
</ol>
<p>It is prohibited to create;</p>
<ul>
<li>Multiple segment with the same origin or destination</li>
<li>Situations where the origin or destination is repeated multiple times in the same itinerary.</li>
<li>Situations where the scheduled departure and arrival times of multiple segments in the itinerary overlap each other</li>
<li>Situations where the itinerary is determined to be un-flyable</li>
</ul>
<ol start="2">
<li><strong>Married Segments Logic (MSL)</strong></li>
</ol>
<ul>
<li>It is prohibited to manipulate or circumvent the Married Segment Control applied on Origin and Destination (O&amp;D) connections in the itinerary either before or after the End of Transaction</li>
<li>All O&amp;D bookings must be created using POS O&amp;D availability</li>
</ul>
<ol start="3">
<li><strong>Speculative Bookings</strong></li>
</ol>
<p>It is prohibited to create</p>
<ul>
<li>Bookings for training- or testing purposes (Best practice: Use training mode of your GDS</li>
<li>Numerous and massive non-customer-based bookings</li>
<li>Bookings for fare quote (Best practice: Use GDS non billable status codes or quote fare without ending the transaction)</li>
<li>Bookings for administrative reasons like Visa, Invoice, etc. (Best practice: Use the GDS auxiliary segments or non-billable status codes</li>
<li>PNR&rsquo;s containing false or fictitious passenger names</li>
</ul>
<ol start="4">
<li><strong>Name changes/Corrections</strong></li>
</ol>
<ul>
<li>Ensure that passengers are rebooked using the names as they appear on passport or other valid travel documents</li>
<li>In situations when a name changes or correction is required, please strictly adhere to Kenya Airway&rsquo;s policy for name modification and e-ticket re-issue</li>
</ul>
<ol start="5">
<li><strong>Inactive Bookings</strong></li>
</ol>
<ul>
<li>All in active segments must be removed from the GDS PNR at least 24hrs before departure.</li>
<li>Inactive segments status codes include: HX, NO, UC and UN. (Best practice: Agents should monitor their queues on a daily basis)</li>
</ul>
<ol start="6">
<li><strong>Churning</strong></li>
</ol>
<p>It is prohibited to</p>
<ul>
<li>Repeatedly book and cancel a segment across one or more PNR&rsquo;s/or GDS&rsquo;s within the same class or different classes of service, with the goal to circumvent or extend ticketing time limits, hold inventory or to meet GDS productivity targets</li>
</ul>
<ol start="7">
<li><strong>Day of departure-Un-ticketed Bookings and cancellations</strong></li>
</ol>
<p>Whenever possible, following best practices should be observed:</p>
<ul>
<li>Bookings made within 24hrs before departure should be either ticketed or cancelled at least 24hrs before departure</li>
<li>All bookings made prior to 24hrs before departure should be either ticketed or cancelled at least 24hrs before departure</li>
<li>If for ticketing purpose, PNR Claim is needed, it should take place prior to 24hrs before departure</li>
</ul>
<ol start="8">
<li><strong>Ticketing time limit circumvention</strong></li>
</ol>
<p>It is prohibited to use</p>
<ul>
<li>False or voided ticket numbers</li>
<li>A Ticket Time Limit waiver remark to delay the ticketing date for ineligible bookings</li>
</ul>
<ol start="9">
<li><strong>Waitlist Misuse</strong></li>
</ol>
<p>It is prohibited to</p>
<ul>
<li>Create duplicate waitlist segments for the same flight in the same cabin within the same PNR or with different PNRs</li>
<li>Waitlist on a lower booking class for a passenger already confirmed on the flight/cabin (Best Practice: Agents should remove confirmed waitlist segments when the passenger no longer intends to travel</li>
</ul>
<ol start="10">
<li><strong>Group bookings</strong></li>
</ol>
<p>It is prohibited to</p>
<ul>
<li>Request group bookings not directly related to a customer request</li>
<li>Create bookings that circumvent group booking procedures including, without limitation, creating &ldquo;hidden groups&rdquo; by making multiple separate individual bookings intended as a group</li>
</ul>
<ol start="11">
<li><strong>Passive segments</strong></li>
</ol>
<ul>
<li>Passive segments are only permitted for ticketing when the passive booking is synchronized with the airline's systems (same name, itinerary, class of service and number of passengers)</li>
<li>Passive segments are only permitted for groups or individual reservations which are split from groups</li>
<li>Passive segments must not be canceled after the issuance of tickets to avoid cancellation of space</li>
<li>Passives are not permitted against active inventory booking on the same GDS or on a different GDS by the same agent (Best practice: PNR claim functionality should be used when possible. Agents should always book and ticket from the same GDS).</li>
<li>It is prohibited for passive bookings to be used for, but not limited to; satisfying GDS productivity target, circumventing fare rules, administrative functions such as an invoice or itinerary printing.</li>
</ul>
<ol start="12">
<li><strong>Secure flight information</strong></li>
</ol>
<p>The following information must be provided for each PNR as it appears on government-issued identification at least 72hrs prior to departure:</p>
<ol>
<li>Legal name</li>
<li>Date of Birth</li>
<li>Gender</li>
<li>and email number (If applicable)</li>
</ol> <br/> <h1>Privacy Policy</h1>
<h2>(A) Our Promise</h2>
<p>Uganda Airlines commits to respecting your privacy and protecting your personal information.</p>
<ul>
<li>Uganda Airlines will be transparent about the information we are collecting and what we will do with it.</li>
<li>Uganda Airlines will use the information you give for the purposes described in this Policy, which include providing you with services you have requested and enhancing your experience with us.</li>
<li>Uganda Airlines will also use the information collected to help us understand you better and so that we can give you relevant offers.</li>
<li>If at any time you inform us that you do not want to receive any further marketing messages we will stop sending them. We may, however, continue to send important service messages containing information relating to a product or service you have purchased to keep you informed about your booking and travel itinerary.</li>
<li>Uganda Airlines will put in place appropriate measures to protect your information and keep it secure.</li>
<li>Uganda Airlines will at all times respect your data protection rights.</li>
</ul>
<p>If you have further questions please get in touch with us by writing to the Manager Security using the details provided in Section (T) below.</p>
<p>Without prejudice to your rights under applicable laws, the above and this Privacy Policy are not contractual and do not form part of your contract with us.</p>
<h2>(B) This Policy</h2>
<p>This Policy is issued by each of the Controllers listed in Section (T) below (together<strong>&nbsp;&ldquo;Uganda Airlines&rdquo;, &ldquo;we&rdquo;, &ldquo;us&rdquo;</strong>&nbsp;and<strong>&nbsp;&ldquo;our&rdquo;)</strong>&nbsp;and is addressed to individuals outside our organization with whom we interact, including customers, visitors to our Sites, users of our Apps, other users of our products or services, and visitors to our premises (together,<strong>&nbsp;&ldquo;you&rdquo;)</strong>. Defined terms used in this Policy are explained in Section (U) below.</p>
<p>This Policy may be amended or updated from time to time to reflect changes in our practices with respect to the Processing of Personal Information, or changes in applicable law. We encourage you to read this Policy carefully and to regularly check this page to review any changes we might make in accordance with the terms of this Policy.</p>
<h2>(C) Collection of Personal Information</h2>
<ul>
<li><u><strong>Collection of Personal Information:</strong></u>&nbsp;We collect or obtain Personal Information below. In brief, it means details which identify you or could be used to identify you. This includes information such as your name and contact details, your travel arrangements and purchase history. This may also include information about how you use our websites and mobile applications.</li>
<li><u><strong>Information provided to us</strong></u>: We obtain Personal Information when that information is provided to us (e.g., where you contact us via email or telephone, or by any other means, or when you provide us with your business card, or when you create an online profile with us, or when you submit a job application).</li>
<li><u><strong>Relationship information:</strong></u>&nbsp;We collect or obtain Personal Information in the ordinary course of our relationship with you (e.g., we provide a service to you, or to your employer). We collect your Personal Information whenever you use our services (whether these services are provided by us or by other companies or agents acting on our behalf), including when you travel with us when you use our website or mobile applications or interact with us via email or our contact centres.</li>
<li><u><strong>Information you make public:</strong></u>&nbsp;We collect or obtain Personal Information that you manifestly choose to make public, including via social media (e.g., we may collect information from your social media profile(s), if you make a public post about us).</li>
<li><u><strong>App data:</strong></u>&nbsp;We collect or obtain Personal Information when you download or use any of our Apps.</li>
<li><u><strong>Site data:</strong></u>&nbsp;We collect or obtain Personal Information when you visit any of our Sites or use any features or resources available on or through a Site.</li>
<li><u><strong>Registration details:</strong></u>&nbsp;We collect or obtain Personal Information when you use, or register to use, any of our Sites, Apps, products, or services (e.g. when you become a member of our Loyality/reward program).</li>
<li><u><strong>Content and advertising information:</strong></u>&nbsp;If you interact with any third-party content or advertising on a Site or in an App (including third party plugins and cookies) we receive Personal Information from the relevant third-party provider of that content or advertising.</li>
<li><u><strong>Third-party information:</strong></u>&nbsp;We collect or obtain Personal Information from third parties who provide it to us (e.g., companies contracted by us to provide services to you, companies involved in your travel plans, including airlines involved in your prior or onward journey, relevant airport operators and customs and immigration authorities, Companies with whom we participate in a loyalty scheme with and other customer programmes (e.g. car hire providers and hotels), credit reference agencies; law enforcement authorities; etc.</li>
</ul>
<h2>(D) Creation of Personal Information</h2>
<p>We also create Personal Information about you in certain circumstances, such as records of your interactions with us (including records of your telephone conversations with us), and details of your purchase history.</p>
<h2>(E) Categories of Personal Information we Process</h2>
<p>We Process the following categories of Personal Information about you:</p>
<ul>
<ul>
<li><u><strong>Personal details:</strong></u>&nbsp;given name(s); preferred name; and photograph.</li>
<li><u><strong>Demographic information:</strong></u>&nbsp;gender; date of birth/age; nationality; passport details; salutation; title; and language preferences.</li>
<li><u><strong>Contact details:</strong></u>&nbsp;correspondence address; telephone number; email address; details of Personal Assistants, where applicable; messenger app details; online messaging details; and social media details.</li>
<li><u><strong>Consent records:</strong>&nbsp;</u>records of any consents you have given, together with the date and time, means of consent and any related information (e.g., the subject matter of the consent).</li>
<li><u><strong>Purchase details:</strong></u>&nbsp;records of purchases and prices, including details of where you booked your flight (if on ugandairlines.com or if you used another sales channel such as a travel agent or our call center), details of your previous travel arrangements,, such as your previous flights and any travel-related issues, such as upgrades received, your baggage requirements, airport disruption, lost luggage and your customer feedback.</li>
<li><u><strong>Payment details:</strong></u>&nbsp;invoice records; payment records; billing address; payment method; bank account number or credit card number; cardholder or accountholder name; card or account security details; card &lsquo;valid from&rsquo; date; card expiry date; BACS details; SWIFT details; IBAN details; payment amount; payment date; and records of cheques.</li>
<li><u><strong>Information relating to our Sites and Apps:</strong></u>&nbsp;device type; operating system; browser type; browser settings; IP address; language settings; dates and times of connecting to a Site; App usage statistics; App settings; dates and times of connecting to an App; location data, and other technical communications information (some of which may constitute Personal Information); username; password; security login details; usage data; aggregate statistical information.</li>
<li><u><strong>Employer details:</strong></u>&nbsp;where you interact with us in your capacity as an employee of a third party, the name, address, telephone number and email address of your employer, to the extent relevant.</li>
<li><u><strong>Content and advertising information:</strong></u>&nbsp;records of your interactions with our online advertising and content, records of advertising and content displayed on pages or App screens displayed to you, and any interaction you may have had with such content or advertising (e.g., mouse hover, mouse clicks, any forms you complete in whole or in part) and any touchscreen interactions.</li>
<li><u><strong>Information collected about your travel arrangements:</strong></u>&nbsp;information regarding your interaction with staff and cabin crew before, during and after the flight, information, photographs and other images which are collected from you as you pass through security at the airport.</li>
<li><u><strong>Travel information:</strong></u>&nbsp;details of your booking, travel itinerary, details of any additional assistance you require, and other information related to your travel with us such as dietary requirements.</li>
<li><u><strong>Views and opinions:</strong></u>&nbsp;any views and opinions that you choose to send to us, or publicly post about us on social media platforms.</li>
<li><u><strong>Other interactions with us:</strong></u>&nbsp;information if you have entered a competition or registered for a promotion.</li>
</ul>
</ul>
<p>If you provide us with another individual&rsquo;s Personal Information, you must ensure that you have the permission of that individual before you provide it to us (for example, if you are making a booking for another individual). When you are making a purchase for someone else, we may collect your payment details but may communicate with the other individual directly about the purchase.</p>
<h2>(F) Sensitive Personal Information</h2>
<p>We may collect and Process Sensitive Personal Information in the ordinary course of our business. Uganda Airlines will limit the circumstances where we collect and process Sensitive Personal Information. Examples of when we may collect and process Sensitive Personal Information include situations where:</p>
<ul>
<ul>
<li>you make a specific request for medical assistance, such as the provision of wheelchair assistance or oxygen;</li>
<li>you have sought clearance to fly with a medical condition or because you are more than 28 weeks pregnant;</li>
<li>you have chosen to provide such information to us or it has been passed to us by a third party such as the travel agent through which you made your booking;</li>
<li>biometric information (e.g. facial recognition information) may be collected during the security clearance process prior to, and after flying with us; and</li>
<li>you have requested services which may imply or suggest your religion, health or other information (e.g. when you disclose your dietary requirements to us).</li>
</ul>
</ul>
<p>Where it becomes necessary to Process your Sensitive Personal Information for any reason, we rely on one of the following legal bases:</p>
<ul>
<li><strong>Compliance with applicable law:</strong>&nbsp;We may Process your Sensitive Personal Information where the Processing is required or permitted by applicable law (e.g., to comply with our diversity reporting obligations);</li>
<li><strong>Detection and prevention of crime:</strong>&nbsp;We may Process your Sensitive Personal Information where the Processing is necessary for the detection or prevention of crime (e.g., the prevention of fraud);</li>
<li><strong>Establishment, exercise or defense of legal rights:</strong>&nbsp;We may Process your Sensitive Personal Information where the Processing is necessary for the establishment, exercise or defense of legal rights; or</li>
<li><strong>Consent:</strong>&nbsp;We may Process your Sensitive Personal Information where we have, in accordance with applicable law, obtained your prior, express consent prior to Processing your Sensitive Personal Information (this legal basis is only used in relation to Processing that is entirely voluntary &ndash; it is not used for Processing that is necessary or obligatory in any way).</li>
</ul>
<p>If you provide Sensitive Personal Information to us, you must ensure that it is lawful for you to disclose such information to us, and you must ensure a valid legal basis applies to the Processing of that Sensitive Personal Information.</p>
<h2>(G) Purposes of Processing and legal bases for Processing</h2>
<p>The purposes for which we Process Personal Information, subject to applicable law, and the legal bases on which we perform such Processing, are as follows:</p>
<table dropzone="copy" border="0">
<thead>
<tr>
<th><strong>PROCESSING ACTIVITY</strong></th>
<th><strong>LEGAL BASIS FOR PROCESSING</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td>
<ul>
<li><strong><u>Provision of Sites, Apps, products, and services:&nbsp;</u></strong>providing our Sites, Apps, products, or services; providing promotional items upon request; and communicating with you in relation to those Sites, Apps, products, or services.</li>
</ul>
</td>
<td>
<ul>
<li>The Processing is&nbsp;<strong>necessary in connection with any contract&nbsp;</strong>that you have entered into with us, or to take steps prior to entering into a contract with us; or</li>
<li>We have&nbsp;<strong>a legitimate interest&nbsp;</strong>in carrying out the Processing for the purpose of providing our Sites, Apps, products and services (to the extent that such legitimate interest is not overridden by your interests, fundamental rights, or freedoms); or</li>
<li>We have obtained&nbsp;<strong>your prior consent</strong>&nbsp;to the Processing (this legal basis is only used in relation to Processing that is entirely voluntary &ndash; it is not used for Processing that is necessary or obligatory in any way).</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li><strong><u>Managing your travel arrangements:&nbsp;</u></strong>providing the pre-, mid- and post-flight services to you, including managing the on-boarding process, facilitating flight connection, keeping track of you as you make your journey through the airport, and to help keep you safe when you fly<strong>.</strong></li>
</ul>
</td>
<td>
<ul>
<li>The Processing is&nbsp;<strong>necessary in connection with any contract&nbsp;</strong>that you have entered into with us, or to take steps prior to entering into a contract with us; or</li>
<li>We have&nbsp;<strong>a legitimate interest&nbsp;</strong>in carrying out the Processing for the purpose of providing our services and products to you (to the extent that such legitimate interest is not overridden by your interests, fundamental rights, or freedoms); or</li>
<li>The Processing is necessary to protect the&nbsp;<strong>vital interests</strong>&nbsp;of any individual; or</li>
<li>We have obtained&nbsp;<strong>your prior consent</strong>&nbsp;to the Processing (this legal basis is only used in relation to Processing that is entirely voluntary &ndash; it is not used for Processing that is necessary or obligatory in any way).</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li><strong><u>Compliance checks:</u></strong>&nbsp;fulfilling our regulatory compliance obligations; and confirming and verifying your identity; use of credit reference agencies; and screening against government and/or law enforcement agency sanctions lists and other legal restrictions.</li>
</ul>
</td>
<td>
<ul>
<li>The Processing is necessary for&nbsp;<strong>compliance with a legal obligation;</strong>&nbsp;or</li>
<li>The Processing is&nbsp;<strong>necessary in connection with any contract&nbsp;</strong>that you have entered into with us, or to take steps prior to entering into a contract with us; or</li>
<li>We have&nbsp;<strong>a legitimate interest&nbsp;</strong>in carrying out the Processing for the purpose of fulfilling our regulatory and compliance obligations (to the extent that such legitimate interest is not overridden by your interests, fundamental rights, or freedoms); or</li>
<li>We have obtained&nbsp;<strong>your prior consent</strong>&nbsp;to the Processing (this legal basis is only used in relation to Processing that is entirely voluntary &ndash; it is not used for Processing that is necessary or obligatory in any way).</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li><strong><u>Operating our business:&nbsp;</u></strong>operating and managing our Sites, our Apps, our products, and our services; providing content to you; displaying advertising and other information to you; communicating and interacting with you&nbsp;<em>via</em>&nbsp;our Sites, our Apps, our products, or our services; and notifying you of changes to any of our Sites, our Apps, our products, or our services.</li>
</ul>
</td>
<td>
<ul>
<li>The Processing is&nbsp;<strong>necessary in connection with any contract&nbsp;</strong>that you have entered into with us, or to take steps prior to entering into a contract with us; or</li>
<li>The Processing is necessary for&nbsp;<strong>compliance with a legal obligation;</strong>&nbsp;or</li>
<li>We have&nbsp;<strong>a legitimate interest&nbsp;</strong>in carrying out the Processing for the purpose of providing our Sites, our Apps, our products, or our services to you (to the extent that such legitimate interest is not overridden by your interests, fundamental rights, or freedoms); or</li>
<li>We have obtained&nbsp;<strong>your prior consent</strong>&nbsp;to the Processing (this legal basis is only used in relation to Processing that is entirely voluntary &ndash; it is not used for Processing that is necessary or obligatory in any way).</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li><strong><u>Communications and marketing&nbsp;</u></strong><u>:</u>&nbsp;communicating with you&nbsp;<em>via</em>&nbsp;any means (including&nbsp;<em>via</em>&nbsp;email, telephone, text message, social media, post or in person) news items and other information in which you may be interested, subject always to obtaining your prior opt-in consent to the extent required under applicable law; maintaining and updating your contact information where appropriate; and obtaining your prior, opt-in consent where required.</li>
</ul>
</td>
<td>
<ul>
<li>The Processing is&nbsp;<strong>necessary in connection with any contract&nbsp;</strong>that you have entered into with us, or to take steps prior to entering into a contract with us; or</li>
<li>We have&nbsp;<strong>a legitimate interest&nbsp;</strong>in carrying out the Processing for the purpose of contacting you, subject always to compliance with applicable law (to the extent that such legitimate interest is not overridden by your interests, fundamental rights, or freedoms); or</li>
<li>We have obtained&nbsp;<strong>your prior consent</strong>&nbsp;to the Processing (this legal basis is only used in relation to Processing that is entirely voluntary &ndash; it is not used for Processing that is necessary or obligatory in any way).</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li><strong><u>Management of IT systems:</u></strong>&nbsp;management and operation of our communications, IT and security systems; and audits (including security audits) and monitoring of such systems.</li>
</ul>
</td>
<td>
<ul>
<li>The Processing is necessary for&nbsp;<strong>compliance with a legal obligation;</strong>&nbsp;or</li>
<li>We have&nbsp;<strong>a legitimate interest&nbsp;</strong>in carrying out the Processing for the purpose of managing and maintaining our communications and IT systems (to the extent that such legitimate interest is not overridden by your interests, fundamental rights, or freedoms).</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li><strong><u>Health and safety</u></strong><u>:</u>&nbsp;health and safety assessments and record keeping; providing a safe and secure environment at our premises and on our aircraft; and compliance with related legal obligations.</li>
</ul>
</td>
<td>
<ul>
<li>The Processing is necessary for&nbsp;<strong>compliance with a legal obligation;</strong>&nbsp;or</li>
<li>We have&nbsp;<strong>a legitimate interest&nbsp;</strong>in carrying out the Processing for the purpose of ensuring a safe environment at our premises and on our aircraft (to the extent that such legitimate interest is not overridden by your interests, fundamental rights, or freedoms); or</li>
<li>Processing is necessary to protect the&nbsp;<strong>vital interests</strong>&nbsp;of any individual.</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li><strong><u>Financial management&nbsp;</u></strong><u>:</u>&nbsp;sales; finance; corporate audit; and vendor management.</li>
</ul>
</td>
<td>
<ul>
<li>We have&nbsp;<strong>a legitimate interest&nbsp;</strong>in carrying out the Processing for the purpose of managing and operating the financial affairs of our business (to the extent that such legitimate interest is not overridden by your interests, fundamental rights, or freedoms); or</li>
<li>We have obtained&nbsp;<strong>your prior consent</strong>&nbsp;to the Processing (this legal basis is only used in relation to Processing that is entirely voluntary &ndash; it is not used for Processing that is necessary or obligatory in any way).</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li><strong><u>Surveys:</u></strong>&nbsp;engaging with you for the purposes of obtaining your views on our Sites, our Apps, our products, or our services.</li>
</ul>
</td>
<td>
<ul>
<li>We have&nbsp;<strong>a legitimate interest&nbsp;</strong>in carrying out the Processing for the purpose of conducting surveys, satisfaction reports and market research (to the extent that such legitimate interest is not overridden by your interests, fundamental rights, or freedoms); or</li>
<li>We have obtained&nbsp;<strong>your prior consent</strong>&nbsp;to the Processing (this legal basis is only used in relation to Processing that is entirely voluntary &ndash; it is not used for Processing that is necessary or obligatory in any way).</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li><strong><u>Security:</u></strong>&nbsp;physical security of our premises (including records of visits to our premises); CCTV recordings; and electronic security (including login records and access details).</li>
</ul>
</td>
<td>
<ul>
<li>The Processing is necessary for&nbsp;<strong>compliance with a legal obligation;</strong>&nbsp;or</li>
<li>We have&nbsp;<strong>a legitimate interest&nbsp;</strong>in carrying out the Processing for the purpose of ensuring the physical and electronic security of our business and our premises (to the extent that such legitimate interest is not overridden by your interests, fundamental rights, or freedoms).</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li><strong><u>Investigations:</u></strong>&nbsp;detecting, investigating and preventing breaches of policy, and criminal offenses, in accordance with applicable law.</li>
</ul>
</td>
<td>
<ul>
<li>The Processing is necessary for&nbsp;<strong>compliance with a legal obligation;</strong>&nbsp;or</li>
<li>We have&nbsp;<strong>a legitimate interest&nbsp;</strong>in carrying out the Processing for the purpose of detecting and protecting against, breaches of our policies and applicable laws (to the extent that such legitimate interest is not overridden by your interests, fundamental rights, or freedoms).</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li><strong><u>Legal Proceedings:</u></strong>&nbsp;establishing, exercising and defending legal rights.</li>
</ul>
</td>
<td>
<ul>
<li>The Processing is necessary for&nbsp;<strong>compliance with a legal obligation;</strong>&nbsp;or</li>
<li>We have&nbsp;<strong>a legitimate interest&nbsp;</strong>in carrying out the Processing for the purpose of establishing, exercising or defending our legal rights (to the extent that such legitimate interest is not overridden by your interests, fundamental rights, or freedoms).</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li><strong><u>Legal compliance:</u></strong>&nbsp;compliance with our legal and regulatory obligations under applicable law.</li>
</ul>
</td>
<td>
<ul>
<li>Processing is&nbsp;<strong>necessary for compliance with a legal obligation</strong>.</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li><strong><u>Improving our Sites, Apps, products, and services:&nbsp;</u></strong>identifying issues with our Sites, our Apps, our products, or our services; planning improvements to our Sites, our Apps, our products, or our services; and creating new Sites, Apps, products, or services.</li>
</ul>
</td>
<td>
<ul>
<li>We have&nbsp;<strong>a legitimate interest&nbsp;</strong>in carrying out the Processing for the purpose of improving our Sites, our Apps, our products, or our services (to the extent that such legitimate interest is not overridden by your interests, fundamental rights, or freedoms); or</li>
<li>We have obtained&nbsp;<strong>your prior consent</strong>&nbsp;to the Processing (this legal basis is only used in relation to Processing that is entirely voluntary &ndash; it is not used for Processing that is necessary or obligatory in any way).</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li><strong><u>Fraud prevention:</u></strong>&nbsp;Detecting, preventing and investigating fraud.</li>
</ul>
</td>
<td>
<ul>
<li>The Processing is necessary for&nbsp;<strong>compliance with a legal obligation&nbsp;</strong>(especially in respect of applicable employment law); or</li>
<li>We have&nbsp;<strong>a legitimate interest&nbsp;</strong>in carrying out the Processing for the purpose of detecting and protecting against, fraud (to the extent that such legitimate interest is not overridden by your interests, fundamental rights, or freedoms).</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li><strong><u>Recruitment and job applications:</u></strong>&nbsp;recruitment activities; advertising of positions; interview activities; analysis of suitability for the relevant position; records of hiring decisions; offer details; and acceptance details.</li>
</ul>
</td>
<td>
<ul>
<li>The Processing is necessary for&nbsp;<strong>compliance with a legal obligation&nbsp;</strong>(especially in respect of applicable employment law); or</li>
<li>We have&nbsp;<strong>a legitimate interest&nbsp;</strong>in carrying out the Processing for the purpose of recruitment activities and handling job applications (to the extent that such legitimate interest is not overridden by your interests, fundamental rights, or freedoms); or</li>
<li>We have obtained&nbsp;<strong>your prior consent</strong>&nbsp;to the Processing (this legal basis is only used in relation to Processing that is entirely voluntary &ndash; it is not used for Processing that is necessary or obligatory in any way).</li>
</ul>
</td>
</tr>
</tbody>
</table>
<h2>(H) Disclosure of Personal Information to third parties</h2>
<p>We disclose Personal Information to other entities within the Uganda Airlines group, for legitimate business purposes and the operation of our Sites, Apps, products, or services to you), in accordance with applicable law. In addition, we disclose your Personal Information to:.</p>
<ul>
<li>you and, where appropriate, your appointed representatives;</li>
<li>legal and regulatory authorities (including customs and immigration authorities of any country in your itinerary or to which your flight may fly over), upon request, or for the purposes of reporting any actual or suspected breach of applicable law or regulation;</li>
<li>accountants, auditors, lawyers and other outside professional advisors to Uganda Airlines, subject to binding contractual obligations of confidentiality;</li>
<li>third party Processors (such as payment services providers; baggage handling organizations, other operators at airports supporting our services, etc.), located anywhere in the world, subject to the requirements noted below in this Section (H);</li>
<li>any relevant party, law enforcement agency or court, to the extent necessary for the establishment, exercise or defense of legal rights;</li>
<li>any relevant party for the purposes of prevention, investigation, detection or prosecution of criminal offenses or the execution of criminal penalties;</li>
<li>any relevant third party acquirer(s), in the event that we sell or transfer all or any relevant portion of our business or assets (including in the event of a reorganization, dissolution or liquidation);</li>
<li>the other organizations supporting the loyalty scheme including; and</li>
<li>any relevant third-party provider, where our Sites and our Apps use third party advertising, plugins or content. If you choose to interact with any such advertising, plugins or content, your Personal Information may be shared with the relevant third-party provider. We recommend that you review that third party&rsquo;s privacy policy before interacting with its advertising, plugins or content.</li>
</ul>
<p>If we engage a third-party Processor to Process your Personal Information, the Processor will be subject to binding contractual obligations to: (i) only Process the Personal Information in accordance with our prior written instructions; and (ii) use measures to protect the confidentiality and security of the Personal Information; together with any additional requirements under applicable law.</p>
<h2>(I)Government Access to Uganda Airlines booking records</h2>
<p>Under US Law, for example, the US Customs and Border Protection (CBP) receives certain travel and reservation information, known as Passenger Name Record (PNR) data about passengers flying to the USCBP has undertaken that it uses this PNR data for the purposes of preventing and combating terrorism and other transnational serious crimes. The PNR may include information provided during the booking process or held by airlines or travel agents. The information will be retained for at least three years and six months and may be shared with other authorities.</p>
<p>Further information about these arrangements, including measures to safeguard your Personal Information can be obtained if you&nbsp;<a href="https://www.dhs.gov/xlibrary/assets/privacy/privacy_stmt_pnr.pdf" target="_blank" rel="noopener">Click Here</a>&nbsp;(this link is an external website, not ugandairlines.com. Please note that Uganda Airlines isn't responsible for the information contained on this website and that different terms and conditions may apply).</p>
<p>Airlines are also required by other Governments to provide passenger data to the control authorities. Accordingly, any information we hold about you and your travel arrangements may be disclosed to the customs, immigration and police authorities of any country in your itinerary, and possibly on occasions, to countries not in your itinerary.</p>
<p><strong>What information do you hold about me which may be accessed?</strong></p>
<p>Uganda Airlines holds information about you which is required for the purpose of conducting business with you. This may include details you have told us about any medical, disability, or health conditions you may have; payment details; contact information; and, any special requirements you have specified.</p>
<p><strong>Who will you pass the information to, and who will they share it with?</strong></p>
<p>The information will be given to the Border Control authorities, for example, Customs, of countries which have a legal right to acquire the information. They may share it with other enforcement authorities for the purposes of preventing and combating terrorism and other serious criminal offenses.</p>
<p><strong>What if I refuse you permission to release my information to the authorities?</strong></p>
<p>If you are flying to or through a country which requires the information, Uganda Airlines will have to cancel your reservation and will be unable to carry you to or through that country.</p>
<p><strong>Which countries have legislation to permit access to my PNR information?</strong></p>
<p>At present, this is a requirement in several countries including UK and the USA which require carriers to grant access to passenger information.</p>
<p><strong>What will the authorities be using the data for?</strong></p>
<p>Information is used for enforcement purposes, including use in threat analysis to identify and interdict potential terrorists, and other threats to national and public security; and to focus government resources on high-risk concerns, thereby facilitating and safeguarding bona-fide travelers.</p>
<p><strong>Are my credit card details included?</strong></p>
<p>Where payments were made by credit card and this information is included in your passenger information record, the authorities may view such details.</p>
<p><strong>How long will information be held?</strong></p>
<p>Each country should hold the information for no longer than is required for the purpose for which it was stored.</p>
<p><strong>Will the information be transmitted in a secure fashion?</strong></p>
<p>Yes, Uganda Airlines will pass the information to the authorities by secure means</p>
<h2>(J) Profiling</h2>
<p>We Process Personal Information for the purposes of automated decision-making and Profiling, which is carried out for the following purposes:</p>
<table dropzone="copy" border="1">
<thead>
<tr>
<th><strong>PROFILING ACTIVITY</strong></th>
<th><strong>LOGIC OF THE PROFILING ACTIVITY</strong></th>
<th><strong>CONSEQUENCES FOR YOU</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td>Credit scoring</td>
<td>Where we engage a third party (e.g., a credit reference agency) to provide us with information about your credit score and/or credit history. This information is analyzed to determine the most appropriate terms on which to offer you credit, where applicable.</td>
<td>This Profiling activity may affect whether you are able to obtain credit, and the interest rates applicable to any such credit.</td>
</tr>
<tr>
<td>Customized discounts</td>
<td>Where we analyze your purchasing activity and your interests. This information is analysed to determine the most appropriate promotions and discounts to offer you.</td>
<td>This Profiling activity may mean that you receive discounts that are not available to others, and that others receive discounts that are not available to you.</td>
</tr>
<tr>
<td>Previous/current travel travels/itinerary</td>
<td>Where we analyze your past travel activity and your interests. This information is analyzed to determine the most appropriate promotions and products to offer you.</td>
<td>This Profiling activity may mean that you receive new product launches, new destinations or similar options that are not available to others, and receive promotional offers that are not available to you.</td>
</tr>
<tr>
<td>Previous purchases/special request</td>
<td>Where we analyze your purchasing activity and your requests. This information is analyzed to determine and customize service offering tailored to your unique and appropriate past history with us.</td>
<td>This Profiling activity may mean that you receive offers to past choice for example meal, seating, drink and that you would be addressed by name and receive special occasions offers and wishes that are not available to others.</td>
</tr>
</tbody>
</table>
<h2>(K) International transfer of Personal Information</h2>
<p>Because of the international nature of our business, we transfer Personal Information within the Uganda Airlines group, and to third parties, as noted in Section (H) above, in connection with the purposes set out in this Policy. For example, where you are flying, your personal information will be transferred to border control and immigration authorities. For this reason, we transfer Personal Information to other countries that may have different laws and data protection compliance requirements to those that apply in the country in which you are located.</p>
<p>Where we transfer your Personal Information from the EEA to recipients located outside the EEA who are not in Adequate Jurisdictions, we do so on the basis of [Standard Contractual Clauses]. You are entitled to request a copy of our [Standard Contractual Clauses] using the contact details provided in Section (T) below</p>
<p>Please note that when you transfer any Personal Information directly to a Uganda Airlines entity established outside the EEA, we are not responsible for that transfer of your Personal Information. We will nevertheless Process your Personal Information, from the point at which we receive the information, in accordance with the provisions of this Policy.</p>
<h2>(L) Information security</h2>
<p>We have implemented appropriate technical and organizational security measures designed to protect your Personal Information against accidental or unlawful destruction, loss, alteration, unauthorized disclosure, unauthorized access, and other unlawful or unauthorized forms of Processing, in accordance with applicable law.</p>
<p>Because the internet is an open system, the transmission of information via the internet is not completely secure. Although we will implement all reasonable measures to protect your Personal Information, we cannot guarantee the security of the information transmitted to us using the internet &ndash; any such transmission is at your own risk and you are responsible for ensuring that any Personal Information that you send to us is sent securely.&nbsp;</p>
<h2>(M) Information accuracy</h2>
<p>We take every reasonable step to ensure that:</p>
<ul>
<li>Personal Information of yours that we Process is accurate and, where necessary, kept up to date; and.</li>
<li>any Personal Information of yours that we Process that is inaccurate (having regard to the purposes for which they the information is Processed) is erased or rectified without delay.</li>
</ul>
<p>From time to time we may ask you to confirm the accuracy of your Personal Information.</p>
<h2>(N) Information minimization</h2>
<p>We take every reasonable step to ensure that your Personal Information that we Process is limited to the Personal Information reasonably necessary in connection with the purposes set out in this Policy.</p>
<h2>(O) Information retention</h2>
<p>We take every reasonable step to ensure that your Personal Information is only Processed for the minimum period necessary for the purposes set out in this Policy. The criteria for determining the duration for which we will retain your Personal Information is as follows:</p>
<ol>
<li>we will retain Personal Information in a form that permits identification only for as long as:(a) we maintain an ongoing relationship with you (e.g., where you are a customer, a member of the reward program, or you are lawfully included in our mailing list and have not unsubscribed); or&nbsp;<br />(b) your Personal Information is necessary in connection with the lawful purposes set out in this Policy, for which we have a valid legal basis (e.g., where your Personal Information is included in a contract between us and your employer, and we have a legitimate interest in processing that information for the purposes of operating our business and fulfilling our obligations under that contract; or where we have a legal obligation to retain your Personal Information),</li>
<li><strong>plus:</strong>&nbsp;the duration of:&nbsp;<br />(a) any applicable limitation period under applicable law (i.e., any period during which any person could bring a legal claim against us in connection with your Personal Information, or to which your Personal Information is relevant); and&nbsp;<br />(b) an additional two (2) month period following the end of such applicable limitation period (so that, if a person brings a claim at the end of the limitation period, we are still afforded a reasonable amount of time in which to identify any Personal Information that is relevant to that claim),</li>
<li><strong>and:</strong>&nbsp;in addition, if any relevant legal claims are brought, we continue to Process Personal Information for such additional periods as is necessary in connection with that claim.&gt;</li>
</ol>
<p>During the periods noted in paragraphs (2)(a) and (2)(b) above, we will restrict our processing of your Personal Information to storage of, and maintaining the security of, that information, except to the extent that the information needs to be reviewed in connection with any legal claim, or any obligation under applicable law.</p>
<p>Once the periods in paragraphs (1), (2) and (3) above, each to the extent applicable, have concluded, we will either:</p>
<ul>
<li>permanently delete or destroy the relevant Personal Information; or</li>
<li>anonymize the relevant Personal Information.</li>
</ul>
<h2>(P) Your legal rights</h2>
<p>Subject to applicable law, you may have the following rights regarding the Processing of your Relevant Personal Information:</p>
<ul>
<li>the right not to provide your Personal Information to us (however, please note that we will be unable to provide you with the full benefit of our Sites, Apps, products, or services, if you do not provide us with your Personal Information &ndash; e.g., we might not be able to process your requests without the necessary details and you may not be able to fly with us without providing the necessary information);</li>
<li>the right to request access to, or copies of, your Relevant Personal Information, together with information regarding the nature, Processing, and disclosure of those Relevant Personal Information;</li>
<li>the right to request rectification of any inaccuracies in your Relevant Personal Information;</li>
<li>the right to request, on legitimate grounds:&nbsp;<br />o erasure of your Relevant Personal Information; or&nbsp;<br />o restriction of Processing of your Relevant Personal Information;</li>
<li>the right to have certain Relevant Personal Information transferred to another Controller, in a structured, commonly used and machine-readable format, to the extent applicable;</li>
<li>where we Process your Relevant Personal Information on the basis of your consent, the right to withdraw that consent (noting that such withdrawal does not affect the lawfulness of any processing performed prior to the date on which we receive notice of such withdrawal, and does not prevent the Processing of your Personal Information in reliance upon any other available legal bases); and</li>
<li>the right to lodge complaints regarding the Processing of your Relevant Personal Information with a Data Protection Authority (in particular, the Data Protection Authority of the EU Member State in which you live, or in which you work, or in which the alleged infringement occurred, each if applicable).</li>
</ul>
<p><strong>Subject to applicable law, you may also have the following additional rights regarding the Processing of your Relevant Personal Information:</strong></p>
<ul>
<li><strong>the right to object, on grounds relating to your particular situation, to the Processing of your Relevant Personal Information by us or on our behalf; and</strong></li>
<li><strong>the right to object to the Processing of your Relevant Personal Information by us or on our behalf for direct marketing purposes.</strong></li>
</ul>
<p>This does not affect your statutory rights.</p>
<p>To exercise one or more of these rights, or to ask a question about these rights or any other provision of this Policy, or about our Processing of your Personal Information, please use the contact details provided in Section (T) below. Please note that:</p>
<ul>
<li>in some cases, it will be necessary to provide evidence of your identity before we can give effect to these rights; and</li>
<li>where your request requires the establishment of additional facts (e.g., a determination of whether any Processing is non-compliant with applicable law) we will investigate your request reasonably promptly, before deciding what action to take.</li>
</ul>
<p>For example, we may request:</p>
<ul>
<li>your booking reference or flight numbers and dates;</li>
<li>your frequent flyer number;</li>
<li>your telephone recording details (identifier number, the number you call from, the number and option you dialed, the date and time of your call(s));</li>
<li>A photocopy of your passport or a national ID, so that we can verify your identity; and</li>
<li>signed authority from the individual on whose behalf you are acting.</li>
</ul>
<h2>(Q) Cookies and similar technologies</h2>
<p>When you visit a Site or use an App we will typically place Cookies onto your device, or read Cookies already on your device, subject always to obtaining your consent, where required, in accordance with applicable law. We use cookies to record information about your device, your browser and, in some cases, your preferences and browsing habits. We Process Personal Information through Cookies and similar technologies, in accordance with our Cookie Policy</p>
<h2>(R) Terms of Use</h2>
<p>All use of our Sites, Apps, products, or services is subject to our Disclaimer and Conditions of Carriage &amp; Website Security Policy and Conditions of Carriage. We recommend that you review our Terms of Use regularly, in order to review any changes, we might make from time to time.</p>
<h2>(S) Direct marketing</h2>
<p>Please be aware that we do sometimes send marketing communications that promote a third party&rsquo;s products and services (for example, those of our business partners) as well as our own. To the extent required under applicable law, we may ask for your consent to receiving marketing communications from other members of our group or from third parties. We will at all times, respect your choice as to what communications you wish to receive and the methods by which these are sent.</p>
<p>You may unsubscribe from our promotional email list at any time by simply clicking on the unsubscribe link included in every promotional email we send. After you unsubscribe, we will not send you further promotional emails, but in some circumstances, we will continue to contact you to the extent necessary for the purposes of any Sites, Apps, products, or services you have requested</p>
<p>If you are a registered user of ugandairlines.com, you can change your marketing preferences at any time by amending your profile online.</p>
<h2>(T) Details of Controllers</h2>
<p>Please send your request to:&nbsp;</p>
<p>Manager Commercial Systems &amp; IT<br />Uganda National Airlines Company Limited.<br />Entebbe International Airport,&nbsp;<br />P.O.Box 432,&nbsp;<br />Entebbe, Uganda.</p>
<p>If you have made a flight booking with us but one or more of the flights, are to be provided by another airline(s), that other airline will be a separate Controller of your Personal Information. Check the website or contact the other airline for a copy of the relevant privacy policy.</p>
<p>Other service providers who you may engage with as part of traveling with us, such as car rental providers and hotels will be considered separate Controllers of your Personal Information. Check the website or contact the other airline for a copy of the relevant privacy policy.</p>
<h2>(U) Definitions</h2>
<ul>
<li><strong>&ldquo;App&rdquo;&nbsp;</strong>means any application made available by us (including where we make such applications available via third party stores or marketplaces, or by any other means).</li>
<li><strong>&ldquo;Adequate Jurisdiction&rdquo;</strong>&nbsp;means a jurisdiction that has been formally designated by the European Commission as providing an adequate level of protection for Personal Information.</li>
<li><strong>&ldquo;Cookie&rdquo;</strong>&nbsp;means a small file that is placed on your device when you visit a website (including our Sites). In this Policy, a reference to a &ldquo;Cookie&rdquo; includes analogous technologies such as web beacons and clear GIFs.</li>
<li><strong>&ldquo;Controller&rdquo;</strong>&nbsp;means the entity that decides how and why Personal Information is Processed. In many jurisdictions, the Controller has primary responsibility for complying with applicable data protection laws.</li>
<li><strong>&ldquo;Data Protection Authority&rdquo;</strong>&nbsp;means an independent public authority that is legally tasked with overseeing compliance with applicable data protection laws.</li>
<li><strong>&ldquo;EEA&rdquo;</strong>&nbsp;means the European Economic Area.</li>
<li><strong>&ldquo;Personal Information&rdquo;&nbsp;</strong>means information that is about any individual, or from which any individual is directly or indirectly identifiable, in particular by reference to an identifier such as a name, an identification number, location data, an online identifier or to one or more factors specific to the physical, physiological, genetic, mental, economic, cultural or social identity of that individual.</li>
<li><strong>&ldquo;Process&rdquo;, &ldquo;Processing&rdquo;&nbsp;</strong>or<strong>&ldquo;Processed&rdquo;</strong>&nbsp;means anything that is done with any Personal Information, whether or not by automated means, such as collection, recording, organisation, structuring, storage, adaptation or alteration, retrieval, consultation, use, disclosure by transmission, dissemination or otherwise making available, alignment or combination, restriction, erasure or destruction.</li>
<li><strong>&ldquo;Processor&rdquo;&nbsp;</strong>means any person or entity that Processes Personal Information on behalf of the Controller (other than employees of the Controller).</li>
<li><strong>&ldquo;Profiling&rdquo;</strong>&nbsp;means any form of automated processing of Personal Information consisting of the use of Personal Information to evaluate certain personal aspects relating to a natural person, in particular to analyse or predict aspects concerning that natural person's performance at work, economic situation, health, personal preferences, interests, reliability, behaviour, location or movements.</li>
<li><strong>&ldquo;Relevant Personal Information&rdquo;</strong>&nbsp;means Personal Information in respect of which we are the Controller.</li>
<li><strong>&ldquo;Sensitive Personal Information&rdquo;</strong>&nbsp;means Personal Information about race or ethnicity, political opinions, religious or philosophical beliefs, trade union membership, physical or mental health, sexual life, any actual or alleged criminal offenses or penalties, national identification number, or any other information that is deemed to be sensitive under applicable law.</li>
<li><strong>&ldquo;Standard Contractual Clauses&rdquo;&nbsp;</strong>means template transfer clauses adopted by the European Commission or adopted by a Data Protection Authority and approved by the European Commission.</li>
<li><strong>&ldquo;Site&rdquo;&nbsp;</strong>means any website operated, or maintained, by us or on our behalf.</li>
</ul>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal credit-card-owner-rules">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">?IBE_MSG_PYI_TGR_Credit_card_Rules_and_Conditions?</h4>
				</div>
				<div class="modal-body">?IBE_MSG_PYI_TGR_Credit_card_Rules_and_Condition_Text?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal cvv">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">?IBE_MSG_PYI_TCV_CVV?</h4>
				</div>
				<div class="modal-body"><a href="https://www.cvvnumber.com/cvv.html" target="_blank" style="font-size:11px">What is my CVV code?</a>
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

			<div class="container">
			  <!-- Modal -->
			  <div class="modal fade " role="dialog">
			    <div class="modal-dialog">
			    
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">×</button>
			          <h4 class="modal-title">?IBE_MSG_PYI_Modal_Title_pnr_option_warn?</h4>
			        </div>
			        <div class="modal-body">?IBE_MSG_PYI_Modal_Body_pnr_option_warn_begin?
						<span>01.03.2020 - 23:03:33</span>?IBE_MSG_PYI_Modal_Body_pnr_option_warn_end?
						
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">?IBE_MSG_PYI_Modal_Close?</button><input type="submit" name="j_idt709" value="?BUY TICKET?" class="btn btn-danger btn-contBuy  buy__btn" />					
			        </div>
			      </div>
			      
			    </div>
			  </div>
			  
			</div><input type="hidden" name="javax.faces.ViewState" id="j_id1:javax.faces.ViewState:0" value="WOMUUx7OO26S+hWQt4CaO7jXD/7L9nzcya+2oiVqLMzzGAoCpMLcWEig6cyS2jY+MYDWuam9zZm+hId423KPwbRisHArOg0zNZQLdMJfURPBYZAIBhFo/KGIypOh0ehTMPtIAXpAuyWr6QOz3FuFNrWqokpMoIj3YjX3Fx0G3dKtHAo7K23O5Kytly51iZoWtm47xZAWacd9cNNiM67us6rTQMEba1c4k9WiPMjLUEMYItMSGZjyZa3aEeNBW9pPVBUBrEj9ct+8nuvWkWPIskpyxRiykrb9k4c3HyRsMgz7J0SUrNckb05kHM/QQQPAZ/yHNjDFRUOCjWIyEWQC08q7d1vLR+h4wLsjqZMYV6j9QtsmzHujOtGGqM4yMwIZU/1XL2EZqresRzYMBxtR09Wdz3gTh03jkzenbpYSiu9XB7O4NjPacO5U7f2eOee8WDng3mWZwh4NjELr+GJd4EjsOj93mfB9zZgSrD81IThNsSGBFn86cUWF/6GrC3uywsP6+gqGLgQ6MJmp6VQZ4zldhYflRPqwuOLbGX1vVAIkSBoqHzqisPgUULkN5O8quFqqPiFcv73HciHidzC5plnMc3pQLf/nq4+IPYwuvtWKBx9h2GCayEAoy/fWqNzkKU4ixuiYd0RmtixpVxz2O7jVGqfMCul17DzwohOzSIATuqLIVl4XKipMUiJkuwdt3sCv+3pQynflh3tdvEaFNud4hebcjLhlIjaXDqzvlYRvwjqnUukkWgi8w42OKMqzXd9SnUZZe/dPaPhJ4VWZmnDahk9flAcEZHdipaQV3iAll613Px/sdXfC4a27BapeqmIFHZfFV31SP3hBot+TcjPQrWm4Gp2CjTALhR9QqrD7FsoR+anXy+h2cvKOTH7p0Uhm5TCwzbyzi3ReS7kjz1ppPVT2RcKTMR8btKXcgVWjLW6Tmym40ljxk4P5yStKkuYWdrYaLnl59LIrcKzx7V56JjP9tKE+Cu3+j/E0TmeYvTPKilod6jMl4h/7S6fe2IX8Vp+J52+U5COpNG6s7zeW/D0zgHTvsqCCCYINFx7tGIdmf3ZTrZRX5E/86m4D4JR53+i4mWpa9clxHZskT2XtW3e/LO2y3T9jHPGru5NSJd61fijA0tH4Yn7R8gylQTXBx/NiqS7yCgYYX98P2JZ96XSYSnc6W9KphxqzMrzBaxrn6wNKBLPHhrgeXiuuBaiLAmowYxa5W4pUGR28CCXqing3mSoBXy4b5ewfdBpgdTSlafjFc0kjYXvWWRycLaPbJ73SZvIV/6wPPWOSdH2coEyWMp5pp/l14PbEPih0sDJxzwHlqTh+Npu2pm83Re0rwN7ZO1mvjs2hJTrPhEZuXaBPSRRXsjPeWllPK/lgeEGUEAbu7sjrfkmRPD6S3UZLeZzXRPYqhDurq4YbXllN31ergj4MMl+Ug0FtT5dDikm7QW3yTfBBHFGJGlny/s0kl0gs+5R4CdN0/y1VSnHz5IRN3bq/tELR0RLgSYhNsGDbuWw39dnO6V7BHFH0J2kdze3AFDUTmBpDmb0f0mGCSRJSB5fKUC5xjAa4A7Jxc38tO4M/eDO+EFP1Ex09mQmaACHLUj96aZ3pEEmJl0+ZzvtXmNEXUzqigu+qDsPvTIOGOOyQcXuozHc5/PmU4HvGZF+KuNQGEbKEvyvmUF3JV6bXcuD2u3Wn95Y1f2Ki0dbyXSNjEINf3CMz5ZiUlVEE5f8blNgSX89Ot9xr0pWXHqZfJ+U3SyMR6n2pfVywDXg+s67/nG3SWD09laIOhwuuZ8rPIqDT+jVcwBZjFRiQ7Ga6M9fdICe3Y5Wh+TlW0o9VzJCBcO3+bBNLqpaKcllD7uou46Dt55QhTBf3j5972s4fg/RofupXsnDdDlnkUt8Fa5xQffvSBgPRjaILBbWGi2IYlGySw7jkO7qQtM/+eIpfZ5ohhzknPG7+v7NlwC2OysJUZ0D905P9aiDzpvV5kuFy7zolK+sLBZKZAbbwa+MtYREaeI+alHVFDqd0cCcbLv/UTVpmIRqCQZedceJNgE6hPyWcVg+72QwqPgY7o6n8CMp2RKTc2+lRouY=" autocomplete="off" />
</form>
		

		</div>