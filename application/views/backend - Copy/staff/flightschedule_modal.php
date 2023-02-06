<?php 

$flightaircrafts = $this->db->get_where('flights_schedule', array('flight_no' => h_encrypt_decrypt($param2,'decrypt')))->result_array();
foreach ($flightaircrafts as $row) {
?>
<div class="row">
                    <div class="col-sm-12">
				  	<div class="panel panel-info">
                            <div class="panel-heading"> <?php echo get_phrase('edit_flight_schedule_details'); ?></div>
										<div class="panel-body table-responsive">
								
                    <form role="form" class="form-horizontal form-groups-bordered" action="<?php echo base_url(); ?>staff/flightschedule/update/<?php echo h_encrypt_decrypt($row['flight_no']) ?>" method="post" enctype="multipart/form-data">
	
							
						<div class="row">
<div class="col-md-6">

<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('FLIGHT NUMBER');?></label>
	<div class="col-sm-12">

	<input type="text" name="flight_no"  value="<?php echo $row['flight_no']?>" readonly class="form-control " id="example-date-input" required>

</div>
</div>



<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('ORIGIN');?></label>
	<div class="col-sm-12">

	
	<select name="from_city" id="from_city" class="form-control select2" onchange="return get_short_name()" required>
			<?php 
			$dests = $this->db->get('flight_destinations')->result_array();
			foreach($dests as $row2):
			?>
			<option value="<?php echo $row2['dest_name']; ?>"
				<?php if ($row['from_city'] == $row2['dest_name']) echo 'selected'; ?>>
					<?php echo $row2['dest_name']; ?>
		</option>
			<?php
			endforeach;
			?>
	</select>
</div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('DEPARTURE DATE');?></label>
	<div class="col-sm-12">

	<input type="date" name="departure_date" value="<?php echo $row['departure_date']?>"  class="form-control datepicker " id="example-date-input" min=<?php echo date('m/d/y');?> required>

</div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('DEPARTURE TIME');?></label>
	<div class="col-sm-12">

	<input type="time" name="departure_time" value="<?php echo $row['departure_time']?>"  class="form-control datepicker " id="example-date-input" required>

</div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('TICKET PRICE (ECONOMY CLASS)');?></label>
	<div class="col-sm-12">

	<input type="number" name="price_economy" value="<?php echo $row['price_economy']?>"  class="form-control " id="example-date-input" required>

</div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('NUMBER OF SEATS IN (ECONOMY CLASS)');?></label>
	<div class="col-sm-12">

	<input type="number" name="seats_economy" value="<?php echo $row['seats_economy']?>" class="form-control " id="example-date-input" required>

</div>
</div>



</div> <!-- left row-->

<div class="col-md-6">

<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('AIRCRAFT NUMBER ');?></label>
	<div class="col-sm-12">

	
	<select name="jet_id" class="form-control select2" required>
			<?php 
			$dests = $this->db->get('flight_aircraft_d')->result_array();
			foreach($dests as $row2):
			?>
			<option value="<?php echo $row2['jet_id']; ?>"
				<?php if ($row['jet_id'] == $row2['jet_id']) echo 'selected'; ?>>
					<?php echo $row2['jet_id']; ?> -- <?php echo $row2['jet_type']; ?>
		</option>
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
										foreach($dests as $row2):
										?>
                                    	<option value="<?php echo $row2['dest_name']; ?>"
                                            <?php if ($row['to_city'] == $row2['dest_name']) echo 'selected'; ?>>
                                                <?php echo $row2['dest_name']; ?>
                                    </option>
										<?php
										endforeach;
										?>
                                    </select>
</div>
</div>



<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('ARRIVAL DATE');?></label>
	<div class="col-sm-12">

	<input type="date" name="arrival_date"  value="<?php echo $row['arrival_date']?>"  class="form-control datepicker " id="example-date-input" required>

</div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('ARRIVAL TIME');?></label>
	<div class="col-sm-12">

	<input type="time" name="arrival_time" value="<?php echo $row['arrival_time']?>" class="form-control datepicker " id="example-date-input" required>

</div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('TICKET PRICE (BUSINESS CLASS)');?></label>
	<div class="col-sm-12">

	<input type="number" name="price_business" value="<?php echo $row['price_business']?>" class="form-control " id="example-date-input" required>

</div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('NUMBER OF SEATS IN (BUSINESS CLASS)');?></label>
	<div class="col-sm-12">

	<input type="number" name="seats_business" value="<?php echo $row['seats_business']?>" class="form-control " id="example-date-input" required>

</div>
</div>


</div> <!-- right  row-->


</div> <!-- ends row-->	

                       <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-info btn-sm btn-rounded "><i class="fa fa-edit"></i>&nbsp;<?php echo get_phrase('update_flight_schedule_details');?></button>
						</div>
					</div>
                    </form>

         </div>
            </div>
        </div>
		

		
    </div>

	
<?php } ?>


