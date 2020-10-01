<?php
session_start();
if(!isset($_SESSION['login']))
{
	header ("Location:login.php"); 
}
else{
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard | Coco - Responsive Bootstrap Admin Template</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
        <meta name="author" content="Huban Creative">

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
                <link href='assets/libs/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
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
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="assets/js/sweetalert.min.js"></script>
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
		
		<script src="assets/libs/jquery-icheck/icheck.min.js"></script>

		<!-- Demo Specific JS Libraries -->
		<script src="assets/libs/prettify/prettify.js"></script>

		<script src="assets/js/init.js"></script>
		<!-- Page Specific JS Libraries -->
		<script src="assets/libs/d3/d3.v3.js"></script>
		<script src="assets/libs/rickshaw/rickshaw.min.js"></script>
		<script src="assets/libs/raphael/raphael-min.js"></script>
		<!--<script src="assets/libs/morrischart/morris.min.js"></script>-->
		<script src="assets/libs/jquery-knob/jquery.knob.js"></script>
		<script src="assets/libs/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
		<script src="assets/libs/jquery-jvectormap/js/jquery-jvectormap-us-aea-en.js"></script>
		<script src="assets/libs/jquery-clock/clock.js"></script>
		<script src="assets/libs/jquery-easypiechart/jquery.easypiechart.min.js"></script>
		<script src="assets/libs/jquery-weather/jquery.simpleWeather-2.6.min.js"></script>
		<script src="assets/libs/bootstrap-xeditable/js/bootstrap-editable.min.js"></script>
		<!--<script src="assets/libs/bootstrap-calendar/js/bic_calendar.min.js"></script>-->
		<!--<script src="assets/js/apps/calculator.js"></script>-->
		<script src="assets/js/apps/todo.js"></script>
		<script src="assets/js/apps/notes.js"></script>
		<!--<script src="assets/js/pages/index.js"></script>-->
		<script src='assets/js/pages/js/superagent.js'></script>
		<script src='assets/libs/fullcalendar/fullcalendar.js'></script
		
	
     <!-- Sa? Sol Men? ve TopBar Ba?lang?? -->
	<?php include("parca/topbar.php"); ?>
    <?php include("parca/solmen.php"); ?> 	
	<?php include("parca/sagmen.php"); ?>
    <!-- Sa? Sol Men? ve TopBar Biti? -->	
   
		<!-- Start right content -->
        <div class="content-page">			
            <div class="content">	
					<div class="row">
			<div id="kayd"  class="col-lg-12 portlets"> <!--style="margin-top:0px;padding-top:0px;"-->
			 
		<?php include("hztnm.php");?>		
		<?php include("randtak.php");?>
		<?php //include("kmptnm.php");?>					
		<?php //include("urtnm.php");?>		
		<?php //include("urunsts.php");?>
		<?php include("msks.php");?>	
		<script>
		/*var elem = document.getElementsByClassName("fixed-left")[0]; elem.webkitRequestFullscreen();
		function openFullscreen() {
		  if (elem.requestFullscreen) {
			elem.requestFullscreen();
		  } else if (elem.mozRequestFullScreen) {  //Firefox 
			elem.mozRequestFullScreen();
		  } else if (elem.webkitRequestFullscreen) {  //Chrome, Safari & Opera 
			elem.webkitRequestFullscreen();
		  } else if (elem.msRequestFullscreen) {  //IE/Edge 
			elem.msRequestFullscreen();
		  }
		}*/
		
		$(function(){			
			var path = window.location.href;
			var pathpart = path.split('/')[4].split('-');			
			if(pathpart[0]=="index.php#msks")
			{
				$(".widget-close").trigger('click');
				$("#msks").attr("style","display: block; top: -30;");				
				$(".pagination>li>#"+pathpart[1]).trigger('click');				
			}
		});
		
		
		
		function aclose(Deger)
		{
			//$(".pageblock").hide();	
			$(".widget-close").trigger('click');						
			/*var urunstsp = $("#urunsts").attr("style").split(";");
			var uruntnmp = $("#uruntnm").attr("style").split(";");
			var kmptnmp = $("#kmptnm").attr("style").split(";");*/
			var hztnmp = $("#hztnm").attr("style").split(";");
			var msksp = $("#msks").attr("style").split(";");
			var randtakp = $("#randtak").attr("style").split(";");
			
			/*if(urunstsp[0]=="display: block")
			{
				if(Deger!="urunsts")
				{$("#urunsts").attr("style","display:none");}
				//document.getElementsByClassName('widget-toggle').onclick();
			}
			if(uruntnmp[0]=="display: block")
			{
				if(Deger!="uruntnm")				
				{$("#uruntnm").attr("style","display:none");}				
			}
			if(kmptnmp[0]=="display: block")
			{
				if(Deger!="kmptnm")
				{$("#kmptnm").attr("style","display:none");}				
			}*/
			if(Deger=="hztnm" && hztnmp[0]!="display: block")		
			{						
				$("#hztnm").attr("style","display: block; top: -30;");			
			}	
			if(Deger=="msks" && msksp[0]!="display: block")
			{	
				$("#msks").attr("style","display: block; top: -30;");
			}
			if(Deger=="randtak" && randtakp[0]!="display: block")
			{			
				$("#randtak").attr("style","display: block; top: -30;");
			}
		}
		</script>

</div>
		</div>
				

			</div>
				            <!-- Footer Start -->
            <footer style="float:middle;">
                Mana Yazılım Randevu Takip Sistemi &copy; 2019
                <div class="footer-links pull-right">
                	<a href="#">Destek</a><a href="#">Desteklenen Yapılar</a><a href="#">Lisans</a><a href="#">Yardım</a><a href="#">İletişim</a>
                </div>
            </footer>
            <!-- Footer End -->			
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->

	</div>
	<div id="contextMenu" class="dropdown clearfix">
		    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display:block;position:static;margin-bottom:5px;">
		        <li><a tabindex="-1" href="javascript:;" data-priority="high"><i class="fa fa-circle-o text-red-1"></i> High Priority</a></li>
		        <li><a tabindex="-1" href="javascript:;" data-priority="medium"><i class="fa fa-circle-o text-orange-3"></i> Medium Priority</a></li>
		        <li><a tabindex="-1" href="javascript:;" data-priority="low"><i class="fa fa-circle-o text-yellow-1"></i> Low Priority</a></li>
		        <li><a tabindex="-1" href="javascript:;" data-priority="none"><i class="fa fa-circle-o text-lightblue-1"></i> None</a></li>
		    </ul>
		</div>
	<!-- End of page -->
		<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];
	</script>
	
	</body>
</html>
<?php }?>