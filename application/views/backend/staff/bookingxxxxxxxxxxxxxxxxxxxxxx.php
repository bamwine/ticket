<form  class="form-horizontal" id="bookingform"  action="<?php echo base_url(); ?>staff/bookings/create" method="post"  data-stripe-publishable-key="<?php echo $this->db->get_where('settings' , array('type' => 'stripe_publishable_key'))->row()->description; ?>"
                                                   enctype="multipart/form-data">


<div class="row">
<div class="col-sm-12">
<div class="panel panel-info">
<div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Ticket Bookings');?> 
<div class="pull-right"><a href="<?php echo base_url(); ?><?php echo $account_type; ?>/ticket" ><i class="fa fa-eye"></i>&nbsp;&nbsp;<?php echo get_phrase('VIEW_ TICKETS');?><i class="btn btn-info btn-xs"></i></a> <a href="#" data-perform="panel-dismiss"></a> </div>
</div>

<div class="panel-body">

													
														

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
                            <input type="text" autocomplete="off" class="form-control" id="card_num" name="card_num" value="4242424242424242" maxlength="16"/>
                        </div>
                    </div>
                    
                     <div class="form-group">
                       <label class="col-md-12"><?php echo get_phrase('CVC'); ?></label>

                        <div class="col-sm-12">
                            <input type="text" autocomplete="off" class="form-control" id="card_cvc" name="card_cvc" value="123"  maxlength="3" />
                        </div>
                    </div>
					
					
                      <div class="form-group">
                       <label class="col-md-4"><?php echo get_phrase('expiry_date');?>*</label>
                       <div class="col-md-4">
                            <input type="number" autocomplete="off" class="form-control" id="card_exp_month" name="card_exp_month" value="12" placeholder="MM" />
                       </div>
                        <div class="col-md-4">
                            <input type="number"  autocomplete="off"  class="form-control" id="card_exp_year" placeholder="YYYY" value="2020" name="card_exp_year" />
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
</div>





</form>



<!-- This is needed when you send requests via Ajax -->
        <script type="text/javascript">
            var baseurl = '<?php echo base_url(); ?>';
        </script>

<script type="text/javascript">

    $(function () {
        get_calc_value();
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
				//$('#total').val('<?php echo base_url(); ?>') ;
				
				
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



