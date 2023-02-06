<?php 
$flightroutes = $this->db->get_where('flight_routes', array('route_id' => $param2))->result_array();
foreach ($flightroutes as $row) {
?>
<div class="row">
                    <div class="col-sm-12">
				  	<div class="panel panel-info">
                            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('edit_flight_routes'); ?></div>
										<div class="panel-body table-responsive">
								
                    <form role="form" class="form-horizontal form-groups-bordered" action="<?php echo base_url(); ?>staff/flightroutes/update/<?php echo h_encrypt_decrypt($row['route_id']) ?>" method="post" enctype="multipart/form-data">

		<div class="form-group">
			<label class="col-md-12" for="example-text"><?php echo get_phrase('ORIGIN');?></label>
			<div class="col-sm-12">
			
			<select name="origin" class="form-control select2" >
                                    	<?php 
										$dests = $this->db->get('flight_destinations')->result_array();
										foreach($dests as $row2):
										?>
                                    		
									<option value="<?php echo $row2['dest_name']; ?>"
                                            <?php if ($row['orign'] == $row2['dest_name']) echo 'selected'; ?>>
                                                <?php echo $row2['dest_name']; ?>
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
			
			<select name="destination" class="form-control select2" >
                                    	<?php 
										$dests = $this->db->get('flight_destinations')->result_array();
										foreach($dests as $row2):
										?>
                                    	<option value="<?php echo $row2['dest_name']; ?>"
                                            <?php if ($row['destination'] == $row2['dest_name']) echo 'selected'; ?>>
                                                <?php echo $row2['dest_name']; ?>
                                    </option>
										<?php
										endforeach;
										?>
                                    </select>
			</div>
		</div>

<div class="form-group">
			<label class="col-md-12" for="example-text"><?php echo get_phrase('Amount');?></label>
			<div class="col-sm-12">
			<input type="number" name="amount" value="<?php echo $row['amount'] ?>" class="form-control " id="example-date-input"  >
			</div>
		</div>

	
						
							
		<div class="form-group">
			<label class="col-md-12" for="example-text"><?php echo get_phrase('ROUTE');?></label>
			<div class="col-sm-12">
			<input type="text" name="route_id" value="<?php echo $row['route_id'] ?>" class="form-control " id="example-date-input"  >
			</div>
		</div>			
						

                       <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-info btn-sm btn-rounded "><i class="fa fa-edit"></i>&nbsp;<?php echo get_phrase('update_flight_routes');?></button>
						</div>
					</div>
                    </form>

</div>
            </div>
        </div>
    </div>
<?php } ?>

