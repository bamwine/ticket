<?php 
$system_name = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
$system_title = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
$abb = $this->db->get_where('settings', array('type' => 'abb'))->row()->description;
$footer = $this->db->get_where('settings', array('type' => 'footer'))->row()->description;
$skin_colour = $this->db->get_where('settings', array('type' => 'skin_colour'))->row()->description;
$text_align         =	$this->db->get_where('settings' , array('type'=>'text_align'))->row()->description;
$active_sms_service = $this->db->get_where('settings', array('type' => 'active_sms_service'))->row()->description;
$running_year 		=   $this->db->get_where('settings' , array('type'=>'session'))->row()->description;
?>
<?php include 'css.php'; ?>

    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
    

	<?php include 'header.php'; ?>
		
		 <?php include 'page_info.php';?>
		
	
            </div>
            <!-- /.container-fluid -->
			
			

		
         <?php include 'footer.php'; ?>

		
        </div>
        <!-- /#page-wrapper -->
    </div>
 <?php include 'modal.php'; ?>
 <?php include 'js.php'; ?>
 



	
</body>

</html>

 
 
 
 
 
 
