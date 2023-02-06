<?php 

$ticket_data = $flightdata;
$client_data = $this->db->get_where('flight_passengers' , array('tick_number' => $ticket_data->tick_number))->row();
$paye_data = $this->db->get_where('flight_payment_details' , array('pay_ref' => $client_data->payment_id))->row();
$flight_data = $this->db->get_where('flights_schedule' , array('flight_no' => $ticket_data->flight_no))->row();
$aircraft_data = $this->db->get_where('flight_aircraft_d' , array('jet_id' => $flight_data->jet_id))->row();

//echo $ticket_data->tick_number;
?>


<div class="install-step-group">
    <div class="col-md-2 col-lg-2 col-sm-2 col-md-offset-3 col-sm-offset-3 col-lg-offset-3">
        <div class="circle circle1 ">
            1
        </div>   
        <div class="step-line "></div> 
    </div>
    <div class="col-md-2 col-lg-2 col-sm-2">
        <div class="circle circle2 ">
            2
        </div>
        <div class="step-line "></div>
    </div>
    <div class="col-md-2 col-lg-2 col-sm-2">
        <div class="circle circle3 active">
            3
        </div>
        <div class="step-line "></div>
    </div>
	
	<div class="col-md-2 col-lg-2 col-sm-2">
        <div class="circle circle3">
            4
        </div>
        <div class="step-line "></div>
    </div>
	<div class="col-md-2 col-lg-2 col-sm-2">
        <div class="circle circle3">
            5
        </div>
        <div class="step-line "></div>
    </div>
	
    <div class="col-md-2 col-lg-2 col-sm-2">
        <div class="circle circle4">
            6
        </div>
        Finish
    </div>
    <div class="clear"></div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="panel panel-info">
<div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Confirm details');?></div>
<div class="panel-wrapper collapse in" aria-expanded="true">
<div class="panel-body table-responsive">

<form action="<?php echo base_url()?>install/customer/confirm" method="post">

 <div class="row">

<div class="col-md-6">

<p>
	 <div class="pull-left" > <address>
	  <h3> &nbsp;<b class="text-danger">Customer  DETAILS </b></h3>
	  
		<p><b>NAMES:</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->session->userdata('customer_name');?></p>	
		<p><b>Gender:</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->session->userdata('gender');?></p>	
		<p><b>Nationality:</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->session->userdata('nationality');?></p>		
		<p><b>Email:</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->session->userdata('email');?></p>	
		<p><b>Tel:</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->session->userdata('phone');?></p>	
		<p><b>Ticket No:</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->session->userdata('ticket_no');?></p>	
        <p><b>BOOKING STATUS :</b>&nbsp;&nbsp;&nbsp;&nbsp;Waiting</p>

	  </address> 
	 </div>
				  
</p>



</div>



<div class="col-md-6">

<p>
	 <div class="pull-right" > <address>
	  <h3> &nbsp;<b class="text-danger">FLIGHT DETAILS </b></h3>
			<p>
			<b>DEPARTURE:</b>&nbsp;&nbsp;<?php echo $flight_data->from_city;?>&nbsp;&nbsp;&nbsp;&nbsp;<span><b>DEPARTURE TIME:</b>&nbsp;&nbsp;<?php echo $flight_data->departure_time;?></span> <br/>
			<b>DESTINATION :</b>&nbsp;&nbsp;<?php echo $flight_data->to_city;?>&nbsp;&nbsp;&nbsp;&nbsp;<span><b>ARRIVAL  TIME:</b>&nbsp;&nbsp;<?php echo $flight_data->arrival_time;?></span> <br/>
			</p>
			<p><b>AIR CRAFT NO  :</b> </i> <?php echo $aircraft_data->jet_id .'-'.$aircraft_data->jet_type;?></p>
			<p><b>FARE PRICE :</b> </i> <?php echo $this->session->userdata('pay_amount');?>&nbsp;<?php echo $this->db->get_where('front_end', array('type' => 'currency'))->row()->description; ?></p>                  
			<p><b>TRAVEL DATE :</b> </i> <?php echo $flight_data->departure_date;?></p>
			<p><b>FLIGHT NUMBER :</b><?php echo $flight_data->flight_no;?></p>
			<p><b>CLASS TYPE:</b> </i> <?php echo $this->session->userdata('class_type')?></p>

                 

	  </address> 
	 </div>
				  
</p>



</div>
</div>	

<div class="form-group col-md-4  text-right" >
<a class="btn btn-green btn-sm btn-icon icon-left" style="color:white;" href="<?php echo base_url();?>install/userinfo"><i class="fa fa-reply"></i>previous</a>

</div>


<div class="row">

	<div class="form-group col-md-8 col-md-offset-2 text-right">
		<button class="btn btn-green btn-sm btn-icon icon-left"><i class="fa fa-check"></i>Confirm</button>
	</div>
</div>
														
</form>
	
	
</div>
</div>
</div>
</div>
</div>
														

 <script type="text/javascript">
            var baseurl = '<?php echo base_url(); ?>';
        </script>

<script type="text/javascript">

  $(function () {       
	get_country_details();
    });


			function get_country_details() {
			

    	$.ajax({
            url: '<?php echo base_url(); ?>staff/get_country_details',
            success: function(response)
            {
				//all work well
                jQuery('#nationality').html(response);				
				//$('#nationality').append(response);
            }
        });

    }
	
    $('form').submit(function (e) {		
		
        if ($('#user').val() == '') {
            $('.tips').html('Plase input email.');
            $('#user').focus();
            e.preventDefault();
        } else if ($('#password').val() == '') {
            $('.tips').html('Plase input password.');
            $('#password').focus();
            e.preventDefault();
        } else if ($('#password').val() != $('#conf_password').val()) {
            $('.tips').html('Please check your password.');
            $('#password').focus();
            e.preventDefault();
        }
    });
</script>