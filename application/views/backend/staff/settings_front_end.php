 <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
						
				   <?php echo get_phrase('FRONT END SETTINGS');?>
						   
						   
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('FRONT END SETTINGS');?><i class="btn btn-info btn-xs"></i></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                	  

							<?php echo form_open(base_url().'staff/settings_front_end/update' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
	
<div class="row">
<div class="col-md-6">

<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('COMPANY NAME ');?></label>
	<div class="col-sm-12">

	<input type="text" name="cop_name"   class="form-control " 
	value="<?php echo $this->db->get_where('front_end', array('type' => 'cop_name'))->row()->description; ?>">

</div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('VISSION ');?></label>
	<div class="col-sm-12">
<textarea name="vission" id="vission" class="form-control ">
<?php echo $this->db->get_where('front_end', array('type' => 'vission'))->row()->description; ?></textarea>
	

</div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('MISSION ');?></label>
	<div class="col-sm-12">

	<textarea name="mission"  class="form-control ">
	<?php echo $this->db->get_where('front_end', array('type' => 'mission'))->row()->description; ?></textarea>
	

</div>
</div>


<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('ABOUT US');?></label>
	<div class="col-sm-12">

	<textarea name="about_us"  class="form-control">
	<?php echo $this->db->get_where('front_end', array('type' => 'about_us'))->row()->description; ?></textarea>


</div>
</div>






</div> <!-- left row-->

<div class="col-md-6">

<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('COMPANY EMAILS ');?></label>
	<div class="col-sm-12">
	
<input type="text" name="emails"  class="form-control  " 
	value="<?php echo $this->db->get_where('front_end', array('type' => 'emails'))->row()->description; ?>">

	
	</div>
</div>

<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('COMPANY TELEPHONES ');?></label>
	<div class="col-sm-12">

	<input type="text" name="phone"  class="form-control  " 
	value="<?php echo $this->db->get_where('front_end', array('type' => 'phone'))->row()->description; ?>">

</div>
</div>



<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('COMPANY LOCATION');?></label>
	<div class="col-sm-12">

	<textarea col="3" name="location"  class="form-control">
	<?php echo $this->db->get_where('front_end', array('type' => 'location'))->row()->description; ?></textarea>

</div>
</div>




<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('OUR SERVICES ');?></label>
	<div class="col-sm-12">

	<textarea  name="services"  class="form-control "> 
	<?php echo $this->db->get_where('front_end', array('type' => 'services'))->row()->description; ?></textarea>

</div>
</div>

<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('CURRENCY');?></label>
	<div class="col-sm-12">

	<input type="text" name="currency"  class="form-control "  
	value="<?php echo $this->db->get_where('front_end', array('type' => 'currency'))->row()->description; ?>" />

</div>
</div>


</div> <!-- right  row-->


</div> <!-- ends row-->
	
						
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info btn-sm btn-rounded"> <i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('update');?></button>
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
                            <div class="panel-heading">
						
				   <?php echo get_phrase('COMPANY LOGO');?>
						   
						   
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('FRONT END SETTINGS');?><i class="btn btn-info btn-xs"></i></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                	  <?php echo form_open(base_url() . 'staff/settings_front_end/upload_logo' , array(
            'class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>


<div class="form-group">
	  <label class="col-md-12" for="example-text"><?php echo get_phrase('LOGO');?></label> 
	  <div class="col-sm-12">
		  <div class="fileinput fileinput-new" data-provides="fileinput">
			  <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
				  <img src="<?php echo base_url();?>uploads/company_logo.png" alt="..." id="blah">
			  </div>
			  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
			  <div>
				  <span class="btn btn-white btn-file">
					  <span class="fileinput-new">Select image</span>
					  <span class="fileinput-exists">Change</span>
					  <input type="file" name="userfile" onchange="readURL(this);" accept="image/*">
				  </span>
				  <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
			  </div>
		  </div>
	  </div>
</div>



					<div class="form-group">
                      <div class="col-sm-offset-3 col-sm-9">
                          <button type="submit" class="btn btn-info"><?php echo get_phrase('upload');?></button>
                      </div>
                    </div>
				
				
				<?php echo form_close();?>
            
                                </div>
                            </div>
                        </div>
                    </div>
				
 </div> 
   <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
  
  