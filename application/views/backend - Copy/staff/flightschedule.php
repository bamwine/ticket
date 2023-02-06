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


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('ORIGIN');?></label>
	<div class="col-sm-12">
<input type="text" name="route_id" id="route_id" class="form-control " id="example-date-input" hidden required>
	
	
		<select name="from_city" id="from_city" class="form-control select2" onchange="return get_short_name()" required >
			<?php 
			$dests = $this->db->get('flight_destinations')->result_array();
			foreach($dests as $row):
			?>
				<option value="<?php echo $row['dest_name'];?>"><?php echo $row['dest_name'];?></option>
			<?php
			endforeach;
			?>
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

	
	<select name="to_city" id="to_city" class="form-control select2" onchange="return get_short_name()" required>
                                    	<?php 
										$dests = $this->db->get('flight_destinations')->result_array();
										foreach($dests as $row):
										?>
                                    		<option value="<?php echo $row['dest_name'];?>"><?php echo $row['dest_name'];?></option>
                                        <?php
										endforeach;
										?>
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
            
            <th><?php echo get_phrase('FLIGHT NUMBER');?></th>
			<th><?php echo get_phrase('AIRCRAFT NO');?></th>
            <th><?php echo get_phrase('ORIGIN / DESTINATION');?></th>
			<th><?php echo get_phrase('TICKET PRICE');?></th>
            <th><?php echo get_phrase('DEPARTURE / ARRIVAL DATE');?></th>
            <th><?php echo get_phrase('DEPARTURE / ARRIVAL TIME');?></th>
			<th><?php echo get_phrase('TRAVEL DURATION');?></th>
            <th><?php echo get_phrase('NUMBER OF SEATS');?></th> 
            <th><?php echo get_phrase('options');?></th>
        </tr>
    </thead>

    <tbody>
        <?php 
                                $flightschedule	= $flightschedule;
                                foreach($flightschedule as $row):?>
            <tr>
                
                         
                <td><?php echo $row['flight_no']?></td>
                <td><?php echo $row['jet_id']; ?></td>                
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
                <td><?php echo gmdate('H:i:s',(strtotime($row['departure_time'])-strtotime($row['arrival_time']))); ?></td>
				<td>
				<?php
				echo  '<button type="button" class="btn btn-success btn-circle btn-xs" >ECO</button> &nbsp;&nbsp;<div class="label label-success">' . get_phrase($row['seats_economy']) . '</div> <br>';
				echo '<button type="button" class="btn btn-danger btn-circle btn-xs" >BUS</button> &nbsp;&nbsp;<div class="label label-danger">' . get_phrase($row['seats_business']) . '</div>';
				?>
				</td>                
                
				
                <td>
				
				<a  onclick="showAjaxModal('<?php echo base_url();?>modal/popup/flightschedule_modal/<?php echo $row['flight_no']?>');" ><button type="button" class="btn btn-success btn-circle btn-xs"><i class="fa fa-pencil"></i></button></a>
				
                   
				<a href="<?php echo base_url();?>staff/flightschedule/delete/<?php echo h_encrypt_decrypt($row['flight_no'])?>" ><button type="button" class="btn btn-danger btn-circle btn-xs" onclick="return confirm('Are you sure to delete?');"><i class="fa fa-times"></i></button></a>
					
                   
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
    });
    function get_short_name() {
        var destn = $('#to_city').val();	
		var origin = $('#from_city').val();		
        $.ajax({
			type:'POST',
            url: '<?php echo base_url(); ?>staff/get_short_name/getshort',
			data:{'destn':destn,'origin':origin},			
            async: false,
            success: function (response)
            {
				
                $('#route_id').val(response) ;
            }
        });
    }

</script>
