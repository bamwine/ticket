
<!-- Left navbar-header -->
        <div id="sidebar-menu" class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="user-pro hide-menu">
                        <?php
                            $key = $this->session->userdata('login_type') . '_id';
                            $face_file = 'uploads/' . $this->session->userdata('login_type') . '_image/' . $this->session->userdata($key) . '.jpg';
                            if (!file_exists($face_file)) {
                                $face_file = 'uploads/default.jpg';
//                                    
                            }
                            ?>
						
						<a href="javascript:void(0);" class="waves-effect"><img src="<?php echo base_url() . $face_file; ?>" alt="user-img" class="img-circle"> <span class="hide-menu">
								<?php 
								$account_type	=	$this->session->userdata('login_type');
								$account_id		=	$account_type.'_id';
								$name			=	$this->crud_model->get_type_name_by_id($account_type , $this->session->userdata($account_id) , 'name');
								echo $name;
								?>
								</span></span>
                   </a>
				   </li>
				   

				   
                    <li class="<?php if($page_name == 'dashboard')echo 'active';?>">
					<a href="<?php echo base_url();?><?php echo $account_type; ?>/dashboard" >
					<i class="fa fa-dashboard p-r-10"></i>
					<span class="hide-menu"><?php echo get_phrase('dashboard');?></span>
				    </a>	
				    </li>


					


<li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-plane p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('manage_flights');?><span class="fa arrow"></span></span></a>
		
             <ul class=" nav nav-second-level<?php if ( $page_name == 'flightschedule' || 
				$page_name == 'flightaircrafts ' || $page_name == 'bookings') echo 'opened active'; ?>">
						

				
				 <!-- MANAGE  BOOKINGS  -->
        <li class="<?php if($page_name == 'bookings')echo 'active';?>">
					 <a href="<?php echo base_url(); ?><?php echo $account_type; ?>/bookings">
					<i class="fa fa-file p-r-10"></i>
					<span class="hide-menu"><?php echo get_phrase('MAKE_BOOKINGS');?></span>
				    </a>	
		</li>
		
		
		 <!-- MANAGE  tickets  -->
        <li class="<?php if($page_name == 'fligth_ticket')echo 'active';?>">
					 <a href="<?php echo base_url(); ?><?php echo $account_type; ?>/ticket">
					<i class="fa fa-file p-r-10"></i>
					<span class="hide-menu"><?php echo get_phrase('VIEW_ TICKETS');?></span>
				    </a>	
		</li>
				 <!-- MANAGE  flightschedule  -->
        <li class="<?php if($page_name == 'flightschedule')echo 'active';?>">
					 <a href="<?php echo base_url(); ?><?php echo $account_type; ?>/flightschedule">
					<i class="fa fa-file p-r-10"></i>
					<span class="hide-menu"><?php echo get_phrase('FLIGHT_SCHEDULE');?></span>
				    </a>	
		</li>
		
		
		 <!-- MANAGE  flightroutes  -->
        <li class="<?php if($page_name == 'flightroutes ')echo 'active';?>">
					 <a href="<?php echo base_url(); ?><?php echo $account_type; ?>/flightroutes">
					<i class="fa fa-file p-r-10"></i>
					<span class="hide-menu"><?php echo get_phrase('FLIGHT_ROUTES');?></span>
				    </a>	
		</li>

		
				 <!-- MANAGE  flightaircrafts  -->
        <li class="<?php if($page_name == 'flightaircrafts ')echo 'active';?>">
					 <a href="<?php echo base_url(); ?><?php echo $account_type; ?>/flightaircrafts">
					<i class="fa fa-file p-r-10"></i>
					<span class="hide-menu"><?php echo get_phrase('AIRCRAFT_DETAILS');?></span>
				    </a>	
		</li>
		
			
		
		 <!-- MANAGE  flight_destination  -->
        <li class="<?php if($page_name == 'flight_destination')echo 'active';?>">
					 <a href="<?php echo base_url(); ?><?php echo $account_type; ?>/flight_destination">
					<i class="fa fa-file p-r-10"></i>
					<span class="hide-menu"><?php echo get_phrase('ADD_DESTINATION');?></span>
				    </a>	
		</li>


			
		






			
                 </ul>
                </li>
				
					



				




 
<li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-envelope p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('internal_message');?><span class="fa arrow"></span></span></a>
		
                        <ul class=" nav nav-second-level<?php if ($page_name == 'noticeboard' || $page_name == 'message') echo 'opened active'; ?>">
						
                 		 <li class="<?php if ($page_name == 'noticeboard') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?><?php echo $account_type; ?>/noticeboard">
				<i class="fa fa-calendar p-r-10"></i>
                   <span class="hide-menu"><?php echo get_phrase('noticeboards'); ?></span>
                </a>
            </li>

            <!-- MESSAGE -->
            <li class="<?php if ($page_name == 'message') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?><?php echo $account_type; ?>/message">
				<i class="fa fa-envelope p-r-10"></i>
                    <span class="hide-menu"><?php echo get_phrase('private_messages'); ?></span>
                </a>
            </li>
     
                 </ul>
                </li>




            <!-- ACCOUNT -->
            <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?><?php echo $account_type; ?>/manage_profile">
                    <i class=" fa fa-laptop p-r-10"></i>
                    <span class="hide-menu"><?php echo get_phrase('personal_details'); ?></span>
                </a>
            </li>

			
			
			
			
 <!-----FRONT END SETTINGS ----->
	<li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-gears p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('front_end_settings');?><span class="fa arrow"></span></span></a>
		
                        <ul class=" nav nav-second-level<?php
            if ($page_name == 'banar' ||
                    $page_name == 'front_end')
                echo 'opened active';
            ?>">  
				 
				 

                    <li class="<?php if ($page_name == 'front_end') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?><?php echo $account_type; ?>/settings_front_end">
						<i class="fa fa-list p-r-10"></i>
                             <span class="hide-plus"><?php echo get_phrase('front_end_settings'); ?></span>
                        </a>
                    </li>
					
					

     
                 </ul>
                </li>

			
					
                  
                </ul>
            </div>
        </div>

	