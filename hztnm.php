<?php $sirasf=10;?>
				<div class="widget pageblock" id="hztnm" style="display:none;">
				<div class="widget-header">
								<h2><strong>Hizmet Tanımlama Paneli</strong></h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" id="w-close-hztnm" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
				<div class="page-heading">
            		<form name="musterikayit" id="musterikayit" method="post" action="hztnm.php">
                    <div class="widget">
							<div class="widget-content padding">
								<div class="form-group" id="hadi1">
									<label>Hizmet Adı</label>
									<input type="text" class="form-control" name="hadi" id="hadi">
								  </div>
								  <div class="form-group" id="khadi1">
									<label>Kısa İsimlendirme</label>
									<input type="text" class="form-control" name="khadi" id="khadi">
								  </div>
                                    <div class="form-group" id="hucret1">
									<label>Ücretlendirme</label>
									<input type="text" class="form-control" name="hucret" id="hucret">
								  </div>
								   <div class="form-group" id="hcins1">
									<label>Cinsiyet</label>
									<input type="text" class="form-control" name="hcins" id="hcins">
									<input type="hidden" id="mu" name="mu">
								  </div>
				
 	
									</div>
                                    <div class="col-md-8">
                                        <div style="paading-left:15px;">
                                       <button name="MKaydet" type="submit" class="btn btn-green-3">Kaydet</button>  
                                       <button name="MGuncelle" type="submit" class="btn btn-primary">Güncelle</button>
                                   
                                    </div>
                                </div>
							</div>
							</form>
							
							<?php							
							if(isset($_POST["MKaydet"]))
							{
								include("baglanti.php");						
								$hadi = temizle($_POST["hadi"]);
								$khadi = temizle($_POST["khadi"]);
								$hucret = temizle($_POST["hucret"]);
								$hcins = temizle($_POST["hcins"]);						
								$durum = '0';								
								if($hadi!="" && $khadi!="" && $hucret!="" && $hcins!="")
								{																						
									if(strlen($khadi)>6)
										echo '<script type="text/javascript">$(function(){$("#khadi1").attr("class","form-group has-error");$("#khadi").attr("placeholder","Kısa İsimlendirme 6 karakterden büyük olmamalıdır..!");});</script>';											
									else
									{
																				
										$sorgu = $vt->query("insert into hizmetler (H_Adi,HK_Adi,H_Tutar,H_Cins,Durum) values ('$hadi','$khadi','$hucret','$hcins','$durum')");
										if($sorgu) 									
										{ 												
											echo "<script>alert('Hizmet Başarıyla Kayıt Edildi.');</script>";
											mysqli_close($vt);echo '<script>window.location ="hztnm.php";window.location ="hztnm.php";</script>';										
										}										
									}											
								}
								else
								{
									if($hadi=="")											
										echo '<script type="text/javascript">$(function(){$("#adi1").attr("class","form-group has-error");});</script>';
									if($hucret=="")											
										echo '<script type="text/javascript">$(function(){$("#soyadi1").attr("class","form-group has-error");});</script>';	
									if($hcins=="")											
										echo '<script type="text/javascript">$(function(){$("#ktarih").attr("class","form-group has-error");});</script>';
									if(strlen($khadi)>6)											
										{echo '<script type="text/javascript">$(function(){$("#khadi1").attr("class","form-group has-error");$("#khadi").attr("placeholder","Kısa İsimlendirme 6 Karakterden Büyük Olmamalıdır..!");});</script>';}
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
											$hadi = temizle($_POST["hadi"]);
											$khadi = temizle($_POST["khadi"]);
											$hucret = temizle($_POST["hucret"]);
											$hcins = temizle($_POST["hcins"]);						
											$durum = '0';														
											if($hadi!="" && $khadi!="" && $hucret!="" && $hcins!="")
											{
												if(strlen($khadi)>6)
													echo '<script type="text/javascript">$(function(){$("#khadi1").attr("class","form-group has-error");$("#khadi").attr("placeholder","Kısa İsimlendirme 6 Karakterden Büyük Olmamalıdır..!");});</script>';	
												// Veritabanı İşlemleri	
												else
												{
													include("baglanti.php");	
													$mid = $_POST["mu"];											
													$gncm = $vt->query("UPDATE hizmetler SET H_Adi='$hadi',HK_Adi='$khadi',H_Tutar='$hucret',H_Cins='$hcins' WHERE H_ID='$mid'");
													if($gncm)
													{
														echo '<script>alert("Güncelleme İşlemi Tamamlandı...");</script>';	
														mysqli_close($vt);	echo '<script>window.location ="hztnm.php";window.location ="hztnm.php";</script>';												
													}
												}											
											}
											else
											{
												if($hadi=="")											
													echo '<script type="text/javascript">$(function(){$("#hadi1").attr("class","form-group has-error");});</script>';
												if($hcins=="")											
													echo '<script type="text/javascript">$(function(){$("#hcins1").attr("class","form-group has-error");});</script>';	
												if($hucret=="")											
													echo '<script type="text/javascript">$(function(){$("#hucret1").attr("class","form-group has-error");});</script>';
												if(strlen($khadi)<11)											
													{echo '<script type="text/javascript">$(function(){$("#khadi1").attr("class","form-group has-error");$("#telno").attr("placeholder","Kısa İsimlendirme 6 Karakterden Büyük Olmamalıdır..!");});</script>';}
													echo "<script>alert('Lütfen Boş Alan Bırakmayınız.');</script>";
											}												
										}
									}
							?>								
							
						<div class="widget">	
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
												<th>Hizmet No</th>
												<th>Hizmet Adı</th>
												<th align="center">Kısa Ad</th>
												<th>Tutar</th>
												<th>Cinsiyet</th>
												
												<th align="center" width="100">Aktar / Seç</th>
												
											</tr>
										</thead>
										
										<tbody>
											<script>var idler = new Array();</script>											
                                        <?php
											include("baglanti.php");											
											$sira=1;											
											$sorgu = $vt->query('select * from hizmetler where Durum="0" order by H_ID asc LIMIT 0,10');	
											while($musteri = mysqli_fetch_assoc($sorgu)) { 
											if($sira<11)
											{
											?>	
											<tr id='tr<?php echo $sira;?>'>											
                                				<script>
												idler[<?php echo $sira-1;?>]='<?php echo $musteri["H_ID"].'*';?>';
												</script>	
												<td><strong><?php echo $sira;?></strong></td>
                                                <td><div class="mdosno<?php echo $sira;?>" id='mdosno<?php echo $musteri["H_ID"];?>'><?php echo $musteri["H_Adi"];?></div></td>
                                                <td><strong><div class="madi<?php echo $sira;?>" id='madi<?php echo $musteri["H_ID"];?>'><?php echo $musteri["HK_Adi"];?></div></strong></td>
												<td><div class="msoyadi<?php echo $sira;?>" id='msoyadi<?php echo $musteri["H_ID"];?>'><?php echo $musteri["H_Tutar"];?></div></td>
                                                <td><strong><div class="mmbtarih<?php echo $sira;?>" id='mbtarih<?php echo $musteri["H_ID"];?>'><?php echo $musteri["H_Cins"];?></div></strong></td>
                                                <td><a class="akt<?php echo $sira;?>"onClick="aktarma(<?php echo $musteri["H_ID"];?>);" href='#'><i class="icon-reply"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="sil<?php echo $sira;?>" onClick="silme(<?php echo $musteri["H_ID"];?>);"><font color="red"><i class="fa fa-trash-o"></i></font></a></td>	
												</tr>                                                 
                                                <?php $sira++;?>	
                                             <?php }}mysqli_close($vt);$sira=1;?>	   
                                            <tr><td colspan="9"></td></tr>
										</tbody>
									</table>
								</div>
									
								<div class="data-table-toolbar">
									<ul class="pagination">									
									  <li class="enabled"><a id="SayfaGeri" href="#">&laquo;</a></li>
									  <?php 
									  include("baglanti.php");	
									  $sorgu = $vt->query("select * from hizmetler where Durum='0' order by H_ID asc");
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
									  
									  <?php 
										 for($g=1; $g<=ceil($sirasf/10); $g++)
										 {
										 ?>
											 <script>
											  $("body").on("click","#msf_<?php echo $g;?>",function(){
												 	for(var dd=1; dd<=<?php echo $sayfasayisi;?>; dd++)
													{$("#li"+dd).attr("class","inactive");}
													<?php $aktifsayfa=$g;?>													
												  	$("#li<?php echo $g;?>").attr("class","active");
													$.ajax({
														type:"POST",
														url:"ajax/hizmet/ajax.php",
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
																	$(".m"+(i+1)).attr("id","m"+parca2[0]);
																	$(".ma"+(i+1)).attr("id","ma"+parca2[0]);
																	//$(".akt"+(i+1)).attr("id","akt"+parca2[0]);
																	$(".akt"+(i+1)).attr("onClick","aktarma("+parca2[0]+");");
																	$(".sil"+(i+1)).attr("onClick","silme("+parca2[0]+");");
																	
																	$(".madi"+(i+1)).text(parca2[1]);
																	$(".msoyadi"+(i+1)).text(parca2[2]);
																	$(".mmbtarih"+(i+1)).text(parca2[3]);
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
											url:"ajax/hizmet/aktarma.php",
											data: "secx="+Number(sec),
											success:function(sonuc){						
											var parca = sonuc.split("-");											
											$("#mu").val(parca[0]);
											$("#hadi").val(parca[1]);
											$("#khadi").val(parca[2]);
											$("#hucret").val(parca[3]);
											$("#hcins").val(parca[4]);										
											}
										});	
									  }
									  
									  function silme(sec)
									  {
										$.ajax({
											type:"POST",
											url:"ajax/hizmet/silme.php",
											data: "secx="+Number(sec),
											success:function(sonuc){
												alert(sonuc);												
												window.location ="hztnm.php";
											}
										});	
									  }
									  </script>									  
										
										
										<script>
										
									<?php for($x=1; $x<=10; $x++)	{?>									
										$('.m<?php echo $x;?>').on('ifChanged', function (event) 
										{	
																					
											for(var c=1; c<=10; c++)
											{
												if(c!=<?php echo $x;?>)
													$('.m'+c).attr('checked', false);
											}											
													
										});		
									<?php }?>								
										</script> 
										
									 									
									  <li><a id="SayfaIleri" href="#">&raquo;</a></li>									
									</ul>
								</div>
							</div>
					</div>
				</div>
             </div>
							
