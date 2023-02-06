<?php 
$flight_destinations = $this->db->get_where('flight_destinations', array('dest_id' => $param2))->result_array();
foreach ($flight_destinations as $row) {
?>
<div class="row">
                    <div class="col-sm-12">
				  	<div class="panel panel-info">
                            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('edit_FLIGHT DESTINATION'); ?></div>
										<div class="panel-body table-responsive">
								
                    <form role="form" class="form-horizontal form-groups-bordered" action="<?php echo base_url(); ?>staff/flight_destination/update/<?php echo h_encrypt_decrypt($row['dest_id']) ?>" method="post" enctype="multipart/form-data">

		<div class="form-group">
			<label class="col-md-12" for="example-text"><?php echo get_phrase('DESTINATION NAME');?></label>
			<div class="col-sm-12">
			<input type="text" name="dest_name"  class="form-control " id=" dest_name" value="<?php echo $row['dest_name']; ?>" >
			</div>
		</div>
				

				
				<div class="form-group">
			<label class="col-md-12" for="example-text"><?php echo get_phrase('SHORT NAME');?></label>
			<div class="col-sm-12">
			<input type="text" name="dest_short"  class="form-control " id="example-date-input" value="<?php echo $row['dest_short']; ?>" >
			</div>
		</div>
		
						
							
						

                       <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-info btn-sm btn-rounded "><i class="fa fa-edit"></i>&nbsp;<?php echo get_phrase('update_flight destination details');?></button>
						</div>
					</div>
                    </form>

</div>
            </div>
        </div>
    </div>
<?php } ?>

