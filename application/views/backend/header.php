<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">  
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                
				<div class="top-left-part"><a class="logo" href="#"><b>
				
				<img src="<?php echo base_url() ?>uploads/logo.png" class="img-circle" width="50" height="50" alt="home" /></b><span class="hidden-xs"><strong>E-TICKET </strong> OBETS
				
				</span></a></div>
				
               <ul class="nav navbar-top-links navbar-right pull-right">
			   
			   	<li class="dropdown"> <a class="dropdown-toggle"  href="<?php echo base_url();?><?php echo $this->session->userdata('login_type'); ?>/dashboard"><i class="icon-home"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                      
                    </li>
			   
			   
                <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-language"></i>
					
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
		  <?php if($this->session->userdata('login_type') == 'staff') : ?>
           <ul class="dropdown-menu  animated bounceInDown">
		   
                            <?php
                            $fields = $this->db->list_fields('language');
                            foreach ($fields as $field) {
                                if ($field == 'phrase_id' || $field == 'phrase')
                                    continue;
                                ?>
                            <li class="<?php if ($this->session->userdata('current_language') == $field) echo 'active'; ?>">
                                <a href="<?php echo base_url(); ?>multilanguage/select_language/<?php echo $field; ?>">
                                    <img src="<?php echo base_url(); ?>optimum/flag/<?php echo $field; ?>.png" style="width:16px; height:16px;" />	
                                    <span><?php echo $field; ?></span>
                                </a>
                            </li>
                            <?php
                        }
                        ?>

                    </ul>
										 <?php endif; ?>

                    </li>
					
					
					
                
			
				
				
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title" align="center">You have&nbsp;<button class="btn btn-success btn-circle"><?php echo $this->crud_model->count_unread_message_of_curuser() ?></button>&nbsp;Messages</div>
                            </li>
		
		 				<?php
                        $messages = $this->crud_model->unread_message_of_curuser();
                        foreach ($messages as $message) :
                            ?>
                            <li>
                                <div class="message-center">
								
                                    <a href="<?php echo base_url(); ?><?php echo ($this->session->userdata('login_type') == 'parent' ? 'parents' : $this->session->userdata('login_type')) ?>/message/message_read/<?php echo $message["message_thread_code"] ?>">
                                        <div class="user-img"> <img src="<?php echo $message["face_file"] ?>" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5><?php echo $message["sender_name"] ?></h5> <span class="mail-desc"><?php echo $message["message"] ?></span> <span class="time"><?php echo $message["ago"] ?>&nbsp;ago</span> </div>
                                    </a>
                                   
                                    
                                </div>
                            </li>
					 <?php endforeach; ?>                        

							
                            <li>
                                <a class="text-center" href="<?php echo base_url(); ?><?php echo ($this->session->userdata('login_type') == 'parent' ? 'parents' : $this->session->userdata('login_type')) ?>/message"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
							<?php
                            $key = $this->session->userdata('login_type') . '_id';
                            $face_file = 'uploads/' . $this->session->userdata('login_type') . '_image/' . $this->session->userdata($key) . '.jpg';
                            if (!file_exists($face_file)) {
                                $face_file = 'uploads/default_avatar.jpg';
//                                    if ($key = $this->session->userdata('login_type') == 'admin') {
//                                        $face_file = base_url() . 'uploads/' . $this->session->userdata('login_type') . '_image/1.jpg';
//                                    }
                            }
                            ?>
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="<?php echo base_url() . $face_file; ?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">
								<?php 
								$account_type	=	$this->session->userdata('login_type');
								$account_id		=	$account_type.'_id';
								$name			=	$this->crud_model->get_type_name_by_id($account_type , $this->session->userdata($account_id) , 'name');
								echo $name;
								?>
							</b> </a>
							 <?php if ($account_type != 'parent'): ?>
							 
							<ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="<?php echo base_url();?><?php echo $this->session->userdata('login_type');?>/manage_profile"><i class="ti-user"></i>  My Profile</a></li>
                            <li><a href="<?php echo base_url();?><?php echo $this->session->userdata('login_type') ?>/message"><i class="ti-email"></i>  Inbox</a></li>
      <li><a href="<?php echo base_url();?><?php echo $this->session->userdata('login_type');?>/manage_profile"><i class="ti-settings"></i> <?php echo get_phrase('account_settings');?></a></li>
                            <li><a href="<?php echo base_url();?>login/logout"><i class="fa fa-power-off"></i>&nbsp;<?php echo get_phrase('logout');?></a></li>
                        	</ul>
						
                        <?php endif; ?>                  
                    
					
                        <!-- /.dropdown-user -->
                    </li>
					
					
					 <!-- .Megamenu -->
                    <li class="mega-dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" ><span class="hidden-xs"></span> <i class="icon-options-vertical"></i></a>
                        <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">

                            <li class="col-sm-12 m-t-40 demo-box">
                        			
				<div class="row">                            
												 
									<div class="col-sm-2">
                                        <div class="white-box text-center bg-success"><a href="<?php echo base_url(); ?><?php echo $account_type; ?>/flightschedule"  class="text-white"><i class="fa fa-plus"></i>&nbsp;FLIGHTS</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-warning"><a href="<?php echo base_url(); ?><?php echo $account_type; ?>/flightaircrafts"  class="text-white"><i class="fa fa-users"></i>&nbsp;AIR CRAFTS</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-inverse"><a href="<?php echo base_url(); ?><?php echo $account_type; ?>/flightroutes"  class="text-white"><i class="fa fa-certificate"></i>&nbsp;FLIGHT ROUTES</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-danger"><a href="<?php echo base_url(); ?><?php echo $account_type; ?>/bookings"  class="text-white"><i class="fa fa-book"></i>&nbsp;BOOKINGS</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-info"><a href="<?php echo base_url(); ?><?php echo $account_type; ?>/flight_destination"  class="text-white"><i class="fa fa-car"></i>&nbsp;DESTINATION</a></div>
                                    </div>
                                   			 
									
									
									
																		
		</div>
						  
                            </li>
                        </ul>
                    </li>


                    <!-- /.Megamenu -->
                    <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-microsoft-alt"></i></a></li>
                    <!-- /.dropdown -->
                </ul>
            </div>   
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>