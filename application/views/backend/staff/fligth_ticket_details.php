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
                                    <div class="pull-left"> 
				<address>
                  <h3> &nbsp;<b class="text-danger"><?php echo $this->db->get_where('front_end', array('type' => 'cop_name'))->row()->description; ?></b></h3>
                  <p class="text-muted m-l-5">Location:&nbsp;&nbsp;<?php echo $this->db->get_where('front_end', array('type' => 'location'))->row()->description; ?>, <br/>
                    Email:&nbsp;&nbsp;<?php echo $this->db->get_where('front_end', array('type' => 'emails'))->row()->description; ?>, <br/>
                    Tel:&nbsp;&nbsp;<?php echo $this->db->get_where('front_end', array('type' => 'phone'))->row()->description; ?>, <br/>
                    </p>
                  </address>

  <p>
	 <div class="pull-left" > 
	 <address>
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
                  <b>FARE PRICE :</b> </i> <?php echo $ticket_data->amoint_paid;?>&nbsp;<?php echo $this->db->get_where('front_end', array('type' => 'currency'))->row()->description; ?></p>                  
				  <p><b>TRAVEL DATE :</b> </i> <?php echo $ticket_data->journey_date;?></p>
				  <p><b>FLIGHT NUMBER :</b><?php echo $ticket_data->flight_no;?></p>
				   <p><b>CLASS TYPE:</b> </i> <?php echo $ticket_data->class;?></p>
                  <p><b>BOOKING STATUS :</b> </i> <?php echo $ticket_data->booking_status;?></p>
                  
				  </address> 
				  </div>
                               
					
					</div>
	<p class="row">				
<a href="<?php echo base_url();?>staff/receipt/<?php echo h_encrypt_decrypt($ticket_data->tick_number)?>"  target="_blank" class="btn btn-success btn-sm pull-right m-l-20 btn-rounded hidden-xs hidden-sm waves-effect waves-light" style="color:white"><i class="fa fa-print"></i>&nbsp;Print Receipt </a>
<a href="<?php echo base_url();?>staff/ticketd/<?php echo h_encrypt_decrypt($ticket_data->tick_number)?>"  target="_blank" class="btn btn-info btn-sm pull-right m-l-20 btn-rounded hidden-xs hidden-sm waves-effect waves-light" style="color:white"><i class="fa fa-print"></i>&nbsp;Print Ticket </a>
</p>
							
								
                                 <div class="sttabs tabs-style-iconbox">
                                    <nav>
                                        <ul>
                                            <li><a href="#Passenger" class="sticon ti-home"><span>Passenger Details</span></a></li>
                                            <li><a href="#Flight" class="sticon ti-gift"><span>Flight Details</span></a></li>
                                            <li><a href="#Payment" class="sticon ti-upload"><span>Payment Details</span></a></li>
                                            
										</ul>
                                    </nav>
                                    <div class="content-wrap">
                                        <section id="Passenger">
<div class="col-sm-12">
<div class="panel panel-info">
<div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Passenger details');?></div>
<div class="panel-wrapper collapse in" aria-expanded="true">
<div class="panel-body table-responsive">

<form>

<div class="row">

<div class="col-md-6">

<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('Your Ticket No');?></label>
	<div class="col-xs-5">
		<input type="text" class="form-control" value="<?php echo $ticket_data->tick_number;?>" name="ticket" id="ticket" readonly required /> </div>
</div>

<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('Passenger_Name');?></label>
	<div class="col-xs-5">
		<input type="text" class="form-control" name="username" id="username" required value="<?php echo $client_data->customer_name;?>" /> </div>
</div>

<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('Class_type');?></label>
	<div class="col-sm-12">

	<select name="classid" id="classid" class="form-control select2" onchange="return get_calc_value()" required>

	<option value="price_economy"  <?php if($ticket_data->class == 'Economy')echo 'selected';?> ><?php echo get_phrase('Economy');?></option>
	<option value="price_business"  <?php if($ticket_data->class == 'Business')echo 'selected';?>><?php echo get_phrase('Business ');?></option>

	</select>
	</div>
</div>


<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('Phone Number');?></label>
	<div class="col-xs-5">
		<input type="number" class="form-control" name="phone"  value="<?php echo $client_data->phone;?>" required /> </div>
</div>



</div>



<div class="col-md-6">

<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('Flight No');?></label>
	<div class="col-xs-5">
		<input type="text" class="form-control" readonly name="flightnos"  id="flightnos" value="<?php echo $ticket_data->flight_no;?>" required /> </div>
</div>


<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('Email address');?></label>
	<div class="col-xs-5">
		<input type="email" class="form-control" name="email"  value="<?php echo $client_data->email;?>" required /> </div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('gender');?></label>
	<div class="col-sm-12">

	<select name="gender" id="gender" class="form-control select2" onchange="" required>

	<option value="male" <?php if($client_data->gender == 'Male')echo 'selected';?> > <?php echo get_phrase('Male');?></option>
	<option value="female" <?php if($client_data->gender == 'female')echo 'selected';?>><?php echo get_phrase('Female');?></option>

	</select>
	</div>
</div>

<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('Nationality');?></label>
	<div class="col-xs-5">
		<input type="text" class="form-control" name="nationality" value="<?php echo $client_data->nationality;?>" required /> </div>
</div>

</div>

</div>	
													
</form>
</div>
</div>
</div>
</div>

</section>
                                        <section id="Flight">
										
<div class="col-sm-12">
<div class="panel panel-info">
<div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Flight details');?></div>
<div class="panel-wrapper collapse in" aria-expanded="true">
<div class="panel-body table-responsive">

<form>

<div class="row">

<div class="col-md-6">

<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('DEPARTURE');?></label>
	<div class="col-xs-5">
		<input type="text" class="form-control" value="<?php echo $flight_data->from_city;?>"  readonly  /> </div>
</div>

<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('DEPARTURE TIME');?></label>
	<div class="col-xs-5">
		<input type="text" class="form-control"   value="<?php echo $flight_data->departure_time;?>" readonly /> </div>
</div>




</div>



<div class="col-md-6">

<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('DESTINATION');?></label>
	<div class="col-xs-5">
		<input type="text" class="form-control"    value="<?php echo $flight_data->to_city;?>" readonly /> </div>
</div>


<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('ARRIVAL  TIME');?></label>
	<div class="col-xs-5">
		<input type="email" class="form-control"  value="<?php echo $flight_data->arrival_time;?>" readonly /> </div>
</div>





</div>

</div>	
													
</form>
</div>
</div>
</div>
</div>
										
										</section>
                                          
                                        <section id="Payment">
                                        <div class="col-sm-12">
<div class="panel panel-info">
<div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Payment Details');?></div>
<div class="panel-wrapper collapse in" aria-expanded="true">
<div class="panel-body table-responsive">

<form action="<?php echo base_url(); ?>staff/bookings/update/pay" method="post" enctype="multipart/form-data">

<div class="row">



<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('Payment ID ');?></label>
	<div class="col-xs-5">
	<input type="text" class="form-control" value="<?php echo $paye_data->pay_ref;?>" name="payid" id="payid" readonly required /> </div>
</div>
		
 <div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('Paid Amount ');?> (<?php echo $this->db->get_where('front_end', array('type' => 'currency'))->row()->description; ?>)</label>
	<div class="col-xs-5">
		<input type="number" class="form-control" name="total" id="total"  value="<?php echo $paye_data->payment_amount;?>" required /> </div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('Payment Method');?></label>
	<div class="col-sm-12">

	<select name="paymethod" id="paymethod" class="form-control select2" onchange="return get_calc_value()" required>

	<option value="cash"  <?php if($paye_data->payment_mode == 'cash')echo 'selected';?> ><?php echo get_phrase('cash');?></option>
	<option value="card"  <?php if($paye_data->payment_mode == 'card')echo 'selected';?>><?php echo get_phrase('card');?></option>

	</select>
	</div>
</div>

<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('Booking Status');?></label>
	<div class="col-sm-12">

	<select name="bookstate" id="bookstate" class="form-control select2" onchange="return get_calc_value()" required>
	<option value="PENDING"  <?php if($ticket_data->booking_status == 'PENDING')echo 'selected';?>><?php echo get_phrase('PENDING');?></option>
	<option value="CONFIRMED" <?php if($ticket_data->booking_status == 'CONFIRMED')echo 'selected';?> ><?php echo get_phrase('CONFIRMED');?></option>
	
	</select>
	</div>
</div>


<div class="form-group">
	<div class="col-sm-offset-4">
		<button type="submit" class="btn btn-info btn-rounded btn-sm" >
			<strong style="color:#fff"> <i class="fa fa-credit-card"></i>&nbsp;<?php echo get_phrase('Update_payment'); ?></strong>
		</button>
		
	</div>
</div>					

</div>	
													
</form>
</div>
</div>
</div>
</div>
										</section>
                                       
                                        
                                    </div>
                                    <!-- /content -->
                                </div>
                                <!-- /tabs -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .row -->
				
