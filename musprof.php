<?php session_start();?>
<?php 
if(isset($_SESSION["login"]))
{
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Müşteri Paneli | YNS GÜZELLİK 2018</title>   
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
        <!-- Left Sidebar End -->		
		<!-- Right Sidebar Start -->
		<?php include("parca/sagmen.php"); ?>
		<!-- Right Sidebar End -->		
		 <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
			<div class="profile-banner" style="background-image: url(images/stock/1epgUO0.jpg);">
				<div class="col-sm-3 avatar-container">
					<img src="images/users/user-256.jpg" class="img-circle profile-avatar" alt="User avatar">
				</div>
			</div>
            <div class="content">

				<div class="row">
					<div class="col-sm-3">
						<!-- Begin user profile -->
						<div class="text-center user-profile-2">
							<h4><b>Müşteri Adı</b></h4>
							<!--
							<h5>Administrator</h5>
							<ul class="list-group">
							  <li class="list-group-item">
								<span class="badge">1,245</span>
								Followers
							  </li>
							  <li class="list-group-item">
								<span class="badge">245</span>
								Following
							  </li>
							  <li class="list-group-item">
								<span class="badge">1,245</span>
								Tweets
							  </li>
							</ul>
								-->
								<!-- User button -->
								<!-- End div .user-button -->
						</div><!-- End div .box-info -->
						<!-- Begin user profile -->
					</div><!-- End div .col-sm-4 -->
					
					<div class="col-sm-9">
						<div class="widget widget-tabbed">
							<!-- Nav tab -->
							<ul class="nav nav-tabs nav-justified">
							  <li class="active"><a href="#my-timeline" data-toggle="tab"><i class="fa fa-pencil"></i> İşlem Geçmişi</a></li>
							  <li><a href="#about" data-toggle="tab"><i class="fa fa-user"></i> Müşteri Bilgileri</a></li>
							  <li><a href="#user-activities" data-toggle="tab"><i class="fa fa-laptop"></i> Ödeme Bilgileri</a></li>
							  <li><a href="#mymessage" data-toggle="tab"><i class="fa fa-envelope"></i> SMS</a></li>
							</ul>
							<!-- End nav tab -->

							<!-- Tab panes -->
							<div class="tab-content">
								
								
								<!-- Tab timeline -->
								<div class="tab-pane animated active fadeInRight" id="my-timeline">
									<div class="user-profile-content">
										
										<!-- Begin timeline -->
										<div class="the-timeline">
											
											<br><br>
											<ul>
												<li>
													<div class="the-date">
														<span>04</span>
														<small>Ağu</small>
													</div>
													<h4>Lazer Epilasyon İşlemi</h4>
													<p>
													4.Seansa ait rötuş işlemi yapıldı. 
													</p>
												</li>
												<li>
													<div class="the-date">
														<span>15</span>
														<small>Tem</small>
													</div>
													<h4>Lazer Epilasyon İşlemi</h4>
													<p>
													3.Seans işlemi yapıldı. 
													</p>
												</li>
												<li>
													<div class="the-date">
														<span>25</span>
														<small>Haz</small>
													</div>
													<h4>Lazer Epilasyon İşlemi</h4>
													<p>
													3.Seansa ait rötuş işlemi yapıldı. 
													</p>
												</li>
												<li class="the-year"><p>2017</p></li>
												<li>
													<div class="the-date">
														<span>31</span>
														<small>Ara</small>
													</div>
													<h4>Cilt Bakımı</h4>
													<p>
													Müşteriye Cilt bakımı işlemi yapıldı.
													</p>
												</li>
												<li>
													<div class="the-date">
														<span>27</span>
														<small>Nov</small>
													</div>
													<p>
													sadasdasdas asdasdas 
													</p>
												</li>
											</ul>
										</div><!-- End div .the-timeline -->
										<!-- End timeline -->
									</div><!-- End div .user-profile-content -->
								</div><!-- End div .tab-pane -->
								<!-- End Tab timeline -->
								
								<!-- Tab about -->
								<div class="tab-pane animated fadeInRight" id="about">
									<div class="user-profile-content">
										<h5><strong>ABOUT</strong> ME</h5>
										<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
										</p>
										<hr />
										<div class="row">
											<div class="col-sm-6">
												<h5><strong>CONTACT</strong> ME</h5>
													<address>
														<strong>Phone</strong><br>
														<abbr title="Phone">+62 857 123 4567</abbr>
													</address>
													<address>
														<strong>Email</strong><br>
														<a href="mailto:#">first.last@example.com</a>
													</address>
													<address>
														<strong>Website</strong><br>
														<a href="http://r209.com">http://r209.com</a>
													</address>
											</div>
											<div class="col-sm-6">
												<h5><strong>MY</strong> SKILLS</h5>
												<p>UI Design</p>
												<p>Clean and Modern Web Design</p>
												<p>PHP and MySQL Programming</p>
												<p>Vector Design</p>
											</div>
										</div><!-- End div .row -->
									</div><!-- End div .user-profile-content -->
								</div><!-- End div .tab-pane -->
								<!-- End Tab about -->
								
								
								<!-- Tab user activities -->
								<div class="tab-pane animated fadeInRight" id="user-activities">
									<div class="scroll-user-widget">
										<ul class="media-list">
											<li class="media">
												<a href="#fakelink">
												<p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
												<br /><i>2 minutes ago</i></p>
												</a>
											</li>
											<li class="media">
												<a href="#fakelink">
												<p><strong>John Doe</strong> Created an photo album  <strong>&#34;Indonesia Tourism&#34;</strong>
												<br /><i>8 minutes ago</i></p>
												</a>
											</li>
											<li class="media">
												<a href="#fakelink">
												<p><strong>Annisa</strong> Posted an article  <strong>&#34;Yogyakarta never ending Asia&#34;</strong>
												<br /><i>an hour ago</i></p>
												</a>
											</li>
											<li class="media">
												<a href="#fakelink">
												<p><strong>Ari Rusmanto</strong> Added 3 products
												<br /><i>3 hours ago</i></p>
												</a>
											</li>
											<li class="media">
												<a href="#fakelink">
												<p><strong>Hana Sartika</strong> Send you a message  <strong>&#34;Lorem ipsum dolor...&#34;</strong>
												<br /><i>12 hours ago</i></p>
												</a>
											</li>
											<li class="media">
												<a href="#fakelink">
												<p><strong>Johnny Depp</strong> Updated his avatar
												<br /><i>Yesterday</i></p>
												</a>
											</li>
											<li class="media">
												<a href="#fakelink">
												<p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
												<br /><i>2 minutes ago</i></p>
												</a>
											</li>
											<li class="media">
												<a href="#fakelink">
												<p><strong>John Doe</strong> Created an photo album  <strong>&#34;Indonesia Tourism&#34;</strong>
												<br /><i>8 minutes ago</i></p>
												</a>
											</li>
											<li class="media">
												<a href="#fakelink">
												<p><strong>Annisa</strong> Posted an article  <strong>&#34;Yogyakarta never ending Asia&#34;</strong>
												<br /><i>an hour ago</i></p>
												</a>
											</li>
											<li class="media">
												<a href="#fakelink">
												<p><strong>Ari Rusmanto</strong> Added 3 products
												<br /><i>3 hours ago</i></p>
												</a>
											</li>
											<li class="media">
												<a href="#fakelink">
												<p><strong>Hana Sartika</strong> Send you a message  <strong>&#34;Lorem ipsum dolor...&#34;</strong>
												<br /><i>12 hours ago</i></p>
												</a>
											</li>
											<li class="media">
												<a href="#fakelink">
												<p><strong>Johnny Depp</strong> Updated his avatar
												<br /><i>Yesterday</i></p>
												</a>
											</li>
										</ul>
									</div><!-- End div .scroll-user-widget -->
								</div><!-- End div .tab-pane -->
								<!-- End Tab user activities -->
								
								<!-- Tab user messages -->
								<div class="tab-pane animated fadeInRight" id="mymessage">
									<div class="scroll-user-widget">
									<form role="form" class="post-to-timeline">
												<textarea class="form-control" style="height: 70px;" placeholder="Sms göndermek için birşeyler yazın..."></textarea>
												<div class="row">
												<div class="col-sm-6">
													
												</div>
												<div class="col-sm-6 text-right"><button type="submit" class="btn btn-primary">Gönder</button></div>
												</div>
											</form>
										<ul class="media-list">
										  <li class="media">
											<a class="pull-left" href="#fakelink">
											  <img class="media-object" src="assets/img/avatar/2.jpg" alt="Avatar">
											</a>
											<div class="media-body">
											  <h4 class="media-heading"><a href="#fakelink">John Doe</a> <small>Just now</small></h4>
											  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
											</div>
										  </li>
										  <li class="media">
											<a class="pull-left" href="#fakelink">
											  <img class="media-object" src="assets/img/avatar/1.jpg" alt="Avatar">
											</a>
											<div class="media-body">
											  <h4 class="media-heading"><a href="#fakelink">Annisa</a> <small>Yesterday at 04:00 AM</small></h4>
											  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
											</div>
										  </li>
										  <li class="media">
											<a class="pull-left" href="#fakelink">
											  <img class="media-object" src="assets/img/avatar/5.jpg" alt="Avatar">
											</a>
											<div class="media-body">
											  <h4 class="media-heading"><a href="#fakelink">Rusmanovski</a> <small>January 17, 2014 05:35 PM</small></h4>
											  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
											</div>
										  </li>
										  <li class="media">
											<a class="pull-left" href="#fakelink">
											  <img class="media-object" src="assets/img/avatar/4.jpg" alt="Avatar">
											</a>
											<div class="media-body">
											  <h4 class="media-heading"><a href="#fakelink">Ari Rusmanto</a> <small>January 17, 2014 05:35 PM</small></h4>
											  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
											</div>
										  </li>
										  <li class="media">
											<a class="pull-left" href="#fakelink">
											  <img class="media-object" src="assets/img/avatar/3.jpg" alt="Avatar">
											</a>
											<div class="media-body">
											  <h4 class="media-heading"><a href="#fakelink">Jenny Doe</a> <small>January 17, 2014 05:35 PM</small></h4>
											  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
											</div>
										  </li>
										  <li class="media">
											<a class="pull-left" href="#fakelink">
											  <img class="media-object" src="assets/img/avatar/2.jpg" alt="Avatar">
											</a>
											<div class="media-body">
											  <h4 class="media-heading"><a href="#fakelink">John Doe</a> <small>Just now</small></h4>
											  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
											</div>
										  </li>
										  <li class="media">
											<a class="pull-left" href="#fakelink">
											  <img class="media-object" src="assets/img/avatar/1.jpg" alt="Avatar">
											</a>
											<div class="media-body">
											  <h4 class="media-heading"><a href="#fakelink">Annisa</a> <small>Yesterday at 04:00 AM</small></h4>
											  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
											</div>
										  </li>
										  <li class="media">
											<a class="pull-left" href="#fakelink">
											  <img class="media-object" src="assets/img/avatar/5.jpg" alt="Avatar">
											</a>
											<div class="media-body">
											  <h4 class="media-heading"><a href="#fakelink">Rusmanovski</a> <small>January 17, 2014 05:35 PM</small></h4>
											  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
											</div>
										  </li>
										  <li class="media">
											<a class="pull-left" href="#fakelink">
											  <img class="media-object" src="assets/img/avatar/4.jpg" alt="Avatar">
											</a>
											<div class="media-body">
											  <h4 class="media-heading"><a href="#fakelink">Ari Rusmanto</a> <small>January 17, 2014 05:35 PM</small></h4>
											  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
											</div>
										  </li>
										  <li class="media">
											<a class="pull-left" href="#fakelink">
											  <img class="media-object" src="assets/img/avatar/3.jpg" alt="Avatar">
											</a>
											<div class="media-body">
											  <h4 class="media-heading"><a href="#fakelink">Jenny Doe</a> <small>January 17, 2014 05:35 PM</small></h4>
											  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
											</div>
										  </li>
										</ul>
									</div><!-- End div .scroll-user-widget -->
								</div><!-- End div .tab-pane -->
								<!-- End Tab user messages -->
							</div><!-- End div .tab-content -->
						</div><!-- End div .box-info -->
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
	</body>
</html>
<?php }?>
<?php
if(!isset($_SESSION["login"]))
	echo '<meta http-equiv="refresh" content="0; url=login.php">';	
?>