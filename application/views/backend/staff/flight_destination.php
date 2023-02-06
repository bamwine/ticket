 <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
							
							
							<?php echo get_phrase('FLIGHT DESTINATION');?>
						   
						   
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('ADD NEW DESTINATION  HERE');?><i class="btn btn-info btn-xs"></i></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                            </div>
                            <div class="panel-wrapper collapse out" aria-expanded="true">
                                <div class="panel-body">
 
 <form role="form" class="form-horizontal form-groups-bordered" action="<?php echo base_url(); ?>staff/flight_destination/create" method="post" enctype="multipart/form-data">

		<div class="form-group">
			<label class="col-md-12" for="example-text"><?php echo get_phrase('DESTINATION NAME');?></label>
			<div class="col-sm-12">
			<input type="text" name="dest_name"  class="form-control " id="dest_name" onmouseleave="return get_short_name()" >
			</div>
		</div>
				
<div class="form-group">
			<label class="col-md-12" for="example-text"><?php echo get_phrase('SHORT NAME');?></label>
			<div class="col-sm-12">
			<input type="text" name="dest_short" id="destshort"  class="form-control ">
			</div>
		</div>

	
						
			        <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info btn-sm btn-rounded"> <i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('add_destination');?></button>
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
                            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('FLIGHT DESTINATION INFO');?></div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body table-responsive">
								
<table id="example23" class="display nowrap" cellspacing="0" width="100%">
    <thead>
        <tr>
             <th><?php echo get_phrase('SHORT NAME');?></th>
            <th><?php echo get_phrase('NAME');?></th>
           
            
            <th><?php echo get_phrase('options');?></th>
        </tr>
    </thead>

    <tbody>
        <?php 
                                $bookings	=	$flight_destination;
                                foreach($bookings as $row):?>
            <tr>
                <td><?php echo $row['dest_short']; ?></td>
                <td><?php echo $row['dest_name']; ?></td>
               
                <td>
				
				<a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/flight_destination_modal/<?php echo $row['dest_id']?>');" ><button type="button" class="btn btn-success btn-circle btn-xs"><i class="fa fa-pencil"></i></button></a>
				
                   
					 <a href="<?php echo base_url();?>staff/flight_destination/delete/<?php echo h_encrypt_decrypt($row['dest_id'])?>" ><button type="button" class="btn btn-danger btn-circle btn-xs" onclick="return confirm('Are you sure to delete?');"><i class="fa fa-times"></i></button></a>
					
                   
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
        var holder = $('#dest_name').val();		
        $.ajax({
			type:'POST',
            url: '<?php echo base_url(); ?>staff/get_short_name/getinit',
			data:{'holder':holder},			
            async: false,
            success: function (response)
            {
				
                $('#destshort').val(response) ;
            }
        });
    }

</script>