<?php 
//$ticket_data = $this->db->get_where('flight_ticket_details' , array('tick_number' => 'TKT20200723026670'))->row();
$ticket_data = $ticket_info->row();
$client_data = $this->db->get_where('flight_passengers' , array('tick_number' => $ticket_data->tick_number))->row();
$paye_data = $this->db->get_where('flight_payment_details' , array('pay_ref' => $client_data->payment_id))->row();
$flight_data = $this->db->get_where('flights_schedule' , array('flight_no' => $ticket_data->flight_no))->row();
$aircraft_data = $this->db->get_where('flight_aircraft_d' , array('jet_id' => $flight_data->jet_id))->row();

//echo $ticket_data->tick_number;
?>
                <div class="row" id="fromHTMLtestdiv">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3><b><?php echo get_phrase('YOUR TICKET');?></b> <span class="pull-right">#<?php echo $ticket_data->tick_number;?></span></h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left"> <address>
                  <h3> &nbsp;<b class="text-danger"><?php echo $this->db->get_where('front_end', array('type' => 'cop_name'))->row()->description; ?></b></h3>
                  <p class="text-muted m-l-5">Location:&nbsp;&nbsp;<?php echo $this->db->get_where('front_end', array('type' => 'location'))->row()->description; ?>, <br/>
                    Email:&nbsp;&nbsp;<?php echo $this->db->get_where('front_end', array('type' => 'emails'))->row()->description; ?>, <br/>
                    Tel:&nbsp;&nbsp;<?php echo $this->db->get_where('front_end', array('type' => 'phone'))->row()->description; ?>, <br/>
                    </p>
                  </address>

  <p>
	 <div class="pull-left" > <address>
	  <h3> &nbsp;<b class="text-danger">FLIGHT DETAILS </b></h3>
	  <p >
	    <b>DEPARTURE:</b>&nbsp;&nbsp;<?php echo $flight_data->from_city;?>&nbsp;&nbsp;&nbsp;&nbsp;<span><b>DEPARTURE TIME:</b>&nbsp;&nbsp;<?php echo $flight_data->departure_time;?></span> <br/>
		<b>DESTINATION :</b>&nbsp;&nbsp;<?php echo $flight_data->to_city;?>&nbsp;&nbsp;&nbsp;&nbsp;<span><b>ARRIVAL  TIME:</b>&nbsp;&nbsp;<?php echo $flight_data->arrival_time;?></span> <br/>
		
		</p>
		<p><b>AIR CRAFT NO  :</b> </i> <?php echo $aircraft_data->jet_id .'-'.$aircraft_data->jet_type;?></p>
		

	  </address> 
	 </div>
				  
</p>				  

</div>
				  
				
                                    
									<div class="pull-right ">
						
						<address>
                  <h3>TRAVELER DETAILS,</h3>
                  <h4 class="font-bold"><?php echo $client_data->customer_name;?></h4>
                  <p class="text-muted m-l-30"><?php echo $client_data->nationality;?>, <br/>
                    <?php echo $client_data->gender;?>, <br/>
                    <?php echo $client_data->phone;?>, <br/>
                    <?php echo $client_data->email;?></p>
                 <p><b>FARE PRICE :</b> </i> <?php echo $ticket_data->amoint_paid;?>&nbsp;<?php echo $this->db->get_where('front_end', array('type' => 'currency'))->row()->description; ?></p>                  
				  <p><b>TRAVEL DATE :</b> </i> <?php echo $ticket_data->journey_date;?></p>
				  <p><b>FLIGHT NUMBER :</b><?php echo $ticket_data->flight_no;?></p>
				   <p><b>CLASS TYPE:</b> </i> <?php echo $ticket_data->class;?></p>
                  <p><b>BOOKING STATUS :</b> </i> <?php echo $ticket_data->booking_status;?></p>
                  
				  </address> 
				  </div>
                               
					
					</div>
                                <!--div class="col-md-12">
                                    <div class="table-responsive m-t-40">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Item Name</th>
                                                    <th class="text-right">Quantity</th>
                                                    <th class="text-right">Charges</th>
                                                    <th class="text-right">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Visiting Charges</td>
                                                    <td class="text-right">-</td>
                                                    <td class="text-right">$100</td>
                                                    <td class="text-right">$100</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Medicines</td>
                                                    <td class="text-right">10</td>
                                                    <td class="text-right">$100</td>
                                                    <td class="text-right">$1000</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>X-ray Reports</td>
                                                    <td class="text-right">2</td>
                                                    <td class="text-right">$600</td>
                                                    <td class="text-right">$1200</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td>Other Charges</td>
                                                    <td class="text-right">-</td>
                                                    <td class="text-right">-</td>
                                                    <td class="text-right">$300</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    
									</div>
                                </div-->
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <p>Sub - Total amount: $<?php echo $ticket_data->amoint_paid;?></p>
                                        
                                        <hr>
                                        <h3><b>Amount Paid :</b> $<?php echo $ticket_data->amoint_paid;?></h3> </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right" id="bypassme">
                                        <!--button class="btn btn-danger" type="submit"> Proceed to payment </button-->
                                        <button onClick="printPDF();" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .row -->
				
	<script src="<?php echo base_url(); ?>optimum/plugins/bower_components/jsPDF/jspdf.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/plugins/bower_components/jsPDF/html2canvas.js" type="text/javascript"></script>
			

<script type="text/javascript">

    $(function () {
        printPDF();
    });
    function printPDF() {
    
		var pdf = new jsPDF('p', 'in', 'letter')

	// source can be HTML-formatted string, or a reference
	// to an actual DOM element from which the text will be scraped.
	, source = $('#fromHTMLtestdiv')[0]

	// we support special element handlers. Register them with jQuery-style 
	// ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
	// There is no support for any other type of selectors 
	// (class, of compound) at this time.
	, specialElementHandlers = {
		// element with id of "bypass" - jQuery style selector
		'#bypassme': function(element, renderer){
			// true = "handled elsewhere, bypass text extraction"
			return true
		}
	}

	// all coords and widths are in jsPDF instance's declared units
	// 'inches' in this case
	pdf.fromHTML(
		source // HTML string or DOM elem ref.
		, 0.5 // x coord
		, 0.5 // y coord
		, {
			'width':7.5 // max width of content on PDF
			, 'elementHandlers': specialElementHandlers
		}
	)

	pdf.save('<?php echo $client_data->customer_name;?>-TICKET.pdf');
	}

</script>				