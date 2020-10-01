<?php session_start();?>
<script>var mudi = 0;</script>
<?php 
if(isset($_SESSION["login"]))
{
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ZenPanel+</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Mana Yazılım">

        <!-- Base Css Files -->
        <link href="assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
        <link href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/libs/fontello/css/fontello.css" rel="stylesheet" />
        <link href="assets/libs/animate-css/animate.min.css" rel="stylesheet" />
        <link href="assets/libs/nifty-modal/css/component.css" rel="stylesheet" />
        <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" /> 
        <link href="assets/libs/ios7-switch/ios7-switch.css" rel="stylesheet" /> 
        <link href="assets/libs/pace/pace.css" rel="stylesheet" />
        <link href="assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" />
        <link href="assets/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
        <link href="assets/libs/jquery-icheck/skins/all.css" rel="stylesheet" />
         <!-- Code Highlighter for Demo -->
        <link href="assets/libs/prettify/github.css" rel="stylesheet" />
        
                <!-- Extra CSS Libraries Start -->
                <link href="assets/libs/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
                <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="assets/css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="assets/img/favicon.ico">
        <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.png" />		
    </head>
    <body class="fixed-left">	


		
		<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
		<script src="assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/libs/jquery-detectmobile/detect.js"></script>
		<script src="assets/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
		<script src="assets/libs/ios7-switch/ios7.switch.js"></script>
		<script src="assets/libs/fastclick/fastclick.js"></script>
		<script src="assets/libs/jquery-blockui/jquery.blockUI.js"></script>
		<script src="assets/libs/bootstrap-bootbox/bootbox.min.js"></script>
		<script src="assets/libs/jquery-slimscroll/jquery.slimscroll.js"></script>
		<script src="assets/libs/jquery-sparkline/jquery-sparkline.js"></script>
		<script src="assets/libs/nifty-modal/js/classie.js"></script>
		<script src="assets/libs/nifty-modal/js/modalEffects.js"></script>
		<script src="assets/libs/sortable/sortable.min.js"></script>
		<script src="assets/libs/bootstrap-fileinput/bootstrap.file-input.js"></script>
		<script src="assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
		<script src="assets/libs/bootstrap-select2/select2.min.js"></script>
		<script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script> 
		<script src="assets/libs/pace/pace.min.js"></script>
		
		<script src="assets/libs/jquery-icheck/icheck.min.js"></script>

		<!-- Demo Specific JS Libraries -->
		<script src="assets/libs/prettify/prettify.js"></script>

		<script src="assets/js/init.js"></script>
		<!-- Page Specific JS Libraries -->
		<script src="assets/libs/d3/d3.v3.js"></script>
		<script src="assets/libs/rickshaw/rickshaw.min.js"></script>
		<script src="assets/libs/raphael/raphael-min.js"></script>
		<script src="assets/libs/morrischart/morris.min.js"></script>
		<script src="assets/libs/jquery-knob/jquery.knob.js"></script>
		<script src="assets/libs/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
		<script src="assets/libs/jquery-jvectormap/js/jquery-jvectormap-us-aea-en.js"></script>
		<script src="assets/libs/jquery-clock/clock.js"></script>
		<script src="assets/libs/jquery-easypiechart/jquery.easypiechart.min.js"></script>
		<script src="assets/libs/jquery-weather/jquery.simpleWeather-2.6.min.js"></script>
		<script src="assets/libs/bootstrap-xeditable/js/bootstrap-editable.min.js"></script>
		<script src="assets/libs/bootstrap-calendar/js/bic_calendar.min.js"></script>
		<script src="assets/js/apps/calculator.js"></script>
		<script src="assets/js/apps/todo.js"></script>
		<script src="assets/js/apps/notes.js"></script>
		<script src="assets/js/pages/index.js"></script>	
	
	
	
        <!-- Modal Start -->
        
		
	<!-- Modal Logout -->

	<!-- Begin page -->
	<?php include("parca/topbar.php"); ?>
	<?php include("parca/solmen.php"); ?>
		
        <!-- Left Sidebar End -->		   

  		<?php include("parca/sagmen.php"); ?>
		<!-- SAYFANIN ORTASI -->
		<div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            	<!-- BEGIN MODAL -->
	            <div class="modal fade" id="event-modal">
	                <div class="modal-dialog">
	                    <div class="modal-content">
	                        <div class="modal-header">
	                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                            <h4 class="modal-title"><strong>Randevu Sistemi</strong></h4>
	                        </div>
	                        <div class="modal-body">
	                            <p></p>
	                        </div>
	                        <div class="modal-footer">
	                            <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
	                            <button type="button" class="btn btn-success save-event">Randevu Ekle</button>
	                            <button type="button" onClick="randson()" class="btn btn-danger delete-event" data-dismiss="modal">Randevuyu Sonlandır</button>
	                        </div>
	                    </div>
	                </div>
	            </div>
				
				<script>
				function randson()
				{
					var token4 = ((Math.floor(Math.random() * 99999))*(Math.floor(Math.random() * 99999)))-(Math.floor(Math.random() * 11968));
					document.cookie = "token="+token4;
					$.ajax({
						type:"POST",
						url:"ajax/randevu/randson.php",
						data: {token: token4,sira : eventidd ,randnot : $("#randnot").val(), randtarih : $("#srandtarih").val(), randsaat1 : $("#srandsaat1").val(), randsaat2 : $("#srandsaat2").val(), rmiktar : $("#rmiktar").val(), odemetur : $("#odeme_turu option:selected").text() },							
						success:function(sonuc){
							alert(sonuc);							
							window.location ="randtak.php";	
						}
					});	
				}
				</script>
				
	            <!-- END MODAL -->
				<div class="row">
					<div class="col-md-12 portlets">
						<div class="widget">
							<div class="widget-header">
								<h2>Randevu Takvimi</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content padding">
								
				                <div class="col-md-9">
				                    <div class="widget bg-white">
				                        <div class="widget-body">
				                            <div class="row">
				                                <div class="col-md-12 col-sm-12 col-xs-12">
				                                    <div id="calendar"></div>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				                </div>
							</div>
						</div>
					</div>
				</div>

				            <!-- Footer Start -->
            <footer>
           <?php include("parca/footks.php"); ?>
            </footer>
            <!-- Footer End -->			
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
        
		<!-- SAYFANIN ORTASI BİTTİ -->

	</div>

	<!-- End of page -->
		<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];
	</script>
	<script src="assets/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>
	<script src="assets/libs/jquery-detectmobile/detect.js"></script>
	<script src="assets/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
	<script src="assets/libs/ios7-switch/ios7.switch.js"></script>
	<script src="assets/libs/fastclick/fastclick.js"></script>
	<script src="assets/libs/jquery-blockui/jquery.blockUI.js"></script>
	<script src="assets/libs/bootstrap-bootbox/bootbox.min.js"></script>
	<script src="assets/libs/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="assets/libs/jquery-sparkline/jquery-sparkline.js"></script>
	<script src="assets/libs/nifty-modal/js/classie.js"></script>
	<script src="assets/libs/nifty-modal/js/modalEffects.js"></script>
	<script src="assets/libs/sortable/sortable.min.js"></script>
	<script src="assets/libs/bootstrap-fileinput/bootstrap.file-input.js"></script>
	<script src="assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="assets/libs/bootstrap-select2/select2.min.js"></script>
	<script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script> 
	<script src="assets/libs/pace/pace.min.js"></script>
	<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="assets/libs/jquery-icheck/icheck.min.js"></script>
	<!-- Demo Specific JS Libraries -->
	<script src="assets/libs/prettify/prettify.js"></script>

	<script src="assets/js/init.js"></script>
	<!-- Page Specific JS Libraries -->
	<script src="assets/libs/fullcalendar/fullcalendar.js"></script>
	<!--<script src="assets/js/pages/calendar.js"></script>-->
	
	<?php include("assets/js/pages/calendar.php");?>				
<script>
$(function(){
	document.getElementById("myDropdown").classList.toggle("show");
})
function myFunction()
{
if($("#myInput").val()=="")
{$(".alar").hide();	}
else
{
	$.ajax({
			type:"POST",
			url:"ajax/randevu/mustara.php",
			data: "like="+$("#myInput").val().trim(),
			success:function(sonuc){
				var parca = sonuc.split("*");
				var sayi = 0;
				$(".alar").hide();
				for(var c=0; c<parca.length-1; c++)
				{ 
					var parca2 = parca[c].split(")");
					if(c<12)
					$("#myDropdown").append("<a class='alar' id='alar"+parca2[0]+"' onclick='tikfonk("+parca2[0]+")' href='#'>"+parca2[2]+")"+parca2[1]+"</a>");sayi++;
				}				
			}														
		});	
}	
}
function tikfonk (Deger)
{
	var pa = $("#alar"+Deger).text().split(")");
	mudi = pa[0];
	$("#myInput").val($("#alar"+Deger).text());
	$(".alar").hide();
}
</script>
	</body>
</html>
<?php }?>
<?php
if(!isset($_SESSION["login"]))
	echo '<meta http-equiv="refresh" content="0; url=login.php">';	
?>