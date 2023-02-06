<form  class="form-horizontal" id="bookingform"  action="<?php echo base_url(); ?>staff/bookings/create" method="post" data-stripe-publishable-key="<?php echo $this->db->get_where('settings' , array('type' => 'stripe_publishable_key'))->row()->description; ?>" enctype="multipart/form-data">


<div class="row">
<div class="col-sm-12">
<div class="panel panel-info">
<div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Ticket Bookings');?> 
<div class="pull-right"><a href="<?php echo base_url(); ?><?php echo $account_type; ?>/ticket" ><i class="fa fa-eye"></i>&nbsp;&nbsp;<?php echo get_phrase('VIEW_ TICKETS');?><i class="btn btn-info btn-xs"></i></a> <a href="#" data-perform="panel-dismiss"></a> </div>
</div>

<div class="panel-body">

				<div class="row">
						<div class="col-sm-12">
						
									<div class="panel panel-info">
									<div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('AVAILABLE FLIGHTS');?>
									<div class="pull-right"><?php echo get_phrase('SELECT A FLIGHT');?></div>

									</div>
									<div class="panel-wrapper collapse in" aria-expanded="true">

									<div class="panel-body table-responsive">

									<table id="example23" class="display nowrap" cellspacing="0" width="100%">
									<thead>
									<tr>

									<th><?php echo get_phrase('FLIGHT NUMBER');?></th>

									<th><?php echo get_phrase('ORIGIN / DESTINATION');?></th>
									<th><?php echo get_phrase('TICKET PRICE');?></th>
									<th><?php echo get_phrase('DEPARTURE / ARRIVAL DATE');?></th>
									<th><?php echo get_phrase('DEPARTURE / ARRIVAL TIME');?></th>

									<th><?php echo get_phrase('Choose');?></th>
									</tr>
									</thead>

									<tbody>
									<?php 
									$flightschedule	= $flightschedule;
									foreach($flightschedule as $row):?>
									<tr>


									<td><?php echo $row['flight_no']?></td>

									<td>
									<?php
									echo  '<button type="button" class="btn btn-success btn-circle btn-xs" >O</button> &nbsp;&nbsp;<div class="label label-success">' . get_phrase($row['from_city']) . '</div> <br>';
									echo '<button type="button" class="btn btn-danger btn-circle btn-xs" >D</button> &nbsp;&nbsp;<div class="label label-danger">' . get_phrase($row['to_city']) . '</div>';
									?>
									</td>
									<td>
									<?php
									echo  '<button type="button" class="btn btn-success btn-circle btn-xs" >ECO</button> &nbsp;&nbsp;<div class="label label-success">' . get_phrase($row['price_economy']) . '</div> <br>';
									echo '<button type="button" class="btn btn-danger btn-circle btn-xs" >BUS</button> &nbsp;&nbsp;<div class="label label-danger">' . get_phrase($row['price_business']) . '</div>';
									?>
									</td>                
									<td>
									<?php
									echo  '<button type="button" class="btn btn-info btn-circle btn-xs" ><i class="fa fa-plane"></i></button> &nbsp;&nbsp;<div class="label label-info">' . get_phrase($row['departure_date']) . '</div> <br>';
									echo '<button type="button" class="btn btn-danger btn-circle btn-xs" ><i class="fa fa-plane-arrive"></i></button> &nbsp;&nbsp;<div class="label label-danger">' . get_phrase($row['arrival_date']) . '</div>';
									?>
									</td>
									<td>
									<?php
									echo  '<button type="button" class="btn btn-info btn-circle btn-xs" ><i class="fa fa-plane"></i></button> &nbsp;&nbsp;<div class="label label-info">' . get_phrase($row['departure_time']) . '</div> <br>';
									echo '<button type="button" class="btn btn-danger btn-circle btn-xs" ><i class="fa fa-plane-arrive"></i></button> &nbsp;&nbsp;<div class="label label-danger">' . get_phrase($row['arrival_time']) . '</div>';
									?>
									</td>                



									<td>
									<div class="form-group">
									<input type="radio" class="check form-control" id="select_flight" value="<?php echo $row['flight_no']?>" name="select_flight" data-radio="iradio_flat-red" onclick="return get_calc_value()">
									<label for="select_flight">Book</label>
									</div>   
									</td>
									</tr>
									<?php endforeach;?>
									</tbody>
									</table>


									</div>


									</div>
									</div>
									
						
						</div>
				
				</div>
						 								
<!-- ///////////////////////////////  part one///////////////////////////////////////////////////////// -->

<div class="row">

<div class="col-md-6">

<div class="row">
<div class="col-sm-12">
<div class="panel panel-info">
<div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Passenger details');?></div>
<div class="panel-wrapper collapse in" aria-expanded="true">
<div class="panel-body table-responsive">

	<div class="row">

<div class="col-md-6">

<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('Your Ticket No');?></label>
	<div class="col-xs-5">
		<input type="text" class="form-control" value="<?php echo h_generate_ticket_id();?>" name="ticket" id="ticket" readonly required /> </div>
</div>

<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('Passenger_Name');?></label>
	<div class="col-xs-5">
		<input type="text" class="form-control" name="username" id="username" required /> </div>
</div>

<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('Class_type');?></label>
	<div class="col-sm-12">

	<select name="classid" id="classid" class="form-control select2" onchange="return get_calc_value()" required>

	<option value="price_economy"><?php echo get_phrase('Economy');?></option>
	<option value="price_business"><?php echo get_phrase('Business ');?></option>

	</select>
	</div>
</div>


<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('Phone Number');?></label>
	<div class="col-xs-5">
		<input type="number" class="form-control" name="phone" required /> </div>
</div>



</div>



<div class="col-md-6">

<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('Flight No');?></label>
	<div class="col-xs-5">
		<input type="text" class="form-control"  name="flightnos" id="flightnos" readonly required /> </div>
</div>


<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('Email address');?></label>
	<div class="col-xs-5">
		<input type="email" class="form-control" name="email" required /> </div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('gender');?></label>
	<div class="col-sm-12">

	<select name="gender" id="gender" class="form-control select2" onchange="return get_short_name()" required>

	<option value="male"><?php echo get_phrase('Male');?></option>
	<option value="female"><?php echo get_phrase('Female');?></option>

	</select>
	</div>
</div>



<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('Nationality');?></label>
	<div class="col-sm-12">

	<select name="nationality" id="nationality" class="form-control select2"  required>

	 <option value=""><?php echo get_phrase('select_Nationality_first');?></option>
	

	</select>
	</div>
</div>

</div>

</div>	
													

</div>
</div>
</div>
</div>

</div>

</div>


<div class="col-md-6">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-info">
<div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Optional extras');?></div>
<div class="panel-wrapper collapse in" aria-expanded="true">
<div class="panel-body table-responsive">

			
		<div class="form-group">
				<label class="col-xs-3 control-label"><?php echo get_phrase('luggage Weight(kgs)');?></label>
				<div class="col-xs-5">
					<input type="number" class="form-control" name="lagweight" id="lagweight" value="0" onchange="return get_calc_value()" /> </div>
			</div>
					
							<div class="form-group">
								<label class="col-xs-3 control-label"> <?php echo get_phrase('Unit cost');?></label>
								<div class="col-xs-5">
									<input type="number" class="form-control" name="lag_cost" id="lag_cost" onchange="return get_calc_value()" /> </div>
							</div>	
									<div class="form-group">
										<label class="col-xs-3 control-label"><?php echo get_phrase('Payment ID ');?></label>
										<div class="col-xs-5">
										<input type="text" class="form-control" value="<?php echo h_generate_payment_id();?>" name="payid" id="payid" readonly required /> </div>
									</div>
											
									 <div class="form-group">
										<label class="col-xs-3 control-label"><?php echo get_phrase('Total Amount ');?> (<?php echo $this->db->get_where('front_end', array('type' => 'currency'))->row()->description; ?>)</label>
										<div class="col-xs-5">
											<input type="number" class="form-control" name="total" id="total"  readonly required /> </div>
									</div>
			
					


</div>
</div>
</div>
</div>
</div>

</div>

</div>														
														

<!-- ///////////////////////////////  part two///////////////////////////////////////////////////////// -->
														
<div class="row">
<div class="col-sm-12">
<div class="panel panel-info">
<div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Payment Confirmation');?></div>
<div class="panel-wrapper collapse in" aria-expanded="true">
<div class="panel-body table-responsive">



				<div class="form-group">
					<label class="col-xs-3 control-label"><?php echo get_phrase('Final Amount ');?> (<?php echo $this->db->get_where('front_end', array('type' => 'currency'))->row()->description; ?>)</label>
					<div class="col-xs-5">
						<input type="number" class="form-control" name="ftotal" id="ftotal"   required /> </div>
				</div>

			 <div class="form-group">
			 <label class="col-md-4"><?php echo get_phrase('Payment Method'); ?></label>
					
					 
					<div class="col-md-4">
					<label class=""><?php echo get_phrase('cash'); ?></label>

                           <input type="radio" class="check form-control" id="paymethod" value="cash" name="paymethod" data-radio="iradio_flat-red" onclick="return get_calc_value()" required>
                        </div>
						
						<div class="col-md-4">
						<label class=""><?php echo get_phrase('card'); ?></label>

                           <input type="radio" class="check form-control" id="paymethod" value="card" name="paymethod" data-radio="iradio_flat-red" onclick="return get_calc_value()" required>
                        </div>
                 </div> 
				 
					<div class="form-group">
                       <label class="col-md-12"><?php echo get_phrase('card_number'); ?></label>

                        <div class="col-md-12">
                            <input type="text" autocomplete="off" class="form-control" id="card_num" name="card_num" maxlength="16"/>
                        </div>
                    </div>
                    
                     <div class="form-group">
                       <label class="col-md-12"><?php echo get_phrase('CVC'); ?></label>

                        <div class="col-sm-12">
                            <input type="text" autocomplete="off" class="form-control" id="card_cvc" name="card_cvc" maxlength="3"/>
                        </div>
                    </div>
					
					
                      <div class="form-group">
                       <label class="col-md-4"><?php echo get_phrase('expiry_date');?>*</label>
                       <div class="col-md-4">
                            <input type="text" autocomplete="off" class="form-control" id="card_exp_month" name="card_exp_month" placeholder="MM" />
                       </div>
                        <div class="col-md-4">
                            <input type="text"  autocomplete="off"  class="form-control" id="card_exp_year" placeholder="YYYY" name="card_exp_year" />
                        </div>
                    </div>
					<div class="form-group">
                        <div class="col-sm-offset-4">
                            <button type="submit" class="btn btn-info btn-rounded btn-sm" id="submit-button">
                                <strong style="color:#fff"> <i class="fa fa-credit-card"></i>&nbsp;<?php echo get_phrase('confirm_payment'); ?></strong>
                            </button>
                            
                        </div>
                    </div>							

</div>
</div>
</div>
</div>
</div>
														
</div>

</div>
</div>


</div>






</form>



<!-- This is needed when you send requests via Ajax -->
        <script type="text/javascript">
            var baseurl = '<?php echo base_url(); ?>';
        </script>

<script type="text/javascript">

    $(function () {
        get_calc_value();
		get_country_details();
    });
	
    function get_calc_value() {
        var flightno = $('#select_flight').val();	
		var classid = $('#classid').val();
			var lag_cost = $('#lag_cost').val();
			var lagweight = $('#lagweight').val();
		
		var lagtotalprice =(Number(lag_cost)*Number(lagweight));
		
        $.ajax({
			type:'POST',
            url: '<?php echo base_url(); ?>staff/get_flight_details/getdetils',
			data:{'flight_no':flightno,'class_type':classid},			
            async: false,
            success: function (response)
            { 
				//alert(response);
				var finalp=(Number(response)+lagtotalprice);
                $('#flightnos').val(flightno);
				$('#total').val(finalp);				
				$('#ftotal').val(finalp);
				
				
            }
        });
    }
	
	
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


</script>




<script type="text/javascript" src="https://js.stripe.com/v2/"></script> 
<script type="text/javascript" src="https://js.stripe.com/v3/"></script> 

<script language="javascript" type="text/javascript">



$(function(){
	
	$form = $('#bookingform');
	

	
    $('#bookingform').bind('submit', function(evt){
        
        //evt.preventDefault();
	
		 $('#submit-button').attr("disabled", "disabled");		 
         // createToken returns immediately - the supplied callback submits the form if there are no errors
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
			Stripe.createToken({
                number: $('card_num').val(),
                cvc: $('card_cvc').val(),
                exp_month: $('card_exp_month').val(),
                exp_year: $('card_exp_year').val()
            }, stripeResponseHandler);
             return false;       
    });
	
	
	
	
	
	 function stripeResponseHandler(status, response) {
		 alert("staus "+status);
		 alert("response "+response);
        if (response.error) {
            // re-enable the submit button
            $('#submit-button').removeAttr("disabled");
            // show the errors on the form
           
        } else {
            // token contains id, last4, and card type
            var token = response['id'];
			 alert("response "+token);
            // insert the token into the form so it gets submitted to the server
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
			// and submit			
            $form.get(0).submit();
        }
		
		
    }
	
	
});    
    </script>





