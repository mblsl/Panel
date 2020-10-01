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
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-collapse2">
                <ul class="nav navbar-nav hidden-xs">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th"></i></a>
                        <div class="dropdown-menu grid-dropdown">
                            <div class="row stacked">
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="notes-app" data-status="active"><i class="icon-edit"></i>Notes</a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="todo-app" data-status="active"><i class="icon-check"></i>Todo List</a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="calc" data-status="inactive"><i class="fa fa-calculator"></i>Calculator</a>
                                </div>
                            </div>
                            <div class="row stacked">
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="weather-widget" data-status="active"><i class="icon-cloud-3"></i>Weather</a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="calendar-widget2" data-status="active"><i class="icon-calendar"></i>Calendar</a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="stock-app" data-status="inactive"><i class="icon-chart-line"></i>Stocks</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </li>
                    <li class="language_bar dropdown hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">English (US) <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">German</a></li>
                            <li><a href="#">French</a></li>
                            <li><a href="#">Italian</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right top-navbar">
                    <li class="dropdown iconify hide-phone">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span class="label label-danger absolute">4</span></a>
                        <ul class="dropdown-menu dropdown-message">
                            <li class="dropdown-header notif-header"><i class="icon-bell-2"></i> New Notifications<a class="pull-right" href="#"><i class="fa fa-cog"></i></a></li>
                            <li class="unread">
                                <a href="#">
                                    <p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                                        <br /><i>2 minutes ago</i>
                                    </p>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <p><strong>John Doe</strong> Created an photo album  <strong>&#34;Fappening&#34;</strong>
                                        <br /><i>8 minutes ago</i>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p><strong>John Malkovich</strong> Added 3 products
                                        <br /><i>3 hours ago</i>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p><strong>Sonata Arctica</strong> Send you a message <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                                        <br /><i>12 hours ago</i>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p><strong>Johnny Depp</strong> Updated his avatar
                                        <br /><i>Yesterday</i>
                                    </p>
                                </a>
                            </li>
                            <li class="dropdown-footer">
                                <div class="btn-group btn-group-justified">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-primary"><i class="icon-ccw-1"></i> Refresh</a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-danger"><i class="icon-trash-3"></i> Clear All</a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-success">See All <i class="icon-right-open-2"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown iconify hide-phone">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="label label-danger absolute">3</span></a>
                        <ul class="dropdown-menu dropdown-message">
                            <li class="dropdown-header notif-header"><i class="icon-mail-2"></i> New Messages</li>
                            <li class="unread">
                                <a href="#" class="clearfix">
                                    <img src="images/users/chat/2.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                    <strong>John Doe</strong><i class="pull-right msg-time">5 minutes ago</i><br />
                                    <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#" class="clearfix">
                                    <img src="images/users/chat/1.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                    <strong>Sandra Kraken</strong><i class="pull-right msg-time">22 minutes ago</i><br />
                                    <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="clearfix">
                                    <img src="images/users/chat/3.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                    <strong>Zoey Lombardo</strong><i class="pull-right msg-time">41 minutes ago</i><br />
                                    <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                </a>
                            </li>
                            <li class="dropdown-footer"><div class=""><a href="#" class="btn btn-sm btn-block btn-primary"><i class="fa fa-share"></i> See all messages</a></div></li>
                        </ul>
                    </li>
                    <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                    <li class="dropdown topbar-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="images/users/user-35.jpg"></span> Muhammet <strong>BİLSEL</strong> <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">Change Password</a></li>
                            <li><a href="#">Account Setting</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-help-2"></i> Help</a></li>
                            <li><a href="lockscreen.html"><i class="icon-lock-1"></i> Lock me</a></li>
                            <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li class="right-opener">
                        <a href="javascript:;" class="open-right"><i class="fa fa-angle-double-left"></i><i class="fa fa-angle-double-right"></i></a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->
		    <!-- Left Sidebar Start -->
       <?php include("parca/solmen.php"); ?>
        <!-- Left Sidebar End -->		    <!-- Right Sidebar Start -->
    <div class="right side-menu">
    	<ul class="nav nav-tabs nav-justified" id="right-tabs">
		  <li class="active"><a href="#feed" data-toggle="tab" title="Live Feed"><i class="icon-rss-2"></i></a></li>
		  <li><a href="#connect" data-toggle="tab" title="Chat"><i class="icon-chat"></i></a></li>
		  <li><a href="#settings" data-toggle="tab" title="Preferences"><i class="icon-wrench"></i></a></li>
		</ul>
		<div class="clearfix"></div>
		<div class="tab-content">
			<div class="tab-pane active" id="feed">
				<div class="tab-inner slimscroller">
					<div class="search-right">
					    <input type="text" class="form-control" placeholder="Search">
					</div>
					<div class="right-toolbar">
						<a href="javascript:;" class="pull-right">Settings <i class="icon-cog"></i></a>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
					<div class="panel-group" id="collapse">
					  <div class="panel panel-default">
					    <div class="panel-heading bg-orange-1">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#rnotifications">
					          <i class="icon-bell-2"></i> Notifications
					          <span class="label bg-darkblue-1 pull-right">4</span>
					        </a>
					      </h4>
					    </div>
					    <div id="rnotifications" class="panel-collapse collapse in">
					      <div class="panel-body">
					      	<ul class="list-unstyled" id="notification-list">
					      		<li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-video"></i></span> 1 Video Uploaded <span class="muted">12 minutes ago</span></a></li>
					      		<li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-users-1"></i></span> 3 Users signed up <span class="muted">16 minutes ago</span></a></li>
					      		<li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-picture-1"></i></span> 1 Video Uploaded <span class="muted">12 minutes ago</span></a></li>
					      		<li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-hourglass-1"></i></span> Deadline for 1 project <span class="muted">12 minutes ago</span></a></li>
					      	</ul>
					      	<a class="btn btn-block btn-sm btn-warning">See all notifications</a>
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading bg-green-3">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#remails">
					          <i class="icon-mail"></i> E-mails
					          <span class="label bg-darkblue-1 pull-right">3</span>
					        </a>
					      </h4>
					    </div>
					    <div id="remails" class="panel-collapse collapse in">
					      <div class="panel-body">
					      	<ul class="list-unstyled" id="inbox-list">
					      		<li><a href="javascript:;"><span class="sender"><i class="icon-star text-yellow-2"></i> Kim Wilde</span> <span class="datetime">6 mins ago</span>
					      			<span class="title">You keep me hangin on</span>
					      			<span class="content">Where are you? I am waiting for 3 hours in the restaurant. I ate 3 hamburgers.</span>
					      		</a></li>
					      		<li><a href="javascript:;"><span class="sender">Tyler Durden</span> <span class="datetime">13 hours ago</span>
					      			<span class="title">Buy some soap from market before</span>
					      			<span class="content">We are crowded here. We need some more soap at home. Buy some before you come home.</span>
					      		</a></li>
					      		<li><a href="javascript:;"><span class="sender">John Bonomo</span> <span class="datetime">Yesterday</span>
					      			<span class="title">Late delivery</span>
					      			<span class="content">Hello, I ordered 15 box of viagra for a friend of mine but he still hasn't receive them.</span>
					      		</a></li>
					      	</ul>
					      	<a class="btn btn-block btn-sm btn-primary">Go to inbox</a>
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading bg-blue-1">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#rupdates">
					          <i class="icon-signal-2"></i> Updates
					          <span class="label bg-darkblue-1 pull-right">5</span>
					        </a>
					      </h4>
					    </div>
					    <div id="rupdates" class="panel-collapse collapse in">
					      <div class="panel-body">
					      	<ul class="list-unstyled" id="updates-list">
					      		<li><a href="javascript:;"><span class="icon-wrapper bg-green-1"><i class="icon-comment-1"></i></span> <b>David Guetta</b> came online <abbr title="15 seconds ago">just now</abbr>.</a></li>
					      		<li><a href="javascript:;"><span class="icon-wrapper bg-red-1"><i class="icon-user-3"></i></span> <b>Katy Perry</b> updated her profile <abbr title="4 mins ago">4 mins ago</abbr>.</a></li>
					      		<li><a href="javascript:;"><span class="icon-wrapper bg-blue-1"><i class="icon-twitter-2"></i></span> <b>4 tweets posted</b> with cronjob <abbr title="22 mins ago">22 mins ago</abbr>.</a></li>
					      		<li><a href="javascript:;"><span class="icon-wrapper bg-orange-3"><i class="icon-water"></i></span> <b>Adele</b> set fire to the rain <abbr title="43 mins ago">43 mins ago</abbr>.</a></li>
					      		<li><a href="javascript:;"><span class="icon-wrapper bg-pink-2"><i class="icon-heart-broken"></i></span> <b>Taylor Swift</b> learned that you are trouble <abbr title="3 hours ago">3 days ago</abbr>.</a></li>
					      	</ul>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="connect">
				<div class="tab-inner slimscroller">
					<div class="search-right">
					    <input type="text" class="form-control" placeholder="Search">
					</div>	
					<div class="panel-group" id="collapse">
					  <div class="panel panel-default" id="chat-panel">
					    <div class="panel-heading bg-darkblue-2">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#chat-coll">
					          <i class="icon-briefcase-1"></i> Colleagues
					          <span class="label bg-darkblue-1 pull-right">14</span>
					        </a>
					      </h4>
					    </div>
					    <div id="chat-coll" class="panel-collapse collapse in">
					      <div class="panel-body">
					      	<ul class="list-unstyled" id="chat-list">
					      		<li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/1.jpg"></span> <span class="chat-user-name">Dorothy Simons</span><span class="chat-user-msg">I wish I was a bird in the sky</span></a></li>
					      		<li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/2.jpg"></span> <span class="chat-user-name">John Malkovich</span><span class="chat-user-msg">You were the traitor</span></a></li>
					      		<li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/3.jpg"></span> <span class="chat-user-name">Jessica Simons</span><span class="chat-user-msg">Where is my mind</span></a></li>
					      		<li><a href="javascript:;" class="away"><span class="chat-user-avatar"><img src="images/users/chat/4.jpg"></span> <span class="chat-user-name">Jack Stallman</span><span class="chat-user-msg">Away since 13:32</span></a></li>
					      		<li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images/users/chat/5.jpg"></span> <span class="chat-user-name">Neil Armstrong</span><span class="chat-user-msg" title="I am flying to the moon and back">I am flying to the moon and back</span></a></li>
					      		<li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images/users/chat/6.jpg"></span> <span class="chat-user-name">Hollywood Studios</span><span class="chat-user-msg">Yes he definitely is!</span></a></li>
					      	</ul>
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default" id="chat-panel">
					    <div class="panel-heading bg-darkblue-2">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
					          <i class="icon-heart-3"></i> Friends
					          <span class="label bg-darkblue-1 pull-right">3</span>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseTwo" class="panel-collapse collapse in">
					      <div class="panel-body">
					      	<ul class="list-unstyled" id="chat-list">
					      		<li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/1.jpg"></span> <span class="chat-user-name">Dorothy Simons</span><span class="chat-user-msg">I wish I was a bird in the sky</span></a></li>
					      		<li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/2.jpg"></span> <span class="chat-user-name">John Malkovich</span><span class="chat-user-msg">You were the traitor</span></a></li>
					      		<li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/3.jpg"></span> <span class="chat-user-name">Jessica Simons</span><span class="chat-user-msg" title="Eminem - The Monster ft. Rihanna"><i class="icon-play"></i> Eminem - The Monster ft. Rihanna</span></a></li>
					      		<li><a href="javascript:;" class="away"><span class="chat-user-avatar"><img src="images/users/chat/4.jpg"></span> <span class="chat-user-name">Jack Stallman</span><span class="chat-user-msg">Away since 13:32</span></a></li>
					      		<li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images/users/chat/5.jpg"></span> <span class="chat-user-name">Neil Armstrong</span><span class="chat-user-msg" title="I am flying to the moon and back">I am flying to the moon and back</span></a></li>
					      		<li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images/users/chat/6.jpg"></span> <span class="chat-user-name">Hollywood Studios</span><span class="chat-user-msg">Yes he definitely is!</span></a></li>
					      	</ul>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>

			<div class="tab-pane" id="settings">
				<div class="tab-inner slimscroller">
					<div class="col-sm-12">
						<h3>Preferences</h3>
						<div class="row">
							<div class="col-xs-8">
								Live data updates
							</div>
							<div class="col-xs-4">
								<input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked />
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8">
								Live feeds
							</div>
							<div class="col-xs-4">
								<input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked />
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8">
								Sync data to cloud
							</div>
							<div class="col-xs-4">
								<input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked />
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8">
								Keep activity record
							</div>
							<div class="col-xs-4">
								<input type="checkbox" class="ios-switch ios-switch-danger ios-switch-sm" checked />
							</div>
						</div>
						<h4>Other Settings</h4>
						<div class="row">
							<div class="col-xs-12">
								<label class="checkboxw"><input type="checkbox" checked> Autosave settings</label>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<label class="checkboxw"><input type="checkbox"> Always online</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    <!-- Right Sidebar End -->		
		<!-- Form Başlangıcı -->
        <div class="content-page">
			
            <div class="content">
       			<div class="page-heading">
            		<form name="musterikayit" id="musterikayit" method="post" action="rnks.php">
                    <div class="widget">
							<div class="widget-header transparent">
								<h2><strong>Müşteri Hizmet Ekleme Formu</strong></h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content padding">								
								<div class="form-group" id="adi1">								  
									<label>Adı</label>
									<input type="text" id="adi" class="form-control" name="adi">
								  </div>
                                    <div class="form-group" id="soyadi1">
									<label>Soyadı</label>
									<input type="text" id="soyadi" class="form-control" name="soyadi">
								  </div>
								  <div class="form-group" id="telno1">
									<label>Telefon Numarası</label>
									<input type="text" class="form-control" onkeypress="return sadeceSayi(event)"name="telno" id="telno" maxlength="11">
								  </div>
								 
								  
                              <!--   <div class="form-group" id="ktarih">
							<label>Kayıt Tarihi</label>
							<div class="form-group">
							  <input name="k_tarih" id="k_tarih"type="text" maxlength="10" class="form-control datepicker-input" data-mask="9999-99-99" placeholder="Yıl-Ay-Gün" readonly>
							</div>	</div> -->
									</div>
                                    <div class="col-md-8">
                                        <div style="paading-left:15px;">
                                      <!-- <button name="kaydet" type="submit" class="btn btn-green-3">Kaydet</button>  -->
                                      <button name="sorgula" type="submit" class="btn btn-primary">Sorgula</button>
									  </div>
                                    
                                    
                                </div>
							</div>													
							<?php
							if(isset($_POST["sorgula"]))
							{$_SESSION["mguncel"] = "1";}
							if(isset($_SESSION["mguncel"]))
							{								
							?>                            
						<div class="widget">
							<div class="widget-header transparent">
								<h2><strong>Müşteri Kayıt Tablosu</strong></h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content">
								<div class="data-table-toolbar">
									<div class="row">
										<div class="col-md-4">
											<form role="form">
											<input type="text" class="form-control" placeholder="Ara..">
											</form>
                                            <script>
											var id = 0;																														
											</script>
                                            <?php
											$aktarma = false;																				
											 if(isset($_POST["mu"]) && !isset($_POST["kaydet"]))
											 {
													
													$adi = htmlspecialchars($_POST["adi"]);
													$soyadi = htmlspecialchars($_POST["soyadi"]);
													$telno = htmlspecialchars($_POST["telno"]);
													$adres = htmlspecialchars($_POST["adres"]);
													$mail = htmlspecialchars($_POST["mail"]);
													$ktarih = htmlspecialchars($_POST["k_tarih"]);	
																					 
													if($adi!="" && $soyadi!="" && $telno!="" && $ktarih!="")
													{
															$idlermu = array();								
															if($_POST["mu"]=="")
															{
																echo '<script>alert("Önce Seçim Yapmalısınız...");</script>';
															}
															else
															{
																if(isset($_POST["mguncelle"])) 
																{														
																	$hdeger = explode("/", $_POST["mu"]);
																	for($y=0; $y<10; $y++)
																	{
																		$hisaret = explode("*", $hdeger[$y]);
																		if(strstr($hdeger[$y],"+"))
																		{
																			for($z=1; $z<=$hisaret[0]; $z++)
																			{
																				if($hisaret[0]==$z)
																				{	
																					$idlermu[] = htmlentities($hisaret[0]);	
																				}
																			}
																		}															  										
																	}
																	if(count($idlermu)<2)	
																	{															
																		for($y=0; $y<10; $y++)
																		{															
																			$hisaret2 = explode("*", $hdeger[$y]);															
																		}																		
																		// Veritabanı İşlemleri	
																		if(strlen($telno)<11)
																		{
																			echo '<script type="text/javascript">$(function(){$("#telno1").attr("class","form-group has-error");$("#telno").attr("placeholder","Telefon Numarası 11 Karakter Olmalıdır..!");});</script>';	
																		}										
																		else
																		{						
																			include("baglanti.php");																															
																			$gncm = $vt->query("UPDATE musteriler SET Adi='$adi',Soyadi='$soyadi',B_Tarih='$ktarih',Mail='$mail',Adres='$adres',Tel='$telno' WHERE Mus_ID='$idlermu[0]'");
																			if($gncm)
																			{
																				echo '<script>alert("Güncelleme İşlemi Tamamlandı...");</script>';			
																			}
																			mysqli_close($vt);
																		
																		}
																	}																	
																}
																else
																	echo '<script>alert("Güncelleme İşlemleri İçin Tek Bir Seçim Yapabilirsiniz");</script>';																	
															}															
														}
														else
													 	{
															if(isset($_POST["mguncelle"]))
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
														if(isset($_POST["sil"]))
														{
															if($_POST["mu"]=="")
															{
																echo '<script>alert("Önce Seçim Yapmalısınız...");</script>';
															}
															else
															{
																$hdeger = explode("/", $_POST["mu"]);
																$silmesaj = 0;
																for($y=0; $y<10; $y++)
																{															
																	$hisaret1 = explode("*", $hdeger[$y]);	
																					
																	if(strstr($hdeger[$y],"+"))
																	{															
																		for($z=1; $z<=htmlentities($hisaret1[0]); $z++)
																		{
																			if(htmlentities($hisaret1[0])==$z)
																			{																																																					
																				include("baglanti.php");																															
																				$silm = $vt->query("UPDATE musteriler SET Durum='1' WHERE Mus_ID='$z'");
																				if($silm)
																				{
																					if($silmesaj==0)
																					{
																						echo '<script>alert("Silme İşlemi Tamamlandı...");</script>';
																						$silmesaj++;
																					}	
																				}
																				mysqli_close($vt);
																			}
																		}
																	}	
																}
															}
														}?>                          
                                            <?php }?>
										</div>
										<div class="col-md-8">
											<div class="toolbar-btn-action">
												<button name="sil" type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Sil</button>
												<button name="mguncelle" type="submit" class="btn btn-primary"><i class="fa fa-refresh"></i> Güncelle</button>
											</div>
										</div>
									</div>
								</div>
								<script>									
								$("body").on("click","#mguncelle",function(){ 
									$("#musterikayit").submit();
								});										
								</script>								
								<div class="table-responsive">
									<table class="table table-hover table-striped">
										<thead>
											<tr>
												<th>No</th>
												<th style="width: 30px"></th>
												<th>Adı</th>
												<th>Soyadı</th>
												<th>Başlama Tarihi</th>
												<th>Email</th>
                                                <th>Telefon</th>
												<th>Adres</th>
                                                <th>Aktar</th>
												
											</tr>
										</thead>
										
										<tbody>
											<tr>
                                            <script>var idler = new Array();</script>   
                                            
                                            
                                            <?php
												function fonk() {
													include("baglanti.php");											
													$sira=1;																																												
													$sorgu = $vt->query('select * from musteriler where Durum="0"');						
													while($musteri = mysqli_fetch_assoc($sorgu)) { 
													if($sira<11)
													{
												   		
												   ?>
												   
												   <script>
												   $('#m<?php echo $musteri["Mus_ID"];?>').iCheck('uncheck');
												   </script>
												  <?php 
												}}mysqli_close($vt);$sira++;}
												 ?>                             		
											<?php
											include("baglanti.php");											
											$sira=1;																																												
											$sorgu = $vt->query('select * from musteriler where Durum="0"');						
											while($musteri = mysqli_fetch_assoc($sorgu)) { 
											if($sira<11)
											{
											?>	
                                				<script>
												idler[<?php echo $sira-1;?>]='<?php echo $musteri["Mus_ID"].'*-';?>';
												</script>	
												<td><?php echo $sira;$sira++;?></td>
                                                <td><a href="#" id="<?php echo'ma'.$musteri["Mus_ID"];?>"><input type="checkbox" id="<?php echo'm'.$musteri["Mus_ID"];?>" name="<?php echo'm'.$musteri["Mus_ID"];?>"/></td>
                                                <td><strong><div id='madi<?php echo $musteri["Mus_ID"];?>'><?php echo $musteri["Adi"];?></div></strong></td>
												<td><div id='msoyadi<?php echo $musteri["Mus_ID"];?>'><?php echo $musteri["Soyadi"];?></div></td>
                                                <td><div id='mbtarih<?php echo $musteri["Mus_ID"];?>'><?php echo $musteri["B_Tarih"];?></div></td>
                                                <td><a href="mailto:#"><div id='mmail<?php echo $musteri["Mus_ID"];?>'><?php echo $musteri["Mail"];?></div></a></td>
                                                <td><div id='mtel<?php echo $musteri["Mus_ID"];?>'><?php echo $musteri["Tel"];?></div></td>
												<td><div id='madres<?php echo $musteri["Mus_ID"];?>'> <?php echo $musteri["Adres"];?></div></td>
                                                <td><a id="akt<?php echo $musteri["Mus_ID"];?>" href='#'><h3><i class="icon-reply"></i></h3></a></td>	
												</tr> 
                                                
                                                 
                                                <script>
												
												// CheckBox Tek Seçim Fonksiyonu Başlangıç
												
												$('#ma<?php echo $musteri["Mus_ID"];?>').on('ifClicked', function (ev) 
												{
													//$(ev.target).click()																																						
													for(var d=0; d<10; d++)
													{
														var sp = idler[d].split("*");
														$('#m'+sp[0]).iCheck('uncheck');															
													}														
													$('#m<?php echo $musteri["Mus_ID"];?>').iCheck('check');														
													
												});
												
												// CheckBox Tek Seçim Fonksiyonu Bitiş
												
												// Aktarma Linki Fonksiyonu Başlangıç
												$("body").on("click","#akt<?php echo $musteri["Mus_ID"];?>",function()
												{ 
													if($('#m<?php echo $musteri["Mus_ID"];?>').prop("checked")==true)
													{
														for(var c=0; c<10; c++)
														{
															var sp = idler[c].split("*");
															$('#m'+sp[0]).iCheck('uncheck');															
														}	
														$('#m<?php echo $musteri["Mus_ID"];?>').iCheck('check');
														$("#adi").val($("#madi<?php echo $musteri["Mus_ID"];?>").text());
														$("#soyadi").val($("#msoyadi<?php echo $musteri["Mus_ID"];?>").text());	
														$("#k_tarih").val($("#mbtarih<?php echo $musteri["Mus_ID"];?>").text());
														$("#mail").val($("#mmail<?php echo $musteri["Mus_ID"];?>").text());
														$("#adres").val($("#madres<?php echo $musteri["Mus_ID"];?>").text());
														$("#telno").val($("#mtel<?php echo $musteri["Mus_ID"];?>").text());
														<?php $aktarma=true;?>
													}
													else
													{
														for(var c=0; c<10; c++)
														{
															var sp = idler[c].split("*");
															$('#m'+sp[0]).iCheck('uncheck');															
														}	
														$('#m<?php echo $musteri["Mus_ID"];?>').iCheck('check');
														$("#adi").val($("#madi<?php echo $musteri["Mus_ID"];?>").text());
														$("#soyadi").val($("#msoyadi<?php echo $musteri["Mus_ID"];?>").text());	
														$("#k_tarih").val($("#mbtarih<?php echo $musteri["Mus_ID"];?>").text());
														$("#mail").val($("#mmail<?php echo $musteri["Mus_ID"];?>").text());
														$("#adres").val($("#madres<?php echo $musteri["Mus_ID"];?>").text());
														$("#telno").val($("#mtel<?php echo $musteri["Mus_ID"];?>").text());	
														<?php $aktarma=true;?>
													}
												});	
												
												// Aktarma Linki Fonksiyonu Bitiş											
												</script>                                              
										  <?php }}mysqli_close($vt);$sira++;?>	                                           
                                            
                                            <?php																						
											include("baglanti.php");
											$idsira=0;
											$sorgu2 = $vt->query('select * from musteriler where Durum="0"');						
											while($musteri2 = mysqli_fetch_assoc($sorgu2)) {
											if($idsira<10)
											{
											$musid = $musteri2["Mus_ID"];
											?>
                                           
                                           <script>											  							
																						
																		 											
											$('#m<?php echo $musid;?>').on('ifChanged', function(){	
												if($('#m<?php echo $musid;?>').prop("checked"))
												{
													if(idler[<?php echo $idsira;?>]=="<?php echo $musid;?>*+")													
													{
														idler[<?php echo $idsira;?>]="<?php echo $musid;?>*-";
														$("#mu").val(idler[0]+"/"+idler[1]+"/"+idler[2]+"/"+idler[3]+"/"+idler[4]+"/"+idler[5]+"/"+idler[6]+"/"+idler[7]+"/"+idler[8]+"/"+idler[9]);
														//alert(idler[0]+"/"+idler[1]+"/"+idler[2]+"/"+idler[3]+"/"+idler[4]+"/"+idler[5]+"/"+idler[6]+"/"+idler[7]+"/"+idler[8]+"/"+idler[9]);
														
													}
													else if(idler[<?php echo $idsira;?>]=="<?php echo $musid;?>*-")	
													{										
														idler[<?php echo $idsira;?>]="<?php echo $musid;?>*+";
														$("#mu").val(idler[0]+"/"+idler[1]+"/"+idler[2]+"/"+idler[3]+"/"+idler[4]+"/"+idler[5]+"/"+idler[6]+"/"+idler[7]+"/"+idler[8]+"/"+idler[9]);
														//alert(idler[0]+"/"+idler[1]+"/"+idler[2]+"/"+idler[3]+"/"+idler[4]+"/"+idler[5]+"/"+idler[6]+"/"+idler[7]+"/"+idler[8]+"/"+idler[9]);
														
													}
												}
												
												<?php $idsira++;?>																							 
											});	
											</script>                                           
                                            <?php }}mysqli_close($vt);?>  
                                            		
                                            <tr><td colspan="9"></td></tr>
										</tbody>
									</table>
								</div>									
								<div class="data-table-toolbar">
									<ul class="pagination">
									  <li class="disabled"><a href="#">&laquo;</a></li>
									  <li class="active"><a href="#">1</a></li>
									  <li><a href="#">2</a></li>
									  <li><a href="#">3</a></li>
									  <li><a href="#">4</a></li>
									  <li><a href="#">5</a></li>
									  <li><a href="#">&raquo;</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="widget"><!-- ödeme seçenekleri-->
						
								  <div class="form-group">
									<label class="col-sm-2 control-label">Ödeme Türü</label>
										<div class="col-sm-10">
											<div class="checkbox">
												<label><input type="checkbox" value="">Kredi Kartı</label>
											
												<label><input type="checkbox" value="">Nakit</label>
											
											
												<label><input type="checkbox" value="">Borçlanma</label>
											</div>
										</div>
									<label class="col-sm-2 control-label">Açıklama</label>
										<div class="col-sm-10">
											<textarea class="summernote"></textarea>
										</div>
									<label class="col-sm-2 control-label">Sonraki Randevu Tarih ve Saati</label>
										<div class="col-sm-3">
											<input type="text" class="form-control datepicker-input" data-mask="9999-99-99" placeholder="yyyy-mm-dd">
											<input type="text" class="form-control" data-mask="99:99:99" placeholder="99:99:99">
										</div>
										</div>
									
						
						</div></form>
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
            	<!-- Page Heading End-->				<div class="row">
					<div class="col-md-12 portlets">
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