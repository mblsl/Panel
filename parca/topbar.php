<?php $fullmod = false;?>
<div id="wrapper">
<div class="topbar">
    <div class="topbar-left">
        <div class="logo">
            <h1><a href="#"><img src="assets/img/logo.png" alt="Logo"></a></h1>
        </div>
        <button class="button-menu-mobile open-left">
        <i class="fa fa-bars"></i>
        </button>
    </div>


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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Türkçe (TR) <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">İngilizce (US)</a></li>
                            <li><a href="#">Rusça</a></li>
                            <li><a href="#">Almanca</a></li>
                            <li><a href="#">Arapça</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right top-navbar">
                    <li class="dropdown iconify hide-phone">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span class="label label-danger absolute">4</span></a>
                        <ul class="dropdown-menu dropdown-message">
                            <li class="dropdown-header notif-header"><i class="icon-bell-2"></i> Bildirimler<a class="pull-right" href="#"></a></li>
                            <li class="unread">
                                <a href="#">
                                    <p><strong>Canan SARIÇAM</strong> Yeni Ürün Ekledi <strong>Elements NOURISHING CREAM 40 ml</strong>
                                        <br /><i>2 saat önce</i>
                                    </p>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <p><strong>Canan SARIÇAM</strong> Randevu Sonlandırdı
                                        <br /><i>Dün</i>
                                    </p>
                                </a>
                            </li>
                            <li class="dropdown-footer">
                                <div class="btn-group btn-group-justified">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-primary"><i class="icon-ccw-1"></i> Yenile</a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-danger"><i class="icon-trash-3"></i> Tümünü Sil</a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-success">Tümünü Gör <i class="icon-right-open-2"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown iconify hide-phone">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="label label-danger absolute">3</span></a>
                        <ul class="dropdown-menu dropdown-message">
                            <li class="dropdown-header notif-header"><i class="icon-mail-2"></i>Yeni Başvurular</li>
                            <li class="unread">
                                <a href="#" class="clearfix">
                                   
                                    <strong>Muhammet BİLSEL</strong><i class="pull-right msg-time">5 Dakika Önce</i><br />
                                    <p>Otomasyonun Bu Kısmı Aktif Değil!!</p>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#" class="clearfix">
                                   
                                    <strong>Halil AKKAYA</strong><i class="pull-right msg-time">6 Daika Önce</i><br />
                                    <p>Vatana Millete Hayırlı Olsun...</p>
                                </a>
                            </li>
                       
                            <li class="dropdown-footer"><div class=""><a href="#" class="btn btn-sm btn-block btn-primary"><i class="fa fa-share"></i> Tüm Başvuruları Gör</a></div></li>
                        </ul>
                    </li>
                    <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen();"><i class="icon-resize-full-2"></i></a></li>
                    <li class="dropdown topbar-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="images/users/user-35.jpg"></span><strong><?php echo $_SESSION["kullanici"];?></strong> <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Şifre Değiştir</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-help-2"></i> Yardım</a></li>
                            <li><a class="md-trigger" data-modal="logout-modal" href="cikis.php"><i class="icon-logout-1"></i>Çıkış</a></li>
                        </ul>
						<li class="right-opener">
                        <a href="javascript:;" class="open-right"><i class="fa fa-angle-double-left"></i><i class="fa fa-angle-double-right"></i></a>
                    </li>
                    </li>
                    
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>