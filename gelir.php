<?php session_start();?>
<?php 
if(isset($_SESSION["login"]))
{
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gelir Tablosu - ZenPanel+</title>   
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
                <link href="assets/libs/jquery-datatables/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css" rel="stylesheet" type="text/css" />
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
 <?php include("parca/topbar.php"); ?>
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
				
            	<!-- Page Heading End-->				<!-- Your awesome content goes here -->

				<div class="row">
				
					<div class="col-md-12">
						<div class="widget">
							<div class="widget-header">
								<h2><strong>Son Gelir Tablosu</strong></h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content">
							<br>					
								<div class="table-responsive">
									<form class='form-horizontal' role='form'>
									<table id="datatables-4" class="table table-striped table-bordered" cellspacing="0" width="100%">
									    <thead>
									      <tr>
									            <th>Müşteri Adı Soyadı</th>
									            <th>İşlem Adı</th>
									            <th>İşlem Ücreti</th>
									            <th>Personel</th>
									            <th>Gelir Tarihi</th>
									            <th>Alınan Tutar</th>
									        </tr>
									    </thead>
									 
									    <tfoot>
									        <tr>
												<th>Müşteri Adı Soyadı</th>
									            <th>İşlem Adı</th>
									            <th>İşlem Ücreti</th>
									            <th>Personel</th>
									            <th>Gelir Tarihi</th>
									            <th>Alınan Tutar</th>
									        </tr>
									    </tfoot>
									 
									    <tbody>
									        <tr>
									            <td>Muhammet Bilsel</td>
									            <td>Lazer Epilasyon</td>
									            <td>100 TL</td>
									            <td>Yusuf Sarıçam</td>
									            <td>2011/04/25</td>
									            <td>52,40 TL</td>
									        </tr>
									        <tr>
									            <td>Hamdiye Tunal</td>
									            <td>Cilt Bakımı</td>
									            <td>80 TL</td>
									            <td>Canan Sarıçam</td>
									            <td>2011/07/25</td>
									            <td>70 TL</td>
									        </tr>
									        <tr>
									            <td>Yunus Talha Sarıçam</td>
									            <td>Cilt Bakımı</td>
									            <td>80 TL</td>
									            <td>Yusuf SARIÇAM</td>
									            <td>2009/01/12</td>
									            <td>80 TL</td>
									        </tr>
											   <tr>
									            <td>Muhammet Bilsel</td>
									            <td>Lazer Epilasyon</td>
									            <td>100 TL</td>
									            <td>Yusuf Sarıçam</td>
									            <td>2011/04/25</td>
									            <td>52,40 TL</td>
									        </tr>
											   <tr>
									            <td>Muhammet Bilsel</td>
									            <td>Lazer Epilasyon</td>
									            <td>100 TL</td>
									            <td>Yusuf Sarıçam</td>
									            <td>2011/04/25</td>
									            <td>52,40 TL</td>
									        </tr>
									     <tr>
									            <td>Hamdiye Tunal</td>
									            <td>Cilt Bakımı</td>
									            <td>80 TL</td>
									            <td>Canan Sarıçam</td>
									            <td>2011/07/25</td>
									            <td>70 TL</td>
									        </tr>
									        <tr>
									            <td>Yunus Talha Sarıçam</td>
									            <td>Cilt Bakımı</td>
									            <td>80 TL</td>
									            <td>Yusuf SARIÇAM</td>
									            <td>2009/01/12</td>
									            <td>80 TL</td>
									        </tr><tr>
									            <td>Hamdiye Tunal</td>
									            <td>Cilt Bakımı</td>
									            <td>80 TL</td>
									            <td>Canan Sarıçam</td>
									            <td>2011/07/25</td>
									            <td>70 TL</td>
									        </tr>
									        <tr>
									            <td>Yunus Talha Sarıçam</td>
									            <td>Cilt Bakımı</td>
									            <td>80 TL</td>
									            <td>Yusuf SARIÇAM</td>
									            <td>2009/01/12</td>
									            <td>80 TL</td>
									        </tr><tr>
									            <td>Hamdiye Tunal</td>
									            <td>Cilt Bakımı</td>
									            <td>80 TL</td>
									            <td>Canan Sarıçam</td>
									            <td>2011/07/25</td>
									            <td>70 TL</td>
									        </tr>
									        <tr>
									            <td>Yunus Talha Sarıçam</td>
									            <td>Cilt Bakımı</td>
									            <td>80 TL</td>
									            <td>Yusuf SARIÇAM</td>
									            <td>2009/01/12</td>
									            <td>80 TL</td>
									        </tr>

									       
									    </tbody>
									</table>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				            <!-- Footer Start -->
            <footer>
                Huban Creative &copy; 2014
                <div class="footer-links pull-right">
                	<a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact Us</a>
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
	<!-- End of page -->
		<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];
	</script>
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
	<!-- Page Specific JS Libraries -->
	<script src="assets/libs/jquery-datatables/js/jquery.dataTables.js"></script>
	<script src="assets/libs/jquery-datatables/js/dataTables.bootstrap.js"></script>
	<script src="assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.js"></script>
	<script src="assets/js/pages/datatables.js"></script>
	</body>
</html>
<?php }?>
<?php
if(!isset($_SESSION["login"]))
	echo '<meta http-equiv="refresh" content="0; url=login.php">';	
?>