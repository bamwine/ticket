 <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
						   <?php echo get_phrase('AIRCRAFTS DETAILS');?>
						  
						   
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="fa fa-plus"></i>&nbsp;&nbsp; <?php echo get_phrase('ADD NEW AIRCRAFT HERE');?><i class="btn btn-info btn-xs"></i></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                            </div>
                            <div class="panel-wrapper collapse out" aria-expanded="true">
                                <div class="panel-body">
 <form role="form" class="form-horizontal form-groups-bordered" action="<?php echo base_url(); ?>staff/flightaircrafts/create" method="post" enctype="multipart/form-data">

		<div class="form-group">
			<label class="col-md-12" for="example-text"><?php echo get_phrase('JET NO');?></label>
			<div class="col-sm-12">
			<input type="text" name="jet_id"  class="form-control" id="jet_id" required />
			</div>
		</div>
				
     <div class="form-group">
			<label class="col-md-12" for="example-text"><?php echo get_phrase('JET TYPE');?></label>
			<div class="col-md-12">
			<input type="text" name="jet_type"  class="form-control" id="jet_type" required />
			</div>
		</div>

<div class="form-group">
			<label class="col-md-12" for="example-text"><?php echo get_phrase('SITTING CAPACITY');?></label>
			<div class="col-md-12">
			<input type="number" name="jet_capacity"  class="form-control" id="jet_capacity" required />
			</div>
		</div>

	
						
							
			<div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('STATUS');?></label>
                    <div class="col-sm-12">
                					<select name="active" id="class_id" type="text" class="form-control select2" required >
									
      								<option value="no"><?php echo get_phrase('IN ACTIVE'); ?></option>
									<option value="yes"><?php echo get_phrase('ACTIVE'); ?></option>
                                </select>
            </div>
        </div>			

                      <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info btn-sm btn-rounded"> <i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('add_aircraft');?></button>
						</div>
					</div>
                    </form>

     
									
									
                                </div>
                            </div>
                        </div>
                    </div>
				</div>  
  
  
  
  
  <div class="row">
                    <div class="col-sm-12">
				  	<div class="panel panel-info">
                            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('AIRCRAFTS INFO');?></div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body table-responsive">
								
<table id="example23" class="display nowrap" cellspacing="0" width="100%">
    <thead>
        <tr>
            
            <th><?php echo get_phrase('JET NO');?></th>
            <th><?php echo get_phrase('JET TYPE');?></th>
            <th><?php echo get_phrase('SITTING CAPACITY');?></th>
			<th><?php echo get_phrase('STATUS');?></th>
            <th><?php echo get_phrase('options');?></th>
        </tr>
    </thead>

    <tbody>
        <?php 
                                $bookings	=	$flightaircrafts;
                                foreach($bookings as $row):?>
            <tr>
                <td><?php echo $row['jet_id']; ?></td>
                <td><?php echo $row['jet_type']; ?></td>
                <td><?php echo $row['total_capacity']; ?></td>
                <td><?php if($row['active']=='yes') echo '<div class="label label-danger">' . get_phrase('ACTIVE') . '</div>'; else

				echo '<div class="label label-info">' . get_phrase('IN ACTIVE') . '</div>'; ?>
				
				</td>
                <td>
				
				<a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/flightaircrafts_modal/<?php echo $row['jet_id']?>');" ><button type="button" class="btn btn-success btn-circle btn-xs"><i class="fa fa-pencil"></i></button></a>
				
                   
					 <a href="<?php echo base_url();?>staff/flightaircrafts/delete/<?php echo h_encrypt_decrypt($row['jet_id'])?>" ><button type="button" class="btn btn-danger btn-circle btn-xs" onclick="return confirm('Are you sure to delete?');"><i class="fa fa-times"></i></button></a>
					
                   
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

