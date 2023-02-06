 <style>
#invoice-POS{
box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
padding:2mm;
margin: 0 auto;
width: 44m;
background: #FFF;
}

::selection {background: #f31544; color: #FFF;}
::moz-selection {background: #f31544; color: #FFF;}
h1{
font-size: 1.5em;
color: #222;
}
h2{font-size: 10px;}
h3{
font-size: 1.2em;
font-weight: 300;
line-height: 2em;
}
p{
font-size: .7em;
color: #666;
line-height: 1.2em;
}

#top, #mid,#bot{ /* Targets all id with 'col-' */
border-bottom: 1px solid #EEE;
}




.info {
display: block;
//float:left;
margin-left: 0;
}
.title{
float: right;
}
.title p{text-align: right;} 
table{
width: 100%;
border-collapse: collapse;
}
td{
//padding: 5px 0 5px 15px;
//border: 1px solid #EEE
}
.tabletitle{
//padding: 5px;
font-size: .5em;
background: #EEE;
}
.service{border-bottom: 1px solid #EEE;}
.item{width: 24mm;}
.itemtext{font-size: 10px;}





}




</style>
 
 <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
							
							
						   <?php echo get_phrase('FLIGHT SCHEDULE');?>
						  
						   
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="fa fa-plus"></i>&nbsp;&nbsp; <?php echo get_phrase('ADD NEW FLIGHT SCHEDULE HERE');?><i class="btn btn-info btn-xs"></i></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                            </div>
                            <div class="panel-wrapper collapse out" aria-expanded="true">
                                <div class="panel-body">
                <?php echo form_open(base_url().'staff/flightschedule/create' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
	
<div class="row">

<div class="col-md-6">

<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('FLIGHT NUMBER');?></label>
	<div class="col-sm-12">

	<input type="text" name="flight_no" value="<?php echo h_generate_flight_id();?>" readonly class="form-control " id="example-date-input" required>

</div>
</div>

<input type="text" name="route_id" id="route_id" class="form-control " id="example-date-input" hidden required>

<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('ORIGIN');?></label>
	<div class="col-sm-12">
	
	
		<select name="from_city" id="from_city" class="form-control select2" onchange="return get_short_name()"  required >


		</select>

</div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('DEPARTURE DATE');?></label>
	<div class="col-sm-12">

	<input type="date" name="departure_date"  class="form-control datepicker " id="example-date-input" min=<?php echo date('m/d/y');?> required>

</div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('DEPARTURE TIME');?></label>
	<div class="col-sm-12">

	<input type="time" name="departure_time"  class="form-control datepicker " id="example-date-input" required>

</div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('TICKET PRICE (ECONOMY CLASS)');?></label>
	<div class="col-sm-12">

	<input type="number" name="price_economy"  class="form-control " id="example-date-input" required>

</div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('NUMBER OF SEATS IN (ECONOMY CLASS)');?></label>
	<div class="col-sm-12">

	<input type="number" name="seats_economy"  class="form-control " id="example-date-input" required>

</div>
</div>



</div> <!-- left row-->

<div class="col-md-6">

<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('AIRCRAFT NUMBER ');?></label>
	<div class="col-sm-12">

	
	<select name="jet_id" class="form-control select2" required >
			<?php 
			$dests = $this->db->get('flight_aircraft_d')->result_array();
			foreach($dests as $row):
			?>
				<option value="<?php echo $row['jet_id'];?>"><?php echo $row['jet_id'];?> -- <?php echo $row['jet_type'];?></option>
			<?php
			endforeach;
			?>
		</select>

</div>
</div>

<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('DESTINATION');?></label>
	<div class="col-sm-12">

	
	<select name="to_city" id="to_city" class="form-control select2" onchange="return get_short_name()"  required>
                                    	
                                    </select>

</div>
</div>



<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('ARRIVAL DATE');?></label>
	<div class="col-sm-12">

	<input type="date" name="arrival_date"  class="form-control datepicker " id="example-date-input" required>

</div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('ARRIVAL TIME');?></label>
	<div class="col-sm-12">

	<input type="time" name="arrival_time"  class="form-control datepicker " id="example-date-input" required>

</div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('TICKET PRICE (BUSINESS CLASS)');?></label>
	<div class="col-sm-12">

	<input type="number" name="price_business"  class="form-control " id="example-date-input" required>

</div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('NUMBER OF SEATS IN (BUSINESS CLASS)');?></label>
	<div class="col-sm-12">

	<input type="number" name="seats_business"  class="form-control " id="example-date-input" required>

</div>
</div>


</div> <!-- right  row-->


</div> <!-- ends row-->
	
						
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info btn-sm btn-rounded"> <i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('add_Flight_Schedule');?></button>
						</div>
					</div>
					<br>
                <?php echo form_close();?>	
									
									
                                </div>
                            </div>
                        </div>
                    </div>
				</div>  
  
  
  
  
  <div class="row">
                    <div class="col-sm-12">
				  	<div class="panel panel-info">
                            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('LIST FLIGHT SCHEDULE');?></div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body table-responsive">
								
<table id="example23" class="display nowrap" cellspacing="0" width="100%">
    <thead>
        <tr>
            
            <th><?php echo get_phrase('FLIGHT DETAILS');?></th>
			
            <th><?php echo get_phrase('FLIGHT PACKAGE PRICES');?></th>
			
        </tr>
    </thead>

    <tbody>
        <?php 
                                $flightschedule	= $flightschedule;
                                foreach($flightschedule as $row):?>
            <tr>
                
                         
<td>
<div id="invoice-POS">

<div id="mid">
<div class="info">
<center><h2 style="font-size:15px;font-weight:bold"><?php echo get_phrase('FLIGHT INFO');?></h2></center>
<p> 
<b><?php echo get_phrase('FLIGHT NUMBER');?></b> : <?php echo $row['flight_no']?></br>
<b><?php echo get_phrase('AIRCRAFT NO');?> </b>  : <?php echo $row['jet_id']; ?></br>
<b><?php echo get_phrase('TRAVEL DURATION');?></b>  : 555-555-5555</br>
</p>
</div>
</div><!--End Invoice Mid-->

<div id="bot">

	<div id="table">
		<table>
			<tr class="tabletitle">
				<td class="item"><h2>Item</h2></td>
				<td class="Rate" colspan="1"><h2>Content</h2></td>
				<td class="Rate"><h2></h2></td>
			</tr>

			<tr class="service">
				<td class="tableitem"><p class="itemtext"><?php echo get_phrase('ORIGIN');?></p></td>
				<td class="tableitem" colspan="2"><p class="itemtext"><?php echo get_phrase($row['from_city']);?></p></td>
				
			</tr>

			<tr class="service">
				<td class="tableitem"><p class="itemtext"><?php echo get_phrase('DESTINATION');?></p></td>
				<td class="tableitem" colspan="2"><p class="itemtext"><?php echo get_phrase($row['to_city']);?></p></td>
				
			</tr>

			<tr class="service">
				<td class="tableitem"><p class="itemtext"><?php echo get_phrase('DEPARTURE DATE');?></p></td>
			   <td class="tableitem" colspan="2"><p class="itemtext"><?php echo get_phrase($row['departure_date']);?></p></td>
			</tr>

			<tr class="service">
				<td class="tableitem"><p class="itemtext"><?php echo get_phrase('ARRIVAL DATE');?></p></td>
			   <td class="tableitem" colspan="2"><p class="itemtext"><?php echo get_phrase($row['arrival_date']);?></p></td>
			</tr>

			<tr class="service">
				<td class="tableitem"><p class="itemtext"><?php echo get_phrase('DEPARTURE TIME');?></p></td>
				<td class="tableitem" colspan="2"><p class="itemtext"><?php echo get_phrase($row['departure_time']);?></p></td>
			</tr>

			<tr class="service">
				<td class="tableitem"><p class="itemtext"><?php echo get_phrase('ARRIVAL TIME');?></p></td>
				<td class="tableitem" colspan="2"><p class="itemtext"><?php echo get_phrase($row['arrival_time']);?></p></td>
			</tr>


			<tr class="tabletitle">
				<td class="Rate"><h2><a  onclick="showAjaxModal('<?php echo base_url();?>modal/popup/flightschedule_modal/<?php echo h_encrypt_decrypt($row['flight_no'])?>');" ><button type="button" class="btn btn-success btn-circle btn-xs"><i class="fa fa-pencil"></i></button></a>
</h2></td>								
				<td class="payment" colspan="2"><h2><a href="<?php echo base_url();?>staff/flightschedule/delete/<?php echo h_encrypt_decrypt($row['flight_no'])?>" ><button type="button" class="btn btn-danger btn-circle btn-xs" onclick="return confirm('Are you sure to delete?');"><i class="fa fa-times"></i></button></a>
</h2></td>
			</tr>

		   

		</table>
	</div><!--End Table-->

  

</div><!--End InvoiceBot-->
</div><!--End Invoice-->

</td>

            
                
				<td>
				<div id="invoice-POS" style="width:500px">

<div id="mid">
<div class="info">
<center><h2 style="font-size:15px;font-weight:bold"><?php echo get_phrase('FLIGHT PACKAGE PRICES');?></h2></center>
</div>
</div><!--End Invoice Mid-->

<div id="bot">

<?php echo form_open(base_url().'staff/flightschedule/savep' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

	<div id="table">
		<table>
			<tr class="tabletitle">
				<td class="item"><h2>PACKAGE</h2></td>
				<td class="Rate" colspan="1"><h2>PRICE</h2></td>
				<td class="Rate"><h2>Seats</h2></td>
			</tr>
			<input type="text" name="flight_no"   value="<?php echo $row['flight_no']?>" hidden >

<?php 
$package = $this->crud_model->get_flights_types();
foreach($package as $row2){
?>
			<tr class="service">
				<td class="tableitem"><p class="itemtext"><?php echo $row2['name']?></p></td>
				
<td class="tableitem">

<p class="itemtext"><input type="number" name="price<?php echo $row2['class_id']?>" value="<?php echo $this->crud_model->get_flights_types_price($row2['class_id'],$row['flight_no']);?>" class="form-control " required>
</p></td>

<td class="tableitem">

<p class="itemtext"><input type="number" name="seats<?php echo $row2['class_id']?>" value="<?php echo $this->crud_model->get_flights_types_seats($row2['class_id'],$row['flight_no']);?>" class="form-control " required>
</p></td>
				
				
			</tr>
<?php } ?>
			


<tr class="tabletitle">
							
<td class="payment" colspan="3"><h2>

<button type="submit" class="btn btn-success"><i class="fa fa-save"></i><?php echo get_phrase('Save || Update');?></button>

</h2></td>
</tr>

		   

		</table>
	</div><!--End Table-->

   <?php echo form_close();?>	

</div><!--End InvoiceBot-->
</div><!--End Invoice-->


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



<script type="text/javascript">

    $(function () {
        get_short_name();
		get_airport_details();
    });
    function get_short_name() {
        var destn = $('#to_city').val();	
		var origin = $('#from_city').val();
		var k = origin+'-'+destn;
        $('#route_id').val(k) ;
		
      /*  $.ajax({
			type:'POST',
            url: '<?php echo base_url(); ?>staff/get_short_name/getshort',
			data:{'destn':destn,'origin':origin},			
            async: false,
            success: function (response)
            {
				
                $('#route_id').val(response) ;
            }
        });*/
    }
	
		function get_airport_details() {
			

    	$.ajax({
            url: '<?php echo base_url(); ?>staff/get_airport_details',
            success: function(response)
            {
				//all work well
                jQuery('#from_city').html(response);
			    jQuery('#to_city').html(response);	
				
            }
        });

    }

</script>
