<!DOCTYPE html>
<html lang="en" dir="<?php if ($text_align == 'right-to-left') echo 'rtl';?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A complete and most powerful school system management system for all. Purchase and enjoy">
    <meta name="author" content="OAKSOFT TECHNOLOGIES">
		<?php 
		//////////LOADING SYSTEM SETTINGS FOR ALL PAGES AND ACCOUNTS/////////
		$system_title	=	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
		?>

    <link rel="icon"  sizes="16x16" href="<?php echo base_url() ?>uploads/logo.png">
    <title><?php echo $page_title;?>&nbsp;|&nbsp;<?php echo $system_title;?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>optimum/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    
	
<?php if ($text_align == 'right-to-left') { ?>
  <link href="<?php echo base_url(); ?>optimum/css/style-rtl.css" rel="stylesheet" type="text/css" >
<?php } else { ?>
  <link href="<?php echo base_url(); ?>optimum/css/style.css" rel="stylesheet" type="text/css" >
<?php } ?>

    
    <!-- color CSS -->
	 <link rel="stylesheet" href="<?php echo base_url(); ?>optimum/plugins/bower_components/dropify/dist/css/dropify.min.css">
	<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />
	

    <link href="<?php echo base_url(); ?>optimum/css/colors/<?php echo $this->db->get_where('settings', array('type' => 'skin_colour'))->row()->description; ?>.css" id="theme" rel="stylesheet">
	<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>optimum/plugins/bower_components/html5-editor/bootstrap-wysihtml5.css" />
	
	 <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
	
		
	
    <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
	 
	
<script src="<?php echo base_url(); ?>optimum/js/jquery-1.11.0.min.js"></script>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script> 
<script type="text/javascript" src="https://js.stripe.com/v3/"></script> 


		
<link href="<?php echo base_url();?>optimum/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/install/css/skins/green.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>optimum/css/style.css" rel="stylesheet" type="text/css" >


<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/install/css/neon-core.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>assets/install/custom.css" rel="stylesheet">


<!--

<link href="<?php echo base_url(); ?>assets/install/css/neon-theme.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/install/css/neon-forms.css" rel="stylesheet">
-->



</head>
<body>

        
