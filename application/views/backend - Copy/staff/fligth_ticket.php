 <div class="row">
                    <div class="col-sm-12">
				  	<div class="panel panel-info">
                            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('TICKETS_Bookings');?></div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body table-responsive">
								
<table id="myTable" class="display nowrap" cellspacing="0" width="100%">
    <thead>
        <tr>
           
            <th><?php echo get_phrase('flight_Number');?></th>
			<th><?php echo get_phrase('Travel Date');?></th>
            <th><?php echo get_phrase('customer_name');?></th>
            <th><?php echo get_phrase('class_type');?></th>
            <th><?php echo get_phrase('Reservation date');?></th>           
            <th><?php echo get_phrase('Booking_status');?></th>
			<th><?php echo get_phrase('Payment ID');?></th>			
            <th><?php echo get_phrase('options');?></th>
        </tr>
    </thead>

    <tbody>
        <?php 
                                $bookings = $ticket_data;
                                foreach($bookings as $row):?>
            <tr>
               
                <td><?php echo $row['flight_no']; ?></td>
                <td><?php echo $row['journey_date']; ?></td>
                <td><?php echo $row['customer_name']; ?></td>
                <td><?php echo $row['class']; ?></td>
                <td><?php echo $row['date_of_reservation']; ?></td>
                <td><?php echo $row['booking_status']; ?></td>
                <td><?php echo $row['payment_id']; ?></td>
                
                <td>
				
				    
				<a target="blank" href="<?php echo base_url();?>staff/ticket2/<?php echo h_encrypt_decrypt($row['tick_number'])?>" ><div class="label label-danger"><?php echo get_phrase('VIEW TICKET');?></div></a>
					
                   
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


