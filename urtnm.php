
				<div class="widget" id="uruntnm">
				<div class="widget-header transparent">
								<h2><strong>Kayıtlı Ürünler</strong></h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="" onclick="aclose();" class=""><i class="icon-cancel-3"></i></a>
								</div>
							</div>
					<div class="col-md-12 portlets">
						<div class="widget">
						
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