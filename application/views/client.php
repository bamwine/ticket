<?xml version="1.0" encoding="ISO-8859-1"?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en_US_#u-ca-gregory" dir="ltr">
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title> <?php echo $title; ?> | E-Ticket</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,IE=10,IE=EmulateIE10,IE=9,IE=EmulateIE9,IE=8,IE=EmulateIE8,IE=7,IE=EmulateIE7" />
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	
	<link rel="icon"  sizes="16x16" href="<?php echo base_url() ?>uploads/logo.png">
	<meta name="theme-color" content="#e00000" />
	<!-- Font Awesome -->
    
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/pages/availability.css?vv=2" /><head id="j_idt2">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/pages/paymentInfo.css?vv=2" /><script type="text/javascript" src="/web/javax.faces.resource/jsf.js.xhtml?ln=javax.faces"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/pages/passengerinfo.css?vv=2" /><script type="text/javascript" src="/web/javax.faces.resource/jsf.js.xhtml?ln=javax.faces"></script>


	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/commonParts.css?vv=2" />
   	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/base.css?vv=2" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/plugins.css?vv=2" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/ibe.css?vv=2" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/responsive.css?vv=2" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/responsive/responsive.css?vv=2" />
	<script src="<?php echo base_url(); ?>assets/client/plugins/jquery/jquery.min.js?vv=1.0"></script>
	
	 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/tel/intlTelInput.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/tel/demo.css">
	
 </head>
 
 <body>

  <?php echo $content; ?>
	
<div class="site-footer">

<div class="container">

<div class="copyright clearfix">
<small>
<p> © <a href="http://generationatech.com" target="_blank">Developed by Oaksoft Technologies.  -.</a> All Right Reserved (2015)</p>
</small>
</div>
</div>
</div>

<script src="<?php echo base_url(); ?>optimum/plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>

<!-- call compressed --><script src="<?php echo base_url(); ?>assets/client/plugins/bootstrap/bootstrap.min.js?vv=1.0"></script>
<!-- call compressed --><script src="<?php echo base_url(); ?>assets/client/plugins/calendar/calendar.min.js?vv=1.0"></script>
<!-- call compressed --><script src="<?php echo base_url(); ?>assets/client/plugins/calendar/calendars/jquery.calendars.min.js?vv=1.0"></script>
<!-- call compressed --><script src="<?php echo base_url(); ?>assets/client/plugins/calendar/calendars/jquery.calendars.plus.min.js?vv=1.0"></script>
<script src="<?php echo base_url(); ?>assets/client/plugins/calendar/calendars/jquery.calendars.gregorian.js?vv=2"></script>
<!-- call compressed --><script src="<?php echo base_url(); ?>assets/client/plugins/calendar/datepicker/jquery.calendars.picker.min.js?vv=1.0"></script>


<!-- call compressed --><script src="<?php echo base_url(); ?>assets/client/plugins/fittext/fittext.min.js?vv=1.0"></script>
<!-- call compressed --><script src="<?php echo base_url(); ?>assets/client/plugins/jsfScrollFix/jsfScrollFix.min.js?vv=1.0"></script>
<!-- call compressed --><script src="<?php echo base_url(); ?>assets/client/plugins/nouislider/nouislider.min.js?vv=1.0"></script>
<!-- call compressed --><script src="<?php echo base_url(); ?>assets/client/plugins/nouislider/wNumb.min.js?vv=1.0"></script>
<!-- call compressed --><script src="<?php echo base_url(); ?>assets/client/plugins/pagination/pagination.min.js?vv=1.0"></script>
<!-- call compressed --><script src="<?php echo base_url(); ?>assets/client/plugins/preventBrowserBack/preventBrowserBack.min.js?vv=1.0"></script>
	  	
<!-- call compressed --><script src="<?php echo base_url(); ?>assets/client/plugins/prodRestrictions/prodRestrictions.min.js?vv=1.0"></script>
<!-- call compressed --><script src="<?php echo base_url(); ?>assets/client/plugins/selectize/selectize.min.js?vv=1.0"></script>
<!-- call compressed --><script src="<?php echo base_url(); ?>assets/client/plugins/tabIndex/tabIndex.min.js?vv=1.0"></script>
<!-- call compressed --><script src="<?php echo base_url(); ?>assets/client/plugins/validation/validation.min.js?vv=1.0"></script>
			
			<script>		
			
			$(document).ready(function() {
				if(!/Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
					$("#FlightSearch").css({'padding-bottom':($(".sticky-basket").height()+'px')});	
				}
				
				$(document).on("click", ".basketCollepse", function() {
					if($('.basket-detail').css('display') == 'none'){
						$('.basket-detail').show();
						$('.basket-summary').hide();
						$('.show-details-label').hide();
						$('.hide-details-label').show();
						if(!/Android|webOS|iPad|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							$("#FlightSearch").css({'padding-bottom':($(".sticky-basket").height()+'px')});
							$(".detailed-right-area").css({'height':($(".basket-detail").height()+'px')});
							$(".detailed-flight").css({'height':($(".basket-detail").height()+'px')});
						}

					}
					else{
						$('.basket-detail').hide();
						$('.basket-summary').show();
						$('.show-details-label').show();
						$('.hide-details-label').hide();	
						if(!/Android|webOS|iPad|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							$("#FlightSearch").css({'padding-bottom':($(".sticky-basket").height()+'px')});
							$(".summary-right-area").css({'height':($(".basket-summary").height()+'px')});
							$(".route-selection-side").css({'height':($(".basket-summary").height()+'px')});
						}
						
					}
				});
				
				
					
				$(window).scroll(function() {
					if(!/Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
						$("#FlightSearch").css({'padding-bottom':(($(".sticky-basket").height()+$(".site-footer").outerHeight())+'px')});
						   if($(window).scrollTop() + $(window).height() >= $(document).height()) {
						       $(".sticky-basket").css({'bottom':($(".site-footer").outerHeight()+'px')});
						   }
						   else {
						    $(".sticky-basket").css('bottom','0px');
						   }
					}
				});	
				setHeight();
				setScroll();
				
			});

				function setHeight(){
				if(!/Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 						let flights=$('.flight-details');
				for (let i = 0; i < flights.length; i++ ) {
					let height;
					let heightInfo=$(flights[i]).find('.info').outerHeight();
					let heightPrice=100;
					$(flights[i]).find('.fare-link').each(function( index ) {
						  if($(this).outerHeight()>heightPrice){
							  heightPrice=$(this).outerHeight();
						  }
					});
					if(heightPrice>heightInfo){
						height=heightPrice;
					}else{
						height=heightInfo;
					}
					if(height>0){
						$(flights[i]).find(".inner-price").css({'min-height':(height+'px')});
						$(flights[i]).find(".not-selectable-inner").css({'height':(height+'px')});
					}
				}
				setBundleHeight();
				var maxHeight = -1;
				
				$('.route-selection-side').each(function() {
    				maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
   				});

   				$('.route-selection-side').each(function() {
     				$(this).height(maxHeight);
   				});
				}
			}
			
			function setBundleHeight(){
				var maxHeight = -1;
				$('.bundle-element-body').each(function() {
    				maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
   				});
   				$('.bundle-element-body').each(function() {
     				$(this).height(maxHeight);
   				});
			}
			
			
			
			
			
			//]]>
		</script>
		
		

<!-- call compressed --><script src="<?php echo base_url(); ?>assets/client/plugins/keypad/keypad.min.js?vv=1.0"></script>
<!-- call compressed --><script src="<?php echo base_url(); ?>assets/client/plugins/paymentCreditCard/paymentCreditCard.min.js?vv=1.0"></script>
<!-- call compressed --><script src="<?php echo base_url(); ?>assets/client/plugins/sticky/sticky.min.js?vv=1.0"></script>
<!-- call compressed --><script src="<?php echo base_url(); ?>assets/client/plugins/sweetalert/sweetalert.min.js?vv=1.0"></script>
<!-- call compressed --><script  src="<?php echo base_url(); ?>assets/client/plugins/telinput/telinput.min.js?vv=1.0"></script>
<!-- call compressed --><script  src="<?php echo base_url(); ?>assets/client/plugins/telinput/utils.js?vv=1.0"></script>
<!-- jQuery -->
<script src="<?php echo base_url(); ?>optimum/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>optimum/js/jquery-1.11.0.min.js"></script>		
<script src="<?php echo base_url(); ?>assets/client/plugins/selectize/selectize.min.js?vv=1.0"></script>

 		        
<script>
  		
        function selectize() {
            Selectize.define('no-delete', function (options) {
                this.deleteSelection = function (e) {
                	if(e.key == "Tab")
                		return;
                    var b = this;
                    b.$control.children(":not(input)").remove(); b.items = []; b.setCaret(0); b.updatePlaceholder(); b.refreshState(); b.showInput(); b.trigger("clear");
                    return false;
                };
            });
            
            var propObjGroup = {};
            if("PassengerInfo" != "RezvPaxEntry" && "PassengerInfo" != "PassengerInfo"){
            	
            	propObjGroup.plugins = {
            			'no-delete' : {}
            	};
            	
            	propObjGroup.searchField = ['text', 'optgroup'];
            	
            }
            
            var propObj = {};
            if("PassengerInfo" != "RezvPaxEntry" && "PassengerInfo" != "PassengerInfo"){
            	
            	propObj.plugins = {
            			'no-delete' : {}
            	};
            	
            }
            
            $("select:has(optgroup)").selectize(propObjGroup);
            $("select:not(.no-selectize):not(:has(optgroup))").selectize(propObj);
            
            $("select:not('.search')").each(function () {
                $(this).next().find("input").attr("readonly", "readonly");
            });
        }

        $(function () {
      		
			if (!Array.prototype.indexOf) {
			  Array.prototype.indexOf = function(searchElement, fromIndex) {
			
			    var k;
			
			    // 1. Let o be the result of calling ToObject passing
			    //    the this value as the argument.
			    if (this == null) {
			      throw new TypeError('"this" is null or not defined');
			    }
			
			    var o = Object(this);
			
			    // 2. Let lenValue be the result of calling the Get
			    //    internal method of o with the argument "length".
			    // 3. Let len be ToUint32(lenValue).
			    var len = o.length >>> 0;
			
			    // 4. If len is 0, return -1.
			    if (len === 0) {
			      return -1;
			    }
			
			    // 5. If argument fromIndex was passed let n be
			    //    ToInteger(fromIndex); else let n be 0.
			    var n = fromIndex | 0;
			
			    // 6. If n >= len, return -1.
			    if (n >= len) {
			      return -1;
			    }
			
			    // 7. If n >= 0, then Let k be n.
			    // 8. Else, n<0, Let k be len - abs(n).
			    //    If k is less than 0, then let k be 0.
			    k = Math.max(n >= 0 ? n : len - Math.abs(n), 0);
			
			    // 9. Repeat, while k < len
			    while (k < len) {
			    
			      if (o[k] == searchElement) {
			        return k;
			      }
			      k++;
			    }
			    return -1;
			  };
			}
	        /*
	        	Temporary iOS Fix
	        */
	        if(/iPhone/.test(navigator.userAgent)){
	        	String.prototype.toLocaleLowerCase = String.prototype.toLowerCase;
	        	String.prototype.toLocaleUpperCase = String.prototype.toUpperCase;
	        }

            if (typeof jsf !== "undefined")
                jsf.ajax.addOnEvent(function interpreteEvent(e) {
                    if (e.status == "success")
                        selectize();
                });
        	
            selectize();
        });
        
        
   	 
    </script>
	
<script type="text/javascript">

  $(function() {       
	fuction_holder();
    });
	
$form = $('#FlightSearch');

function fuction_holder() {
	
	
	<?php if ($this->session->userdata('searchdata')) { ?>
			
		$('.sticky-basket').css('display', 'block');
		//$('.sticky-basket').show();
	<?php } else {?>  
	//$('.sticky-basket').hide();
	$('.sticky-basket').css('display', 'none'); <?php }?>		
		
		
	
	

 $('.clear-selection').on("click", function() {
	 alert('<?php  echo $this->session->userdata('searchdata');?>');
	<?php // $this->session->unset_userdata('searchdata');?>
	$('.sticky-basket').css('display', 'none'); 
	
});

 $('.continue-button').on("click", function() {
	//alert('gggg');
	 $form.get(0).submit();
	 
});

	
let flights=$('.button-fare');

for (let i = 0; i < flights.length; i++ ) {
	

	$(flights[i]).find('.price-button-inside').each(function(index) {
		  	
		  $(this).on("click", function() {
		 	var holder = this.id;
			var test = holder.split(':');
		$('.button-fare').find('.price-button-inside').removeClass('true').html('SELECT') 
		$(this).removeClass("false").addClass("true").html('SELECTED');	
	
	
		
		
$form.bind('submit', function(evt){
 evt.preventDefault(); 
 get_flight_selected(test[0],test[1],test[2]);
 

 //window.location.reload(1);

 


		});
		
	
 
		});

		});

}

}
	

    function get_flight_selected(flightno1,classid1,price_cost1) {
        var flightno = flightno1;	
		var classid = classid1;
		var price_cost = price_cost1;
				
	    $.ajax({
			type:'POST',
            url: '<?php echo base_url(); ?>Install/get_search_details',
			data:{'flight_no':flightno,'class_type':classid},			
            async: false,
            success: function (response)
            { 
				//alert(response);
				//let y = JSON.parse(response);
				let y = JSON.stringify(response);
				   $('#datas').val(response) ;
				   
			<?php  //$this->session->unset_userdata('searchdata');?>
			<?php  $this->session->set_userdata('searchdata',$this->input->post('datas')); ?>
			
			//$('.sticky-basket').css('display', 'block');
			$('.sticky-basket').show();
			
	 
			
			
            }
        });
		
		
    }
		
	
	
	
	
</script>

  <script src="<?php echo base_url(); ?>assets/client/plugins/telinput/intlTelInput.js"></script>
  <script>
    var input = document.querySelector("#telephone");
    window.intlTelInput(input, {
	nationalMode: false,
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "<?php echo base_url(); ?>assets/client/plugins/telinput/utils.js",
    });
  </script>


</body>

</html>