
<div class="install-step-group">
    <div class="col-md-2 col-lg-2 col-sm-2 col-md-offset-3 col-sm-offset-3 col-lg-offset-3">
        <div class="circle circle1 ">
            1
        </div>   
        <div class="step-line "></div> 
    </div>
    <div class="col-md-2 col-lg-2 col-sm-2">
        <div class="circle circle2 active">
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
<div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Passenger details');?></div>
<div class="panel-wrapper collapse in" aria-expanded="true">
<div class="panel-body table-responsive">

<form action="<?php echo base_url()?>install/userinfo/confirm" method="post">

 <div class="row">

<div class="col-md-6">

<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('Your Ticket No');?></label>
	<div class="col-xs-5">
		<input type="text" class="form-control" value="<?php echo h_generate_ticket_id();?>" name="ticket" id="ticket" readonly required /> </div>
</div>

<div class="row">
<div class="form-group col-md-6">
	<label class="col-xs-6 control-label"><?php echo get_phrase('First_Names');?></label>
	<div class="col-xs-6">
		<input type="text" class="form-control" name="customer_name" id="customer_name" required /> </div>
</div>

<div class="form-group col-md-6">
	<label class="col-xs-6 control-label"><?php echo get_phrase('Other_Names');?></label>
	<div class="col-xs-6">
		<input type="text" class="form-control" name="other_name" id="other_name" required /> </div>
</div>
</div>

<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('Class_type');?></label>
	<div class="col-sm-12">

	<select name="classid" id="classid" class="form-control select2"  required>

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
		<input type="text" class="form-control" value="<?php echo $flightdata->flight_no;?>" name="flightnos" id="flightnos" readonly required /> </div>
</div>


<div class="form-group">
	<label class="col-xs-3 control-label"><?php echo get_phrase('Email address');?></label>
	<div class="col-xs-5">
		<input type="email" class="form-control" name="email" required /> </div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('gender');?></label>
	<div class="col-sm-12">

	<select name="gender" id="gender" class="form-control select2"  required>

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
<div class="form-group col-md-4  text-right" >
<a class="btn btn-green btn-sm btn-icon icon-left" style="color:white;" href="<?php echo base_url();?>install/validate"><i class="fa fa-reply"></i>previous</a>

</div>
<div class="row">
	<div class="form-group col-md-8 col-md-offset-2 text-right">
		<button class="btn btn-green btn-sm btn-icon icon-left"><i class="fa fa-user"></i>Next</button>
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