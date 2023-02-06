<div class="row">
<div class="col-md-12">

<div class="install-step-group">
    <div class="col-md-2 col-lg-2 col-sm-2 col-md-offset-3 col-sm-offset-3 col-lg-offset-3">
        <div class="circle circle1 ">
            1
        </div>   
        <div class="step-line "></div> 
    </div>
    <div class="col-md-2 col-lg-2 col-sm-2">
        <div class="circle circle2">
            2
        </div>
        <div class="step-line "></div>
    </div>
    <div class="col-md-2 col-lg-2 col-sm-2">
        <div class="circle circle3">
            3
        </div>
        <div class="step-line "></div>
    </div>
	
	<div class="col-md-2 col-lg-2 col-sm-2">
        <div class="circle circle3 active">
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

</div> 
</div>



<div class="row">
<div class="col-sm-12">
<div class="panel panel-info">
<div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Payment Confirmation');?></div>

<div class="panel-wrapper collapse in" aria-expanded="true">
<div class="panel-body table-responsive">

<form action="<?php echo base_url()?>install/payment/confirm" method="post" id="bookingform" data-stripe-publishable-key="<?php echo $this->db->get_where('settings' , array('type' => 'stripe_publishable_key'))->row()->description; ?>"  >

 <div class="row">

<div class="col-md-6">

<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('Your Ticket No');?></label>
	<div class="col-xs-5">
		<input type="text" class="form-control" value="<?php echo $this->session->userdata('ticket_no');?>" name="ticket" id="ticket" readonly required /> </div>
</div>

<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('Full_Names');?></label>
	<div class="col-xs-5">
		<input type="text" class="form-control" name="customer_name" id="customer_name" value="<?php echo $this->session->userdata('customer_name');?>"  readonly required /> </div>
</div>




<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('Total Amount');?></label>
	<div class="col-xs-5">
		<input type="number" class="form-control" name="amount" id="amount" value="<?php echo $this->session->userdata('pay_amount');?>" readonly required /> </div>
</div>


<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('Payment ID ');?></label>
	<div class="col-xs-5">
	<input type="text" class="form-control" value="<?php echo h_generate_payment_id();?>" name="payid" id="payid" readonly required /> </div>
</div>

</div>



<div class="col-md-6">

<div class="form-group">
<div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Payment Method');?></div>

</div>


<div class="panel-body">
                                <ul class="nav nav-pills m-b-30 ">
                                    <li class="active nav-item"> <a href="#navpills-1" class="nav-link" data-toggle="tab" aria-expanded="false">Card <input type="radio" name="select_flight" value="card"/></a> </li>
                                    <li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Mobile Money <input type="radio" name="select_flight" value="mobile"/></a> </li>
                                    <li class="nav-item"> <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">PayPal <input type="radio" name="select_flight" value="paypal"/></a> </li>
                                </ul>
                                <div class="tab-content br-n pn">
                                    <div id="navpills-1" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-md-4"> <img src="<?php echo base_url() ?>uploads/mastercard.jpg" class="img-responsive thumbnail m-r-15"> </div>
                                            <div class="col-md-8"> 


					<div class="form-group">
                       <label class="col-md-12"><?php echo get_phrase('card_number'); ?></label>

                        <div class="col-md-12">
                            <input type="text" autocomplete="off" class="form-control" id="card_num" name="card_num" value="4242424242424242" maxlength="16"/>
                        </div>
                    </div>
                    
                     <div class="form-group">
                       <label class="col-md-12"><?php echo get_phrase('CVC'); ?></label>

                        <div class="col-sm-12">
                            <input type="text" autocomplete="off" class="form-control" id="card_cvc" name="card_cvc" value="123" maxlength="3"/>
                        </div>
                    </div>
					
					
                      <div class="form-group">
                       <label class="col-md-4"><?php echo get_phrase('expiry_date');?>*</label>
                       <div class="col-md-4">
                            <input type="text" autocomplete="off" class="form-control" id="card_exp_month" name="card_exp_month" value="12" placeholder="MM" />
                       </div>
                        <div class="col-md-4">
                            <input type="text"  autocomplete="off"  class="form-control" id="card_exp_year" placeholder="YYYY" value="2019" name="card_exp_year" />
                        </div>
                    </div>				
					
					
					
					       
						   </div>
                                        </div>
                                    </div>
                                    <div id="navpills-2" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-4"> <img src="<?php echo base_url() ?>uploads/logo.png" class="img-responsive thumbnail m-r-15"> </div>
                                            <div class="col-md-8"><div class="form-group">
                       <label class="col-md-12"><?php echo get_phrase('Phone_number'); ?></label>

                        <div class="col-md-12">
                            <input type="text" autocomplete="off" class="form-control" id="phone_number" name="phone_number" maxlength="16"/>
                        </div>
                    </div></div>
                                        </div>
                                    </div>
                                    <div id="navpills-3" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-4"> <img src="<?php echo base_url() ?>uploads/logo.png" class="img-responsive thumbnail m-r-15"> </div>
                                            <div class="col-md-8"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                <p><br/> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        




</div>

</div>	
<div class="form-group col-md-4  text-right">
<a class="btn btn-green btn-sm btn-icon icon-left" style="color:white;" href="<?php echo base_url();?>install/customer"><i class="fa fa-reply"></i>previous</a>

</div>

<div class="row">
	<div class="form-group col-md-8 col-md-offset-2 text-right">
		<button type="submit" id="submit-button" class="btn btn-green btn-sm btn-icon icon-left"><i class="fa fa-user"></i>Next</button>
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
	
	

	
    $('formcxcxc').submit(function (e) {	

 alert("response ");	
		
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


<script language="javascript" type="text/javascript">



$(function(){
	
	$form = $('#bookingform');
	

	
    $('#bookingform').bind('submit', function(evt){
        
        //evt.preventDefault();
	//alert("response ");	
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