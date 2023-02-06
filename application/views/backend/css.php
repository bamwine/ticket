<!DOCTYPE html>
<html lang="en" dir="<?php if ($text_align == 'right-to-left') echo 'rtl';?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A complete and most powerful E-ticketing system management system for all. Purchase and enjoy">
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
    <!-- Menu CSS -->
    <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url(); ?>optimum/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
 
	
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
	
	<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/icheck/skins/all.css" rel="stylesheet">
		
		
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>optimum/plugins/bower_components/gallery/css/animated-masonry-gallery.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>optimum/plugins/bower_components/fancybox/ekko-lightbox.min.css" />

    <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
	 
<!--alerts CSS -->
   <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    	 
	<!-- Wizard CSS -->
     <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/jquery-wizard-master/css/wizard.css" rel="stylesheet">
 
 <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/icheck/skins/all.css" rel="stylesheet">
    
	
<script src="<?php echo base_url(); ?>optimum/js/jquery-1.11.0.min.js"></script>

<script src="<?php echo base_url(); ?>optimum/plugins/bower_components/jsPDF/jquery-1.7.1.min.js"></script>	

<!-- jsPDF CSS -->
<script src="<?php echo base_url(); ?>optimum/plugins/bower_components/jsPDF/jspdf.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/plugins/bower_components/jsPDF/jspdf.plugin.standard_fonts_metrics.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/plugins/bower_components/jsPDF/jspdf.plugin.split_text_to_size.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/plugins/bower_components/jsPDF/jspdf.plugin.from_html.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/plugins/bower_components/jsPDF/jspdf.plugin.javascript.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/plugins/bower_components/jsPDF/dist/jspdf.min.js"></script>	
<script src="<?php echo base_url(); ?>optimum/plugins/bower_components/jsPDF/jspdf.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/plugins/bower_components/jsPDF/html2canvas.js" type="text/javascript"></script>



	
<!--Amcharts-->
<script src="<?php echo base_url(); ?>optimum/js/amcharts/amcharts.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/pie.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/serial.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/gauge.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/funnel.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/radar.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/exporting/amexport.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/exporting/rgbcolor.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/exporting/canvg.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/exporting/jspdf.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/exporting/filesaver.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/exporting/jspdf.plugin.addimage.js" type="text/javascript"></script>


<script type="text/javascript" src="https://js.stripe.com/v2/"></script> 
<script type="text/javascript" src="https://js.stripe.com/v3/"></script> 

</head>
<body>

        
