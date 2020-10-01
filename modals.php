<?php session_start();?>
<?php 
if(isset($_SESSION["login"]))
{
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modals | Coco - Responsive Bootstrap Admin Template</title>   
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

    </head>
    <body class="fixed-left">
        <!-- Modal Start -->
        	<!-- Modal Task Progress -->	
	
		
	<!-- Modal Logout -->
     <!-- Modal End -->	
		<!-- 
		=================================================================================================
		All modals added here for the demo. You would of course just have one, dynamically created
		=================================================================================================
		-->
		<!-- Modal fade in scale up -->
		<div class="md-modal md-fade-in-scale-up" id="md-fade-in-scale-up">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<p>
					<button class="btn btn-danger md-close">Close me!</button>
					<button class="btn btn-success md-close">Some button</button>
					</p>
				</div>
			</div><!-- End div .md-content -->
		</div><!-- End div .md-modal .md-fade-in-scale-up -->
		<!-- Modal slide in right -->
		<div class="md-modal md-slide-in-right" id="md-slide-in-right">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<p>
					<button class="btn btn-danger md-close">Close me!</button>
					<button class="btn btn-success md-close">Some button</button>
					</p>
				</div>
			</div><!-- End div .md-content -->
		</div><!-- End div .md-modal .md-slide-in-right -->
		<!-- Modal slide from bottom -->
		<div class="md-modal md-slide-from-bottom" id="md-slide-from-bottom">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<p>
					<button class="btn btn-danger md-close">Close me!</button>
					<button class="btn btn-success md-close">Some button</button>
					</p>
				</div>
			</div><!-- End div .md-content -->
		</div><!-- End div .md-modal .md-slide-from-bottom -->
		<!-- Modal newspaper -->
		<div class="md-modal md-newspaper" id="md-newspaper">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<p>
					<button class="btn btn-danger md-close">Close me!</button>
					<button class="btn btn-success md-close">Some button</button>
					</p>
				</div>
			</div><!-- End div .md-content -->
		</div><!-- End div .md-modal .md-newspaper -->
		<!-- Modal fall -->
		<div class="md-modal md-fall" id="md-fall">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<p>
					<button class="btn btn-danger md-close">Close me!</button>
					<button class="btn btn-success md-close">Some button</button>
					</p>
				</div>
			</div><!-- End div .md-content -->
		</div><!-- End div .md-modal .md-fall -->
		<!-- Modal side fall -->
		<div class="md-modal md-side-fall" id="md-side-fall">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<p>
					<button class="btn btn-danger md-close">Close me!</button>
					<button class="btn btn-success md-close">Some button</button>
					</p>
				</div>
			</div><!-- End div .md-content -->
		</div><!-- End div .md-modal .md-side-fall -->
		<!-- Modal slide stick top -->
		<div class="md-modal md-slide-stick-top" id="md-slide-stick-top">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<p>
					<button class="btn btn-danger md-close">Close me!</button>
					<button class="btn btn-success md-close">Some button</button>
					</p>
				</div>
			</div><!-- End div .md-content -->
		</div><!-- End div .md-modal .md-slide-stick-top -->
		<!-- Modal 3d flip horizontal -->
		<div class="md-modal md-3d-flip-horizontal" id="md-3d-flip-horizontal">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<p>
					<button class="btn btn-danger md-close">Close me!</button>
					<button class="btn btn-success md-close">Some button</button>
					</p>
				</div>
			</div><!-- End div .md-content -->
		</div><!-- End div .md-modal .md-3d-flip-horizontal -->
		<!-- Modal 3d flip vertical -->
		<div class="md-modal md-3d-flip-vertical" id="md-3d-flip-vertical">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<p>
					<button class="btn btn-danger md-close">Close me!</button>
					<button class="btn btn-success md-close">Some button</button>
					</p>
				</div>
			</div><!-- End div .md-content -->
		</div><!-- End div .md-modal .md-3d-flip-vertical -->
		<!-- Modal 3d sign -->
		<div class="md-modal md-3d-sign" id="md-3d-sign">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<p>
					<button class="btn btn-danger md-close">Close me!</button>
					<button class="btn btn-success md-close">Some button</button>
					</p>
				</div>
			</div><!-- End div .md-content -->
		</div><!-- End div .md-modal .md-3d-sign -->
		<!-- Modal super scaled -->
		<div class="md-modal md-super-scaled" id="md-super-scaled">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<p>
					<button class="btn btn-danger md-close">Close me!</button>
					<button class="btn btn-success md-close">Some button</button>
					</p>
				</div>
			</div><!-- End div .md-content -->
		</div><!-- End div .md-modal .md-super-scaled -->
		<!-- Modal just me -->
		<div class="md-modal md-just-me" id="md-just-me">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<p>
					<button class="btn btn-danger md-close">Close me!</button>
					<button class="btn btn-success md-close">Some button</button>
					</p>
				</div>
			</div><!-- End div .md-content -->
		</div><!-- End div .md-modal .md-just-me -->
		<!-- Modal 3d slit -->
		<div class="md-modal md-3d-slit" id="md-3d-slit">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<p>
					<button class="btn btn-danger md-close">Close me!</button>
					<button class="btn btn-success md-close">Some button</button>
					</p>
				</div>
			</div><!-- End div .md-content -->
		</div><!-- End div .md-modal .md-3d-slit -->
		<!-- Modal rotate from bottom -->
		<div class="md-modal md-rotate-from-bottom" id="md-rotate-from-bottom">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<p>
					<button class="btn btn-danger md-close">Close me!</button>
					<button class="btn btn-success md-close">Some button</button>
					</p>
				</div>
			</div><!-- End div .md-content -->
		</div><!-- End div .md-modal .md-rotate-from-bottom -->
		<!-- Modal rotate from left -->
		<!-- End div .md-modal .md-rotate-from-left -->
		
	<!-- Begin page -->
	
	<div id="wrapper">
		
<!-- Top Bar Start -->
<
<!-- Top Bar End -->
		    <!-- Left Sidebar Start -->
      
        <!-- Left Sidebar End -->		    <!-- Right Sidebar Start -->
>		
		<!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            					<!-- Page Heading Start -->
				<div class="page-heading">
            		        	
				<div class="row">
					<div class="col-md-12 portlets">
						<div class="widget">
							<div class="widget-header">
								<h2>Super Modals</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content padding">
								<div class="table-responsive">
									<table class="table">
										<tbody>
											<tr><td>Modal Fade In & Scale</td><td><button data-modal="md-fade-in-scale-up" class="btn btn-default btn-sm md-trigger">Fade in &amp; Scale</button></td><td><code>class = "md-trigger" data-modal = "md-fade-in-scale-up"</code></td></tr>
											<tr><td>Modal Slide In (Right)</td><td><button data-modal="md-slide-in-right" class="btn btn-default btn-sm md-trigger">Slide in (right)</button></td><td><code>class = "md-trigger" data-modal = "md-slide-in-right"</code></td></tr>
											<tr><td>Modal Slide In (Button)</td><td><button data-modal="md-slide-from-bottom" class="btn btn-default btn-sm md-trigger">Slide in (bottom)</button></td><td><code>class = "md-trigger" data-modal = "md-slide-from-bottom"</code></td></tr>
											<tr><td>Modal Newspaper</td><td><button data-modal="md-newspaper" class="btn btn-default btn-sm md-trigger">Newspaper</button></td><td><code>class = "md-trigger" data-modal = "md-newspaper"</code></td></tr>
											<tr><td>Modal Fall</td><td><button data-modal="md-fall" class="btn btn-default btn-sm md-trigger">Fall</button></td><td><code>class = "md-trigger" data-modal = "md-fall"</code></td></tr>
											<tr><td>Modal Side Fall</td><td><button data-modal="md-side-fall" class="btn btn-default btn-sm md-trigger">Side Fall</button></td><td><code>class = "md-trigger" data-modal = "md-side-fall"</code></td></tr>
											<tr><td>Modal Sticky Up</td><td><button data-modal="md-slide-stick-top" class="btn btn-default btn-sm md-trigger">Sticky Up</button></td><td><code>class = "md-trigger" data-modal = "md-slide-stick-top"</code></td></tr>
											<tr><td>Modal 3D Flip (Horizontal)</td><td><button data-modal="md-3d-flip-horizontal" class="btn btn-default btn-sm md-trigger">3D Flip (horizontal)</button></td><td><code>class = "md-trigger" data-modal = "md-3d-flip-horizontal"</code></td></tr>
											<tr><td>Modal 3D Flip (Vertical)</td><td><button data-modal="md-3d-flip-vertical" class="btn btn-default btn-sm md-trigger">3D Flip (vertical)</button></td><td><code>class = "md-trigger" data-modal = "md-3d-flip-vertical"</code></td></tr>
											<tr><td>Modal 3D Sign</td><td><button data-modal="md-3d-sign" class="btn btn-default btn-sm md-trigger">3D Sign</button></td><td><code>class = "md-trigger" data-modal = "md-3d-sign"</code></td></tr>
											<tr><td>Modal Super Scaled</td><td><button data-modal="md-super-scaled" class="btn btn-default btn-sm md-trigger">Super Scaled</button></td><td><code>class = "md-trigger" data-modal = "md-super-scaled"</code></td></tr>
											<tr><td>Modal Just Me</td><td><button data-modal="md-just-me" class="btn btn-default btn-sm md-trigger">Just Me</button></td><td><code>class = "md-trigger" data-modal = "md-just-me"</code></td></tr>
											<tr><td>Modal 3D Slit</td><td><button data-modal="md-3d-slit" class="btn btn-default btn-sm md-trigger">3D Slit</button></td><td><code>class = "md-trigger" data-modal = "md-3d-slit"</code></td></tr>
											<tr><td>Modal 3D Rotate Bottom</td><td><button data-modal="md-rotate-from-bottom" class="btn btn-default btn-sm md-trigger">3D Rotate Bottom</button></td><td><code>class = "md-trigger" data-modal = "md-rotate-from-bottom"</code></td></tr>
											<tr><td>Modal 3D Rotate In Left</td><td><button data-modal="md-rotate-from-left" class="btn btn-default btn-sm md-trigger">3D Rotate In Left</button></td><td><code>class = "md-trigger" data-modal = "md-rotate-from-left"</code></td></tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

				            <!-- Footer Start -->
          
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
	

	<script src="assets/libs/nifty-modal/js/classie.js"></script>
	<script src="assets/libs/nifty-modal/js/modalEffects.js"></script>


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