<?php 
$flightaircrafts = $this->db->get_where('flight_aircraft_d', array('jet_id' => $param2))->result_array();
foreach ($flightaircrafts as $row) {
?>
<div class="row">
                    <div class="col-sm-12">
				  	<div class="panel panel-info">
                            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('edit_flight_crafts'); ?></div>
										<div class="panel-body table-responsive">
								
                    <form role="form" class="form-horizontal form-groups-bordered" action="<?php echo base_url(); ?>staff/flightaircrafts/update/<?php echo h_encrypt_decrypt($row['jet_id']) ?>" method="post" enctype="multipart/form-data">

		<div class="form-group">
			<label class="col-md-12" for="example-text"><?php echo get_phrase('JET NO');?></label>
			<div class="col-sm-12">
			<input type="text" name="jet_id"  class="form-control " id="example-date-input"  value="<?php echo $row['jet_id']; ?>">
			</div>
		</div>
				
<div class="form-group">
			<label class="col-md-12" for="example-text"><?php echo get_phrase('JET TYPE');?></label>
			<div class="col-sm-12">
			<input type="text" name="jet_type"  class="form-control " id="example-date-input"  value="<?php echo $row['jet_type']; ?>">
			</div>
		</div>

<div class="form-group">
			<label class="col-md-12" for="example-text"><?php echo get_phrase('SITTING CAPACITY');?></label>
			<div class="col-sm-12">
			<input type="number" name="jet_capacity"  class="form-control " id="example-date-input"  value="<?php echo $row['total_capacity']; ?>">
			</div>
		</div>

<div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('STATUS');?></label>
                    <div class="col-sm-12">
                					<select name="active" id="class_id" type="text" class="form-control select2" required onchange="return get_class_subject()">
									
      								<option value="no"><?php echo get_phrase('IN ACTIVE'); ?></option>
									<option value="yes"><?php echo get_phrase('ACTIVE'); ?></option>
									
									<!--<option value="no" <?php if($row['active'] =='no')echo 'selected';?>>IN ACTIVE</option>
									<option value="yes"<?php if($row['active'] =='yes')echo 'selected';?>>ACTIVE</option> -->
                                </select>
            </div>
        </div>		
						
							
						

                       <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-info btn-sm btn-rounded "><i class="fa fa-edit"></i>&nbsp;<?php echo get_phrase('update_aircrafts details');?></button>
						</div>
					</div>
                    </form>

</div>
            </div>
        </div>
    </div>
<?php } ?>

