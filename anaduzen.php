<?php session_start();?>
<?php 
if(isset($_SESSION["login"]))
{
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Blank | Coco - Responsive Bootstrap Admin Template</title>   
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
    <script> 
	function sadeceSayi(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
	}
	</script>
	
	
        <!-- Modal Start -->
        	<!-- Modal Task Progress -->	
	<div class="md-modal md-3d-flip-vertical" id="task-progress">
		<div class="md-content">
			<h3><strong>Task Progress</strong> Information</h3>
			<div>
				<p>CLEANING BUGS</p>
				<div class="progress progress-xs for-modal">
				  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
					<span class="sr-only">80&#37; Complete</span>
				  </div>
				</div>
				<p>POSTING SOME STUFF</p>
				<div class="progress progress-xs for-modal">
				  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
					<span class="sr-only">65&#37; Complete</span>
				  </div>
				</div>
				<p>BACKUP DATA FROM SERVER</p>
				<div class="progress progress-xs for-modal">
				  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
					<span class="sr-only">95&#37; Complete</span>
				  </div>
				</div>
				<p>RE-DESIGNING WEB APPLICATION</p>
				<div class="progress progress-xs for-modal">
				  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
					<span class="sr-only">100&#37; Complete</span>
				  </div>
				</div>
				<p class="text-center">
				<button class="btn btn-danger btn-sm md-close">Close</button>
				</p>
			</div>
		</div>
	</div>
		
	<!-- Modal Logout -->
	<div class="md-modal md-just-me" id="logout-modal">
		<div class="md-content">
			<h3><strong>Logout</strong> Confirmation</h3>
			<div>
				<p class="text-center">Are you sure want to logout from this awesome system?</p>
				<p class="text-center">
				<button class="btn btn-danger md-close">Nope!</button>
				<a href="login.html" class="btn btn-success md-close">Yeah, I'm sure</a>
				</p>
			</div>
		</div>
	</div>        <!-- Modal End -->	
	<!-- Begin page -->
	<div id="wrapper">
		
<!-- Top Bar Start -->
<div class="topbar">
    <div class="topbar-left">
        <div class="logo">
            <h1><a href="#"><img src="assets/img/logo.png" alt="Logo"></a></h1>
        </div>
        <button class="button-menu-mobile open-left">
        <i class="fa fa-bars"></i>
        </button>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
     <?php include("parca/gorevcb.php"); ?>
</div>
<!-- Top Bar End -->
		    <!-- Left Sidebar Start -->
       <?php include("parca/solmen.php"); ?>
        <!-- Left Sidebar End -->		    <!-- Right Sidebar Start -->
     <?php include("parca/sagmen.php"); ?>
    <!-- Right Sidebar End -->		
		<!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            					<!-- Page Heading Start -->
				<div class="page-heading">
            		<form name="musterikayit" id="musterikayit" method="post" action="msks.php">
                    <div class="widget">
							<div class="widget-header transparent">
								<h2><strong>Anasayfa Güncelleme Paneli</strong></h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content padding">								
								<div class="form-group" id="adi1">								  
									<label>Büyük Punto 1.Mesaj</label>
									<input type="text" id="adi" class="form-control" name="adi">
								  </div>
                                    <div class="form-group" id="soyadi1">
									<label>Küçük Punto 2.Mesaj</label>
									<input type="text" id="soyadi" class="form-control" name="soyadi">
								  </div>

								
								<div class="form-group"">
							<label class="col-sm-2 control-label">Arkaplan Resmi Güncelleme</label>
							<div class="col-sm-10">
							  <input type="file" class="btn btn-default" title="Dosya Seç">
							</div>
								</div>
						
								  
									</div>
                                    <div class="col-md-8">
                                        <div style="padding-left:15px;">
                                       <button name="kaydet" type="submit" class="btn btn-green-3">Güncelle</button>  
									  </div>
                                    <br>
                                    
                                </div>
							</div>													
							<?php
							if(isset($_POST["sorgula"]))
							{$_SESSION["mguncel"] = "1";}
							if(isset($_SESSION["mguncel"]))
							{								
							?>                            
					</div>
                    <?php }?>					
												
							<?php												
							if(isset($_POST["kaydet"]))
							{	
									include("baglanti.php");										
									$adi = htmlspecialchars($_POST["adi"]);
									$soyadi = htmlspecialchars($_POST["soyadi"]);
									$telno = htmlspecialchars($_POST["telno"]);
									$adres = htmlspecialchars($_POST["adres"]);
									$mail = htmlspecialchars($_POST["mail"]);
									$ktarih = htmlspecialchars($_POST["k_tarih"]);	
									$durum = "0";
									
										if($adi!="" && $soyadi!="" && $telno!="" && $ktarih!="")
										{																						
											if(strlen($telno)<11)
												echo '<script type="text/javascript">$(function(){$("#telno1").attr("class","form-group has-error");$("#telno").attr("placeholder","Telefon Numarası 11 Karakter Olmalıdır..!");});</script>';											
											else
											{												
												$sorgu = $vt->query("insert into musteriler (Adi,Soyadi,B_Tarih,Mail,Adres,Tel,Durum) values ('$adi','$soyadi','$ktarih','$mail','$adres','$telno','$durum')");
												if($sorgu) 									
												{ 												
													echo "<script>alert('Müşteri Başarıyla Kayıt Edildi.');</script>";
													mysqli_close($vt);
												}
											}											
										}
										else
										{
											if($adi=="")											
												echo '<script type="text/javascript">$(function(){$("#adi1").attr("class","form-group has-error");});</script>';
											if($soyadi=="")											
												echo '<script type="text/javascript">$(function(){$("#soyadi1").attr("class","form-group has-error");});</script>';	
											if($ktarih=="")											
												echo '<script type="text/javascript">$(function(){$("#ktarih").attr("class","form-group has-error");});</script>';
											if(strlen($telno)<11)											
											{echo '<script type="text/javascript">$(function(){$("#telno1").attr("class","form-group has-error");$("#telno").attr("placeholder","Telefon Numarası 11 Karakter Olmalıdır..!");});</script>';}
											echo '<script type="text/javascript">$(function(){$("#adres1").attr("class","form-group has-success");$("#mail1").attr("class","form-group has-success");});</script>';
											echo "<script>alert('Lütfen Boş Alan Bırakmayınız.');</script>";
										}
									
							}							
							?>
                            </form>
                           	</div>	
            	<!-- Page Heading End-->				
                <div class="row">
					<div class="col-md-12 portlets"></div>
				</div>

				            <!-- Footer Start -->
          <?php include("parca/footks.php"); ?>
            <!-- Footer End -->			
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->

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
<?php
if(!isset($_SESSION["login"]))
	echo '<meta http-equiv="refresh" content="0; url=login.php">';	
?>