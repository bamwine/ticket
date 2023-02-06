 <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
							
							
							<?php echo get_phrase('OPERATIONAL_ROUTES');?>
						   
						   
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('ADD NEW FLIGHT_ROUTES  HERE');?><i class="btn btn-info btn-xs"></i></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                            </div>
                            <div class="panel-wrapper collapse out" aria-expanded="true">
                                <div class="panel-body">
 <form role="form" class="form-horizontal form-groups-bordered" action="<?php echo base_url(); ?>staff/flightroutes/create" method="post" enctype="multipart/form-data">

		<div class="form-group">
			<label class="col-md-12" for="example-text"><?php echo get_phrase('ORIGIN');?></label>
			<div class="col-sm-12">
			<select name="origin" id="origin" class="form-control select2" onchange="return get_short_name()">
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
			<label class="col-md-12" for="example-text"><?php echo get_phrase('DESTINATION');?></label>
			<div class="col-sm-12">
			
			<select name="destination" id="dest_name" class="form-control select2" onchange="return get_short_name()">
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
			<label class="col-md-12" for="example-text"><?php echo get_phrase('ROUTE AMOUNT');?></label>
			<div class="col-sm-12">
			<input type="number" name="amount"  class="form-control " id="example-date-input amount"  >
			</div>
		</div>

	
						
							
		<div class="form-group">
			<label class="col-md-12" for="example-text"><?php echo get_phrase('ROUTE');?></label>
			<div class="col-sm-12">
			<input type="text" name="route_id" id="route_id" readonly class="form-control " id="example-date-input"  >
			</div>
		</div>			

                      <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info btn-sm btn-rounded"> <i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('add_route');?></button>
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
                            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('FLIGHT_ROUTES');?></div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body table-responsive">
								
<table id="example23" class="display nowrap" cellspacing="0" width="100%">
    <thead>
        <tr>
            
            <th><?php echo get_phrase('ROUTE NAME');?></th>
            <th><?php echo get_phrase('ORIGIN');?></th>
            <th><?php echo get_phrase('DESTINATION');?></th>
			<th><?php echo get_phrase('AMOUNT');?></th>
            <th><?php echo get_phrase('options');?></th>
        </tr>
    </thead>

    <tbody>
        <?php 
                                $bookings	=	$flightroutes;
                                foreach($bookings as $row):?>
            <tr>
                <td><?php echo $row['route_id']; ?></td>
                <td><?php echo $row['orign']; ?></td>
                <td><?php echo $row['destination']; ?></td>
                <td><?php echo $row['amount']; ?></td>
                <td>
				
				<a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/flightroutes_modal/<?php echo $row['route_id']?>');" ><button type="button" class="btn btn-success btn-circle btn-xs"><i class="fa fa-pencil"></i></button></a>
				
                   
					 <a href="<?php echo base_url();?>staff/flightroutes/delete/<?php echo h_encrypt_decrypt($row['route_id'])?>" ><button type="button" class="btn btn-danger btn-circle btn-xs" onclick="return confirm('Are you sure to delete?');"><i class="fa fa-times"></i></button></a>
					
                   
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
        var destn = $('#dest_name').val();	
		var origin = $('#origin').val();		
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