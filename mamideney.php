<?php session_start();?>
<?php $sirasf=5;$sirasf2=5;?>
<?php 
if(isset($_SESSION["login"]))
{
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kampanya Tanımlama Paneli</title>   
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
        <!-- Modal Start -->
        	<!-- Modal Task Progress -->	
	
		
	<!-- Modal Logout -->
	      <!-- Modal End -->	
	
	<!-- Begin page -->
	<div id="wrapper">		
        <!-- Left Sidebar End -->		   
		<!-- Top Bar Start -->
		<?php include("parca/topbar.php"); ?>
		<!-- Top Bar End -->
	    <!-- Left Sidebar Start -->
		<?php include("parca/solmen.php"); ?>
        <!-- Left Sidebar End -->
		<!-- Right Sidebar Start -->
		<?php include("parca/sagmen.php"); ?>		
		<!-- Right Sidebar End -->		
		<!-- Start right content -->
		
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            					<!-- Page Heading Start -->
								<!-- Page Heading End-->				
				<div class="row">
				<form action="" method="post" enctype="multipart/form-data">
					<div class="col-md-12 portlets">
						<div class="widget">
							<div class="widget-header ">
								<h2>Ürün Ekleme Paneli</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content padding">

								<div class="row">
									<div class="col-sm-6">
										
										<div class="form-group" id="mbno">
									<label>Barkod Numarası</label>
									<input type="text" class="form-control" name="BNo" placeholder="Ürün Satışı İçin Gerekli..!">
										</div>
										<div class="form-group" id="muadi">
									<label>Ürün Adı</label>
									<input type="text" class="form-control" name="U_Adi">
										</div>
										<div class="form-group" id="mukodu" >
									<label>Ürün Kodu</label>
									<input type="text" class="form-control" name="U_Kodu">
										</div>
																	<div class="row">
																			<div class="col-sm-6">
																					<div class="form-group" id="mgelisf">
																					<label>Geliş Fiyatı</label>
																					<input type="text" class="form-control" name="G_Fiyat">
																					</div>
																					<div class="form-group" id="mktarih">
																						<label>Kayıt Tarihi</label>
																						<div class="form-group">
																						<input name="K_Tarih" id="K_Tarih" type="text" class="form-control datepicker-input" data-mask="9999-99-99" placeholder="Yıl-Ay-Gün" Readonly>
																						</div>
																					</div>
																			</div>
																			<div class="col-sm-6">
																					<div class="form-group" id="msfiyat">
																					<label>Satış Fiyatı</label>
																					<input type="text" class="form-control" placeholder="Boş Geçildiği Taktirde Cari Hesaplayamazsınız..!" name="S_Fiyat" id="S_Fiyat">
																					</div>
																					<div class="form-group" id="mstarih">
																						<label>Son Tüketim Tarihi</label>																						
																						<input name="S_Tarih" id="S_Tarih" placeholder="Boş Geçildiği Taktirde STT Değerini Sorgulayamazsınız..!" type="text" class="form-control datepicker-input" data-mask="9999-99-99" placeholder="Yıl-Ay-Gün" Readonly>																						
																					</div>
																			</div>
																	</div>
									</div>
												<div class="col-sm-6">
										
																	<div class="row">
																			<div class="col-sm-6">
																				<div class="form-group" id="msadet">
																					<label>Stok Adedi</label>
																					<input type="text" class="form-control" name="S_Adet">
																				</div>
																				<div class="form-group" id="muturu">
																					<label>Ürün Türü</label>																						
																							<select class="form-control" name="U_Turu">
																								<option>Krem</option>
																								<option>Sprey</option>
																								<option>Maske</option>
																								<option>CltBkm Diğer</option>
																							</select>																						
																				</div>
																				<div class="form-group" id="mdepo">
																					<label>Depo Seçiniz</label>																						
																							<select class="form-control" name="Depo">
																								<option>Vitrin</option>
																								<option>Kuru Depo</option>
																								<option>Sarf Depo</option>
																								<option>Soğuk Depo</option>
																							</select>																						
																				</div>
																				<div class="form-group" id="msatis">
																					<label>E-Satış</label>																						
																							<select class="form-control" name="Satis">
																								<option>Panel+Web</option>
																								<option>Panel</option>
																								<option>Web</option>
																								<option>Stok</option>
																							</select>																						
																				</div>
																				<div class="form-group" id="mkdurum">
																					<label>Kampanya</label>																						
																							<select class="form-control" name="K_Durum">
																								<option value="-1">Seçiniz...</option>
																								<option value="1">Geçerli</option>
																								<option value="0">Geçersiz</option>
																							</select>																						
																				</div>
																				
																			</div>
																			<div class="col-sm-6">	
																					
																					<div class="img-wrap">
																						<img src="images/small/img001_small.jpg" title="Image title here">
																					</div>
																					
																				<label></label>
																				<div class="input-group" >
																					<span class="input-group-btn">
																					<button class="btn btn-default" type="button">Seç</button>
																					</span>
																					<input type="file" class="form-control" name="Foto">
																				</div>
																				<label></label>
																				<button class="btn-orange-3 btn-lg btn-block" type="button">Güncelle</button>																				
																				<button class="btn-green-3 btn-lg btn-block" type="submit" name="UKaydet">Kaydet</button>
																				
																			</div>
																	</div>

												</div>
								</div>
                        
							</div>
						</div>
					</div>
					
					</form>					
			
					<?php 
					include("temizlik.php");
					if(isset($_POST["UKaydet"]))
					{
						$Barkod = temizle($_POST["BNo"]);
						$UrunAd = temizle($_POST["U_Adi"]);
						$UrunKod = temizle($_POST["U_Kodu"]);
						$GelisFiyat = temizle($_POST["G_Fiyat"]);
						$SatisFiyat = temizle($_POST["S_Fiyat"]);
						$KayitTarih = temizle($_POST["K_Tarih"]);
						$SonTTarih = temizle($_POST["S_Tarih"]);
						$StokAdedi = temizle($_POST["S_Adet"]);
						$UrunTuru = temizle($_POST["U_Turu"]);
						$Depo = temizle($_POST["Depo"]);
						$Satis = temizle($_POST["Satis"]);
						$KampDurum = temizle($_POST["K_Durum"]);
						$Foto = temizle($_FILES["Foto"]["name"]);
						
						if($UrunAd!="" && $UrunKod!="" && $KayitTarih!="" && $GelisFiyat!="" && $StokAdedi!="")
						{
							
						}
						else
						{
							if($UrunAd=="")
								echo '<script type="text/javascript">$(function(){$("#muadi").attr("class","form-group has-error");});</script>';
							if($UrunKod=="")
								echo '<script type="text/javascript">$(function(){$("#mukodu").attr("class","form-group has-error");});</script>';
							if($KayitTarih=="")
								echo '<script type="text/javascript">$(function(){$("#mktarih").attr("class","form-group has-error");});</script>';
							if($GelisFiyat=="")
								echo '<script type="text/javascript">$(function(){$("#mgelisf").attr("class","form-group has-error");});</script>';
							if($StokAdedi=="")
							{echo '<script type="text/javascript">$(function(){$("#msadet").attr("class","form-group has-error");});</script>';}
							
							//if($Barkod=="")
								echo '<script type="text/javascript">$(function(){$("#mbno").attr("class","form-group has-warning");});</script>';
							//if($SatisFiyat=="")
								echo '<script type="text/javascript">$(function(){$("#msfiyat").attr("class","form-group has-warning");});</script>';
							//if($KampDurum=="")
								echo '<script type="text/javascript">$(function(){$("#mkdurum").attr("class","form-group has-success");});</script>';
							//if($Depo=="")
								echo '<script type="text/javascript">$(function(){$("#mdepo").attr("class","form-group has-success");});</script>';
							//if($SonTTarih=="")
								echo '<script type="text/javascript">$(function(){$("#mstarih").attr("class","form-group has-warning");</script>';
							//if($UrunTuru=="")
								echo '<script type="text/javascript">$(function(){$("#muturu").attr("class","form-group has-success");});</script>';
							//if($Satis=="")
								echo '<script type="text/javascript">$(function(){$("#msatis").attr("class","form-group has-success");});</script>';
						}
						
					}
					?>
					
					<div class="col-md-12">
						<div class="widget">
							<div class="widget-header transparent">
								<h2><strong>Kayıtlı Ürünler</strong></h2>
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
											<input type="text" class="form-control" placeholder="Ara...">
											</form>
										</div>
									</div>
								</div>
									
								<div class="table-responsive">
									<table data-sortable class="table table-hover table-striped">
										<thead>
											<tr>
												<th>Barkod Numarası</th>
												<th>Ürün Resmi</th>
												<th>Ürün İsmi</th>
												<th>Kayıt Tarihi</th>
												<th>Son Tüketim Tarihi</th>
												<th>Satış Fiyatı</th>
												<th>Depo</th>
												<th>Durum</th>
												<th data-sortable="false">Ayar</th>
											</tr>
										</thead>
										
										<tbody>
											<tr>
												<td>12323231378</td>
												<td>
													<div class="img-wrap">
													<img src="images/users/user-100100.jpg" title="Image title here">
													</div>
												</td>
												<td><strong>Cilt Koruma Kremi</strong></td>
												<td>11.12.2018</td>
												<td>11.12.2019</td>
												<td>150 TL</td>
												<td>Vitrin</td>
												<td><span class="label label-success">Stokta</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>12323231378</td>
												<td>
													<div class="img-wrap">
													<img src="images/users/user-100100.jpg" title="Image title here">
													</div>
												</td>
												<td><strong>Cilt Koruma Kremi</strong></td>
												<td>11.12.2018</td>
												<td>11.12.2019</td>
												<td>150 TL</td>
												<td>Vitrin</td>
												<td><span class="label label-success">Stokta</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>12323231378</td>
												<td>
													<div class="img-wrap">
													<img src="images/users/user-100100.jpg" title="Image title here">
													</div>
												</td>
												<td><strong>Cilt Koruma Kremi</strong></td>
												<td>11.12.2018</td>
												<td>11.12.2019</td>
												<td>150 TL</td>
												<td>Vitrin</td>
												<td><span class="label label-success">Stokta</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>12323231378</td>
												<td>
													<div class="img-wrap">
													<img src="images/users/user-100100.jpg" title="Image title here">
													</div>
												</td>
												<td><strong>Cilt Koruma Kremi</strong></td>
												<td>11.12.2018</td>
												<td>11.12.2019</td>
												<td>150 TL</td>
												<td>Vitrin</td>
												<td><span class="label label-success">Stokta</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											
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