				<div class="widget pageblock" id="msks" style="display:none;">	
							<div class="widget-header">
								<h2><strong>Müşteri Kayıt/Güncelleme Formu</strong></h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" id="w-close-msks" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>				
				<div class="page-heading">		
                    <div class="widget">
							<div class="widget-content padding">
								<div class="form-group" id="dosyano1">
									<label>Dosya Numarası</label>
									<input type="text" class="form-control" name="dosyano" id="dosyano">
								  </div>
								  <div class="form-group" id="adi1">
									<label>Adı</label>
									<input type="text" class="form-control" name="adi" id="adi">
								  </div>
                                    <div class="form-group" id="soyadi1">
									<label>Soyadı</label>
									<input type="text" class="form-control" name="soyadi" id="soyadi">
								  </div>
								   
							<label>Cinsiyet</label>
							<div class="form-group">
								<select class="form-control" name="cins" id="cins">
								  <option>ERKEK</option>
								  <option>KADIN</option>								  						  
								</select>
							</div>
								  <div class="form-group" id="telno1">
									<label>Telefon Numarası</label>
									<input type="text" class="form-control" name="telno" id="telno">
								  </div>
								  <div class="form-group" id="adres1">
									<label>Adres</label>
									<input type="text" class="form-control" name="adres" id="adres">
								  </div>
								    <div class="form-group" id="mail1">
									<label>Email</label>
									<input type="text" class="form-control" name="mail" id="mail">
									<input type="hidden" id="mu" name="mu">
								  </div>
                                  <div class="form-group">
							<label>Kayıt Tarihi</label>
							<div class="form-group" id="ktarih">
							  <input name="k-tarih" id="k_tarih" type="text" class="form-control datepicker-input" data-mask="9999-99-99" placeholder="Yıl-Ay-Gün" readonly>
							</div>
									
										</div>									
                                    <div class="col-md-8">                                       
                                       <button name="MKaydet" type="submit" class="btn btn-green-3">Kaydet</button>  
                                       <button name="MGuncelle" type="submit" class="btn btn-primary">Güncelle</button>  
									</div>
							</div>
						</div>
							
							<?php							
							if(isset($_POST["MKaydet"]))
							{
								include("baglanti.php");						
								$adi = temizle($_POST["adi"]);
								$soyadi = temizle($_POST["soyadi"]);
								$telno = temizle($_POST["telno"]);
								$adres = temizle($_POST["adres"]);
								$mail = temizle($_POST["mail"]);
								$ktarih = temizle($_POST["k-tarih"]);
								$dosno = temizle($_POST["dosyano"]);	
								$cins = temizle($_POST["cins"]);
								$durum = '0';								
								if($adi!="" && $soyadi!="" && $telno!="" && $ktarih!="")
								{																						
									if(strlen($telno)<11)
										echo '<script type="text/javascript">$(function(){$("#telno1").attr("class","form-group has-error");$("#telno").attr("placeholder","Telefon Numarası 11 Karakter Olmalıdır..!");});</script>';											
									else
									{
																				
										$sorgu = $vt->query("insert into musteriler (Dosya_No,Adi,Soyadi,M_Cins,B_Tarih,Mail,Adres,Tel,Durum) values ('$dosno','$adi','$soyadi','$cins','$ktarih','$mail','$adres','$telno','$durum')");
										if($sorgu) 									
										{ 												
											echo "<script>alert('Müşteri Başarıyla Kayıt Edildi.');</script>";
											mysqli_close($vt); echo '<script>window.location ="msks.php";window.location ="msks.php";</script>'; 				
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
										echo '<script type="text/javascript">$(function(){$("#adres1").attr("class","form-group has-success");$("#mail1").attr("class","form-group has-success");$("#dosyano1").attr("class","form-group has-success");});</script>';
										echo "<script>alert('Lütfen Boş Alan Bırakmayınız.');</script>";
								}																	
							}
							?>    

							<?php
								if(isset($_POST["MGuncelle"]))	
									{	
										$idlermu = array();								
										if($_POST["mu"]=="")
										{
											echo '<script>alert("Önce Seçim Yapmalısınız...");</script>';
										}
										else
										{												
											$adi = temizle($_POST["adi"]);
											$soyadi = temizle($_POST["soyadi"]);
											$telno = temizle($_POST["telno"]);
											$adres = temizle($_POST["adres"]);
											$mail = temizle($_POST["mail"]);
											$ktarih = temizle($_POST["k-tarih"]);
											$dosno = temizle($_POST["dosyano"]);	
											$cins = temizle($_POST["cins"]);											
											if($adi!="" && $soyadi!="" && $telno!="" && $ktarih!="")
											{
												if(strlen($telno)<11)
													echo '<script type="text/javascript">$(function(){$("#telno1").attr("class","form-group has-error");$("#telno").attr("placeholder","Telefon Numarası 11 Karakter Olmalıdır..!");});</script>';	
												// Veritabanı İşlemleri	
												else
												{
													include("baglanti.php");	
													$mid = $_POST["mu"];											
													$gncm = $vt->query("UPDATE musteriler SET Adi='$adi',Soyadi='$soyadi',M_Cins='$cins',B_Tarih='$ktarih',Mail='$mail',Adres='$adres',Tel='$telno',Dosya_No='$dosno' WHERE Mus_ID='$mid'");
													if($gncm)
													{
														echo '<script>alert("Güncelleme İşlemi Tamamlandı...");</script>';	
														mysqli_close($vt); echo '<script>window.location ="msks.php";window.location ="msks.php";</script>'; 												
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
									}
							?>								
							
						<div class="widget" id="msgn">
							<div class="widget-content">
								<div class="data-table-toolbar">
									<div class="row">
										<div class="col-md-4">
											<form name="AraForm">
											<input type="text" class="form-control" placeholder="Ara..">
											</form>
										</div>
										<div class="col-md-8">
											<div class="toolbar-btn-action">
												<!--<button type="submit" name="MSil" class="btn btn-danger"><i class="fa fa-trash-o"></i> Sil</button>-->
												<!--<button type="submit" name="MGuncelle" class="btn btn-primary"><i class="fa fa-refresh"></i> Güncelle</button>-->
											</div>
										</div>
									</div>
								</div>
									
								<div class="table-responsive">
									<table data-sortable class="table table-hover table-striped">
										<thead>
											<tr>
												<th>ID</th>
												<th align="center">Dosya No</th>
												<th>Adı</th>
												<th>Soyadı</th>
												<th>Cinsiyet</th>
												<th>Kayıt Tarihi</th>
												<th>Email</th>
                                                <th>Telefon</th>												
												<th align="center" width="100">Aktar / Sil</th>
												
											</tr>
										</thead>
										
										<tbody>
											<script>var idler = new Array();</script>											
                                        <?php
											include("baglanti.php");											
											$sira=1;											
											$sorgu = $vt->query('select * from musteriler where Durum="0" order by mus_ID asc LIMIT 0,10');	
											while($musteri = mysqli_fetch_assoc($sorgu)) { 
											if($sira<11)
											{
											?>	
											<tr id='tr<?php echo $sira;?>'>											
                                				<script>
												idler[<?php echo $sira-1;?>]='<?php echo $musteri["Mus_ID"].'*';?>';
												</script>	
												<td><?php echo $sira;?></td>
                                                <td><div class="mdosno<?php echo $sira;?>" id='mdosno<?php echo $musteri["Mus_ID"];?>'><?php echo $musteri["Dosya_No"];?></div></td>
                                                <td><strong><div class="madi<?php echo $sira;?>" id='madi<?php echo $musteri["Mus_ID"];?>'><?php echo $musteri["Adi"];?></div></strong></td>
												<td><div class="msoyadi<?php echo $sira;?>" id='msoyadi<?php echo $musteri["Mus_ID"];?>'><?php echo $musteri["Soyadi"];?></div></td>
												<td><div class="mcins<?php echo $sira;?>" id='mcins<?php echo $musteri["Mus_ID"];?>'> <?php echo $musteri["M_Cins"];?></div></td>
                                                <td><div class="mmbtarih<?php echo $sira;?>" id='mbtarih<?php echo $musteri["Mus_ID"];?>'><?php echo $musteri["B_Tarih"];?></div></td>
                                                <td><a href="mailto:#"><div class="mmail<?php echo $sira;?>" id='mmail<?php echo $musteri["Mus_ID"];?>'><?php echo $musteri["Mail"];?></div></a></td>
                                                <td><div class="mtel<?php echo $sira;?>" id='mtel<?php echo $musteri["Mus_ID"];?>'><?php echo $musteri["Tel"];?></div></td>												
                                                <td><a class="akt<?php echo $sira;?>"onClick="aktarma(<?php echo $musteri["Mus_ID"];?>);" href='#'><i class="icon-reply"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="sil<?php echo $sira;?>" onClick="silme(<?php echo $musteri["Mus_ID"];?>);"><font color="red"><i class="fa fa-trash-o"></i></font></a></td>	
												</tr>                                                 
                                                <?php $sira++;?>	
                                             <?php }}mysqli_close($vt);$sira=1;?>	   
                                            <tr><td colspan="9"></td></tr>
										</tbody>
									</table>
								</div>
									
								<div class="data-table-toolbar">
									<ul class="pagination">									
									  <li class="enabled"><a id="SayfaGeri">&laquo;</a></li>
									  <?php 
									  include("baglanti.php");	
									  $sorgu = $vt->query("select * from musteriler where Durum='0' order by Mus_ID asc");
									  while($musteri = mysqli_fetch_assoc($sorgu)) { 
										 $sirasf = mysqli_num_rows($sorgu);
									  }	
									  $sayfasayisi = ceil($sirasf/10);
									  for($g=1; $g<=ceil($sirasf/10); $g++)	
									  { 
									 	 if($g==1)
										 	echo '<li class="active" id="li'.$g.'"><a id="msf_'.$g.'" href="#msgn">'.$g.'</a></li>';
										 else
										 	echo '<li id="li'.$g.'"><a id="msf_'.$g.'" href="#msgn">'.$g.'</a></li>';
									  }
									  mysqli_close($vt);									  
									  ?>
									  <style>
									  #sfgit-msks{background-color:#abb7b7 !important; border-color:#abb7b7 !important;float:left;}
									  #sfgit-msks:hover{background-color:#98a3a3 !important; border-color:#98a3a3 !important;}
									  #sfno-msks{width:60px;float:left;margin-right:5px;}
									  #sfdisdiv-msks{float:left;width:165px;margin-left:5px;}
									  </style>
									  <script>
									  $(function(){
										  $(".pagination>.active").attr("class","inactive");
													
													$(".pagination>li").hide(); // Tüm Sayfalar Gizle
													//$(".pagination>li").attr("class","inactive"); 
													$(".pagination>li:eq(<?php echo $g-1;?>)").show();
													$(".pagination>li:eq(<?php echo $g-2;?>)").show();																										
													
													$("#li<?php echo $g;?>").show();												  	
													$("#li<?php echo $g;?>").attr("class","active");	
													
													
													$(".pagination>.nokta").remove();$("#li<?php echo $g;?>").before('<li class="passive nokta" style="display: inline;"><a>...</a></li>');									
													
													$(".pagination>li:eq(<?php echo $g+1;?>)").show();
													$(".pagination>li:eq(<?php echo $g+2;?>)").show();
													$(".pagination>li:eq(<?php echo $g+3;?>)").show();
													$(".pagination>li:eq(<?php echo $g+4;?>)").show();
													$(".pagination>li:eq(<?php echo $g+5;?>)").show();
													$(".pagination>li:eq(<?php echo $g+6;?>)").show();
													$(".pagination>li:eq(<?php echo $g+7;?>)").show();
													$("#msf_5").trigger('click');
													$(".pagination>li:eq("+($(".pagination>li").length-2)+")").show(); // Son Sayfa
													$(".pagination>li:eq("+($(".pagination>li").length-1)+")").after('<div id="sfdisdiv-msks"><input type="number" maxlength="3" value="1" id="sfno-msks" class="form-control"><button class="btn btn-primary" id="sfgit-msks">Sayfaya Git</button></div>');
													
									  });
									  
									  $("body").on("click","#sfgit-msks",function(){																			
										$("#msf_"+$("#sfno-msks").val()).trigger('click');										
									  });
									  
									  $("body").on("click","#SayfaIleri",function(){
										var aktifliart = parseInt($(".pagination>.active>a").attr("id").split('_')[1])+1;										
										$("#msf_"+aktifliart).trigger('click');										
									  });
									  $("body").on("click","#SayfaGeri",function(){
										var aktiflieks = parseInt($(".pagination>.active>a").attr("id").split('_')[1])-1;										
										$("#msf_"+aktiflieks).trigger('click');										
									  });
									  
									  </script>									  
									  <?php 
										 for($g=1; $g<=ceil($sirasf/10); $g++)
										 {
										 ?>
											 <script>
											  $("body").on("click","#msf_<?php echo $g;?>",function(){
												 	/*for(var dd=1; dd<=<?php echo $sayfasayisi;?>; dd++)
													{$("#li"+dd).attr("class","inactive");}*/
													<?php $aktifsayfa=$g;?>		
													
													$(".pagination>.active").attr("class","inactive");
													var tsay = 0;
													var csay = 0;
													
													$(".pagination>li").hide(); // Tüm Sayfalar Gizle
													$(".pagination>li>#SayfaGeri").parent().show(); // Geri Tuşu										
													$(".pagination>li:eq(<?php echo $g-1;?>)").show();
													$(".pagination>li:eq(<?php echo $g-2;?>)").show();
													$(".pagination>li:eq(<?php echo $g-3;?>)").show();													
													
													$("#li<?php echo $g;?>").show();												  	
													$("#li<?php echo $g;?>").attr("class","active");	
													
																																		
													
													$(".pagination>li:eq(<?php echo $g+1;?>)").show();
													$(".pagination>li:eq(<?php echo $g+2;?>)").show();
													$(".pagination>li:eq(<?php echo $g+3;?>)").show();
													$(".pagination>li:eq(<?php echo $g+4;?>)").show();
													$(".pagination>li:eq(<?php echo $g+5;?>)").show();
													$(".pagination>li:eq(<?php echo $g+6;?>)").show();
													$(".pagination>li:eq(<?php echo $g+7;?>)").show();
													
													
													$(".pagination>li:eq("+($(".pagination>li").length-1)+")").show(); // İleri Tuşu
													$(".pagination>li:eq("+($(".pagination>li").length-2)+")").show(); // Son Sayfa
													$(".pagination>.nokta").remove();$(".pagination>li:eq("+($(".pagination>li").length-2)+")").before('<li class="nokta" style="display: inline;"><a>...</a></li>');	
													
													
													/*for(var m=0; m<$(".pagination>li").length;m++)
													{
														var cikarim = m-<?php echo $g;?>;
														var toplama = m+<?php echo $g;?>;
														//alert(toplama+" "+cikarim);
														if(cikarim<=4 && csay!=4)
														{
															$(".pagination>li:eq("+m+")").show();
															csay++;
														}														}	
														
														if(toplama>m && tsay!=4)
														{
															$(".pagination>li:eq("+m+")").show();
															tsay++;
														}
														
													}	*/												
													
													$.ajax({
														type:"POST",
														url:"ajax/musteri/ajax.php",
														data: "lsd=<?php echo ($g*10);?>",
														success:function(sonuc){						
															var siras = 1;
															var parca = sonuc.split("*");															
															for(var c=1; c<=10; c++)
															{$('.m'+c).iCheck('uncheck');}																														
														    for(var i=0; i<10; i++)
															{
																if(siras<=(parca.length-1))
																{
																	$("#tr"+(siras)).show();
																	var parca2 = parca[i].split("-");
																	$(".madi"+(i+1)).attr("id","madi"+parca2[0]);
																	$(".msoyadi"+(i+1)).attr("id","msoyadi"+parca2[0]);
																	$(".mmbtarih"+(i+1)).attr("id","mbtarih"+parca2[0]);
																	$(".mmail"+(i+1)).attr("id","mmail"+parca2[0]);														
																	$(".mcins"+(i+1)).attr("id","mcins"+parca2[0]);
																	$(".mtel"+(i+1)).attr("id","mtel"+parca2[0]);
																	$(".m"+(i+1)).attr("id","m"+parca2[0]);
																	$(".ma"+(i+1)).attr("id","ma"+parca2[0]);
																	//$(".akt"+(i+1)).attr("id","akt"+parca2[0]);
																	$(".akt"+(i+1)).attr("onClick","aktarma("+parca2[0]+");");
																	$(".sil"+(i+1)).attr("onClick","silme("+parca2[0]+");");
																	
																	$(".madi"+(i+1)).text(parca2[1]);
																	$(".msoyadi"+(i+1)).text(parca2[2]);
																	$(".mmbtarih"+(i+1)).text(parca2[3]);
																	$(".mmail"+(i+1)).text(parca2[4]);																
																	$(".mcins"+(i+1)).text(parca2[5]);
																	$(".mtel"+(i+1)).text(parca2[6]);
																	$(".mdosno"+(i+1)).text(parca2[7]);
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
									  <script>
									  function aktarma(sec)
									  {
										$.ajax({
											type:"POST",
											url:"ajax/musteri/aktarma.php",
											data: "secx="+Number(sec),
											success:function(sonuc){						
											var parca = sonuc.split("-");											
											$("#mu").val(parca[0]);
											$("#adi").val(parca[1]);
											$("#soyadi").val(parca[2]);
											$("#k_tarih").val(parca[3]);
											$("#mail").val(parca[4]);
											$("#adres").val(parca[5]);														
											$("#telno").val(parca[6]);
											$("#dosyano").val(parca[7]);
											$("#cins").val(parca[8]);											
											}
										});	
									  }
									  
									  function silme(sec)
									  {										
										swal({
										title: "Müşteri Silme Onay Kutusu?",
										text: "Silmek İstediğinize Emin Misiniz?",
										icon: "warning",
										buttons: true,
										dangerMode: true,
										})
										.then((willDelete) => {
										if (willDelete) {	
											var actli = $(".pagination>.active>a").attr("id");
											$.ajax({
											type:"POST",
											url:"ajax/musteri/silme.php",
											data: "secx="+Number(sec),
											success:function(sonuc){
												//alert(sonuc);											
												window.location ="yon/indexyon.php?wd=msks-"+actli;
											}
											});	
										swal("Müşteri Başarıyla Silindi.", {
										icon: "success",
										});
										}else{
										swal("Silme İşlemi İptal Edildi!");
										}
										});
									  }
									  </script>			
									  <li><a class="enabled" id="SayfaIleri">&raquo;</a></li>									
									</ul>
								</div>
							</div>
					</div>
				</div>
</div>