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
                <link href="assets/libs/rickshaw/rickshaw.min.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/morrischart/morris.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/jquery-clock/clock.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/bootstrap-calendar/css/bic_calendar.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/jquery-weather/simpleweather.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/bootstrap-xeditable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
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
<?php include("parca/topbar.php"); ?>
<?php include("parca/solmen.php"); ?>
		
        <!-- Left Sidebar End -->		   
	<?php include("parca/sagmen.php"); ?>
  	
		<!-- SAYFANIN ORTASI -->
		<div class="content-page">
		<div class="content">
		<div class="row">
		<div class="col-md-12">
						<div class="widget">
						
							<div class="widget-header transparent">
								<h2><strong>Gelen Başvurular</strong></h2>
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
										<div class="col-md-8">
										
										</div>
									</div>
								</div>
									
								<div class="table-responsive">
									<table data-sortable class="table table-hover table-striped">
										<thead>
											<tr>
												<th>No</th>
												<th>Ad</th>
												<th>Email</th>
												<th>Telefon</th>
												<th>Başvuru Tarih</th>
										
												<th data-sortable="false">İşlem</th>
											</tr>
										</thead>
										
										<tbody>
											<?php
											include("baglanti.php");											
											$sira=1;											
											$basvuru = $vt->query('select * from basvurular where Durum="0" order by Bas_ID asc LIMIT 0,5');	
											while($bas = mysqli_fetch_assoc($basvuru)) { 
											if($sira<6)
											{
											?>	
											<tr id='tr<?php echo $sira;?>'>
												<td><?php echo $sira;?></td><td><strong><div class="madi<?php echo $sira;?>"><?php echo $bas["Ad"];?></div></strong></td>
												<td><div class="mmail<?php echo $sira;?>"><a href="mailto:#"><?php echo $bas["Mail"];?></a></div></td><td><div class="mtel<?php echo $sira;?>"><?php echo $bas["Tel"];?></div></td><td><div class="mtarih<?php echo $sira;?>"><?php echo $bas["Tarih"];?></div></td>
									
												<td>
													<div class="btn-group btn-group-xs">														
														<a href="#" class="sil1<?php echo $sira;?>" onClick="silme1(<?php echo $bas["Bas_ID"];?>);"><font color="red">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-trash-o"></i></font></a>
													</div>
												</td>
											</tr>
											
											<?php $sira++;?>	
                                            <?php }}mysqli_close($vt);$sira=1;?>										
											<script>
											function silme1(sec)
											{
												$.ajax({
													type:"POST",
													url:"ajax/basvuru/silme.php",
													data: "secx="+Number(sec),
													success:function(sonuc){
														alert(sonuc);
														window.location ="basvurugoruntu.php";
													}
												});	
											}
											</script>	
										</tbody>
									</table>
								</div>
								<script> var bassf = 1; </script>
								<div class="data-table-toolbar">
									<ul class="pagination" id="goruntule">
									  <li id="sgeri" class="disabled"><a id="SayfaGeri" href="#msgn">&laquo;</a></li>
									   <?php 
									  include("baglanti.php");	
									  $basvurusf = $vt->query("select * from basvurular where Durum='0' order by Bas_ID asc");
									  while($bassf = mysqli_fetch_assoc($basvurusf)) { 
										 $sirasf = mysqli_num_rows($basvurusf);
									  }		
									  $sayfasayisi = ceil($sirasf/5);									  
									  for($g=1; $g<=ceil($sirasf/5); $g++)	
									  { 
									 	 if($g==1)
										 	echo '<li class="active" id="li'.$g.'"><a id="msf_'.$g.'" href="#msgn">'.$g.'</a></li>';
										 else
										 {
										 	echo '<li id="li'.$g.'"><a id="msf_'.$g.'" href="#msgn">'.$g.'</a></li>';
												if($g==5)
													echo '<li id="ul1"><a href="#msgn">...</a></li>';
										 }
										 if($g>4 && $g<(ceil($sirasf/5)-3))										
											echo '<script>$("#li'.$g.'").hide();</script>';
									  }
									  mysqli_close($vt);									  
									  ?>
									   <script>	
									  $("body").on("mouseover","#goruntule",function(){
										  for(var c=1; c<=<?php echo ceil($sirasf/5);?>; c++)
										  {
											 $("#li"+c).show();
										  }
										  $("#ul1").hide();
									  });
									  $("body").on("mouseout","#goruntule",function(){
										  for(var c=1; c<=<?php echo ceil($sirasf/5);?>; c++)
										  {
											  if(c>4 && c<<?php echo (ceil($sirasf/5)-3);?>)
												$("#li"+c).hide();
										  }
										  $("#ul1").show();
									  });
									  </script>
									   <?php 
										 for($g=1; $g<=ceil($sirasf/5); $g++)
										 {
										 ?>
											 <script>
											  $("body").on("click","#msf_<?php echo $g;?>",function(){
												 	for(var dd=1; dd<=<?php echo $sayfasayisi;?>; dd++)
													{$("#li"+dd).attr("class","inactive");}														
													bassf = <?php echo $g;?>;
													if(bassf!=1)
														{$("#sgeri").attr("class","enabled");}
													else
														{$("#sgeri").attr("class","disabled");}	
													if(bassf!=<?php echo ceil($sirasf/5);?>)
														{$("#sileri").attr("class","enabled");}
													else
														{$("#sileri").attr("class","disabled");}	
												  	$("#li<?php echo $g;?>").attr("class","active");
													$.ajax({
														type:"POST",
														url:"ajax/basvuru/sayfa.php",
														data: "lsd=<?php echo ($g*5);?>",
														success:function(sonuc){						
														    var siras = 1;
															var parca = sonuc.split("*");																						
														    for(var i=0; i<5; i++)
															{																
																if(siras<=(parca.length-1))
																{
																	$("#tr"+(siras)).show();
																	var parca2 = parca[i].split("-");
																	$(".madi"+(i+1)).attr("id","madi"+parca2[0]);																	
																	$(".mtarih"+(i+1)).attr("id","mtarih"+parca2[0]);
																	$(".mmail"+(i+1)).attr("id","mmail"+parca2[0]);
																	$(".mtel"+(i+1)).attr("id","mtel"+parca2[0]);

																	$(".madi"+(i+1)).text(parca2[1]);
																	$(".mmail"+(i+1)).text(parca2[2]);
																	$(".mtel"+(i+1)).text(parca2[3]);
																	$(".mtarih"+(i+1)).text(parca2[4]);	
																	
																	$(".sil1"+(i+1)).attr("onClick","silme1("+parca2[0]+")");
																}
																else
																{$("#tr"+(siras)).hide();}
																siras++;																
															}	
														}														
													});													
											  });	
											  </script>										 
                                      <?php }?>
									  
									  <li id="sileri" class="enabled"><a id="SayfaIleri" href="#msgn">&raquo;</a></li>
									  
									  <script>
											  $("body").on("click","#SayfaIleri",function(){
												  if(bassf!=<?php echo ceil($sirasf/5);?>)												  
												 	$('#msf_'+(bassf+1)).trigger('click');	
												  else												  
													  $("#sileri").attr("class","disabled");													  
											  });	
											  $("body").on("click","#SayfaGeri",function(){
												  if(bassf!=1)												  
												 	$('#msf_'+(bassf-1)).click();
												  else
												    $("#sgeri").attr("class","disabled");													 
											  });	
										 </script>	
									</ul>
									
								</div>
							</div>
						</div>
					</div>
					</div>
					<!-- TEKLİF VE ÖNERİ -->
					<div class="row">
		<div class="col-md-12">
						<div class="widget">
						
							<div class="widget-header transparent">
								<h2><strong>Gelen Teklif ve Öneriler</strong></h2>
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
										<div class="col-md-8">
										
										</div>
									</div>
								</div>
								
								<script> var teksf = 1; </script>
								<div class="table-responsive">
									<table data-sortable class="table table-hover table-striped">
										<thead>
											<tr>
												<th>No</th>
												<th>Ad</th>
												<th>Email</th>
												<th>Telefon</th>
												<th>Mesaj</th>
												<th>Başvuru Tarih</th>
										
												<th data-sortable="false">İşlem</th>
											</tr>
										</thead>
										
										<tbody>
										<?php
											include("baglanti.php");											
											$sira=1;											
											$mesaj = $vt->query('select * from mesajkutusu where Durum="0" order by Mesaj_ID asc LIMIT 0,5');	
											while($mk = mysqli_fetch_assoc($mesaj)) { 
											if($sira<6)
											{
											?>									
										
											<tr id='tr2<?php echo $sira;?>'>
												<td><?php echo $sira;?></td> <td><strong><div class="mmadi<?php echo $sira;?>"> <?php echo $mk["Ad"];?> </div></strong></td>
												<td><div class="mmmail<?php echo $sira;?>"><a href="mailto:#"><?php echo $mk["Mail"];?></a></div></td>  <td><div class="mmtel<?php echo $sira;?>"> <?php echo $mk["Telefon"];?></div></td> <td><div class="mmmesaj<?php echo $sira;?>"> <?php echo $mk["Mesaj"];?></div> </td>
												<td><div class="mmtarih<?php echo $sira;?>"> <?php echo $mk["Tarih"];?></div></td>
												<td>
													<div class="btn-group btn-group-xs">														
														<a href="#" class="sil2<?php echo $sira;?>" onClick="silme2(<?php echo $mk["Mesaj_ID"];?>);"><font color="red">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-trash-o"></i></font></a>
													</div>
												</td>
												
											</tr>
											<?php $sira++;?>	
                                            <?php }}mysqli_close($vt);$sira=1;?>
											<script>
											function silme2(sec)
											{
												$.ajax({
													type:"POST",
													url:"ajax/teklif/silme.php",
													data: "secx="+Number(sec),
													success:function(sonuc){
														alert(sonuc);
														window.location ="basvurugoruntu.php";
													}
												});	
											}
											</script>		
											
										</tbody>
									</table>
								</div>
									
								<div class="data-table-toolbar">
									<ul class="pagination" id="goruntule2">
									  <li id="sgeri2" class="disabled"><a id="SayfaGeri2" href="#msgn">&laquo;</a></li>
									  
									  <?php 
									  include("baglanti.php");	
									  $mesajsf = $vt->query("select * from mesajkutusu where Durum='0' order by Mesaj_ID asc");
									  while($msf = mysqli_fetch_assoc($mesajsf)) { 
										 $sirasf2 = mysqli_num_rows($mesajsf);
									  }		
									  $sayfasayisi2 = ceil($sirasf2/5);									  
									  for($g=1; $g<=ceil($sirasf2/5); $g++)	
									  { 
									 	 if($g==1)
										 	echo '<li class="active" class="li2c" id="li2'.$g.'"><a id="msf2_'.$g.'" href="#msgn">'.$g.'</a></li>';
										 else
											{
												echo '<li class="li2c" id="li2'.$g.'"><a id="msf2_'.$g.'" href="#msgn">'.$g.'</a></li>';
												if($g==5)
													echo '<li class="li2c" id="ul2"><a href="#msgn">...</a></li>';
											}
										if($g>=11)										
											echo '<script>$("#li2'.$g.'").hide();</script>';
										
									  }
									  mysqli_close($vt);									  
									  ?>	
									  <script>	
									  
									  </script>
									  <?php 
										 for($g=1; $g<=ceil($sirasf2/5); $g++)
										 {
										 ?>									  
									  <script>
											  $("body").on("click","#msf2_<?php echo $g;?>",function(){
												 	/*for(var dd=1; dd<=<?php echo $sayfasayisi2;?>; dd++)
													{$("#li2"+dd).attr("class","inactive");}*/														
													teksf = <?php echo $g;?>;	
													if(teksf!=1)
														{$("#sgeri2").attr("class","enabled");}
													else
														{$("#sgeri2").attr("class","disabled");}	
													if(teksf!=<?php echo ceil($sirasf2/5);?>)
														{$("#sileri2").attr("class","enabled");}
													else
														{$("#sileri2").attr("class","disabled");}														
												  	$("#li2<?php echo $g;?>").attr("class","active");													
													alert('<?php echo $g;?>');
													
													var acik = <?php echo $g;?>	
													$(".li2c").hide();												
													$("#li2"+(acik)).show();
													if(acik<1)
													$("#li2"+(acik)).before('<li class="li2c" id="ul2"><a>...</a></li>');
													if(acik>1)
													$("#li2"+(acik-1)).show();
													if(acik>2)
													$("#li2"+(acik-2)).show();
													if(acik>3)
													$("#li2"+(acik-3)).show();
													if(acik>4)
													$("#li2"+(acik-4)).show();
													if(acik>5)
													{$("#li2"+(acik-5)).show();}
													$("#li2"+(acik+1)).show();													
													$("#li2"+(acik+2)).show();
													$("#li2"+(acik+3)).show();
													$("#li2"+(acik+4)).show();
													$("#li2"+(acik+5)).show();
													$("#li2"+(<?php echo ceil($sirasf2/5)?>)).before('<li class="li2c" id="ul2"><a>...</a></li>');
													$("#li2"+(<?php echo ceil($sirasf2/5)?>)).show();
													
													$.ajax({
														type:"POST",
														url:"ajax/teklif/sayfa.php",
														data: "lsd=<?php echo ($g*5);?>",
														success:function(sonuc){						
														    var siras = 1;
															var parca = sonuc.split("*");																						
														    for(var i=0; i<5; i++)
															{																
																if(siras<=(parca.length-1))
																{
																	$("#tr2"+(siras)).show();
																	var parca2 = parca[i].split("-");
																	$(".mmadi"+(i+1)).attr("id","mmadi"+parca2[0]);																	
																	$(".mmtel"+(i+1)).attr("id","mmtarih"+parca2[0]);
																	$(".mmmail"+(i+1)).attr("id","mmmail"+parca2[0]);
																	$(".mmmesaj"+(i+1)).attr("id","mmtel"+parca2[0]);
																	$(".mmtarih"+(i+1)).attr("id","mmtarih"+parca2[0]);

																	$(".mmadi"+(i+1)).text(parca2[1]);
																	$(".mmtel"+(i+1)).text(parca2[2]);
																	$(".mmmail"+(i+1)).text(parca2[3]);
																	$(".mmmesaj"+(i+1)).text(parca2[4]);
																	$(".mmtarih"+(i+1)).text(parca2[5]);	

																	$(".sil2"+(i+1)).attr("onClick","silme2("+parca2[0]+")");
																}
																else
																{$("#tr2"+(siras)).hide();}
																siras++;																
															}	
														}														
													});													
											  });	
											  </script>			
										 <?php }?>
										 
									  
									  <li id="sileri2" class="enabled"><a id="SayfaIleri2" href="#msgn">&raquo;</a></li>
									   <script>
											  $("body").on("click","#SayfaIleri2",function(){
												  if(teksf!=<?php echo ceil($sirasf2/5);?>)												  
												 	$('#msf2_'+(teksf+1)).trigger('click');	
												  else												  
													  $("#sileri2").attr("class","disabled");													  
											  });	
											  $("body").on("click","#SayfaGeri2",function(){
												  if(teksf!=1)												  
												 	$('#msf2_'+(teksf-1)).click();
												  else
												    $("#sgeri2").attr("class","disabled");													 
											  });	
										 </script>	
										 
									</ul>
									
								</div>
							</div>
						</div>
					</div>
					</div>
					</div>
					</div>
        
		<!-- SAYFANIN ORTASI BİTTİ -->
 <?php include("parca/footks.php"); ?>
	</div>

	<!-- End of page -->
		<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];
	</script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->	
	</body>
</html>
<?php }?>
<?php
if(!isset($_SESSION["login"]))
	echo '<meta http-equiv="refresh" content="0; url=login.php">';	
?>