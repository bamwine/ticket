 <div class="row">
                    <div class="col-sm-12">
				  	<div class="panel panel-info">
                            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('all_messages');?>
							
							
			<a href="<?php echo base_url(); ?>staff/message" class="btn btn-info btn-sm pull-right"> <i class="fa fa-envelope"></i>
                <?php echo get_phrase('back_to_inbox'); ?>
               
            </a>
							</div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body table-responsive">
    <?php echo form_open(base_url() . 'staff/message/send_new/', array('class' => 'form', 'enctype' => 'multipart/form-data')); ?>


   
			<div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('select_message_destination');?></label>
                    <div class="col-sm-12">
            
			<select name="receiver" class="form-control select2" style="width:100%" required>

            <option value=""><?php echo get_phrase('select_a_user'); ?></option>
            <optgroup label="<?php echo get_phrase('admin'); ?>">
                <?php
                $admins = $this->db->get('admin')->result_array();
                foreach ($admins as $row):
                    ?>

                    <option value="admin-<?php echo $row['admin_id']; ?>">
                        - <?php echo $row['name']; ?></option>

                <?php endforeach; ?>
            </optgroup>
			
			
			<optgroup label="<?php echo get_phrase('staff'); ?>">
                <?php
                $teachers = $this->db->get('staff')->result_array();
                foreach ($teachers as $row):
                    ?>

                    <option value="staff-<?php echo $row['staff_id']; ?>">
                        - <?php echo $row['name']; ?></option>

                <?php endforeach; ?>
            </optgroup>
			
            
            

           
			
			
        </select>
		
    </div>
	</div>

	
		
	<div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('select_message_destination');?></label>
                    <div class="col-sm-12">
        <textarea  class="form-control wysihtml5-toolbar" name="message" id="mymce"><?php echo get_phrase('write_new_message'); ?></textarea>
    </div>
	</div>

<div class="form-group">
                    <div class="col-sm-12">
      <input type="file" class="form-control" name="attached_file_on_messaging"/>
					  </div>
					  </div>



    <button type="submit" class="btn btn-info btn-rounded btn-sm"><?php echo get_phrase('send_message'); ?>&nbsp;<i class="fa fa-envelope"></i></button>
</form>

</div>
</div>
</div>
</div>
</div>