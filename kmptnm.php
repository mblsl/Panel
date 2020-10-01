				
				<div class="widget" id="kmptnm">
				<div class="widget-header ">
								<h2>Kampanya Oluşturma Paneli</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
					<div class="col-md-12 portlets">
					
						<div class="widget">
							
							<div class="widget-content padding">

								<div class="row">
									<div class="col-sm-6">
									<div class="form-group" id="muadi">
									<label>Kampanya Adı</label>
									<input type="text" class="form-control">
										</div>	
											<div class="form-group" id="muadi">
									<label>Gerekli Hizmet veya Paket</label>
									<input type="text" class="form-control">
										</div>	
										<div class="form-group" id="muadi">
									<label>Gerekli Ürünler</label>
									<input type="text" class="form-control" name="U_Adi">
										</div>
										<div class="form-group" id="mukodu" >
									<label>Kampanya Kodu</label>
									<input type="text" class="form-control" name="U_Kodu">
										</div>
																	<div class="row">
																			<div class="col-sm-6">
																					<div class="form-group" id="mgelisf">
																					<label>Normal Tutar</label>
																					<input type="text" class="form-control" name="G_Fiyat" Disable>
																					</div>
																					<div class="form-group" id="mktarih">
																						<label>Başlangıç Tarihi</label>
																						<div class="form-group">
																						<input name="K_Tarih" id="K_Tarih" type="text" class="form-control datepicker-input" data-mask="9999-99-99" placeholder="Yıl-Ay-Gün" Readonly>
																						</div>
																					</div>
																			</div>
																			<div class="col-sm-6">
																					<div class="form-group" id="msfiyat">
																					<label>Kampanyalı Tutar</label>
																					<input type="text" class="form-control" placeholder="Boş Geçildiği Taktirde Cari Hesaplayamazsınız..!" name="S_Fiyat" id="S_Fiyat">
																					</div>
																					<div class="form-group" id="mstarih">
																						<label>Bitiş Tarihi</label>																						
																						<input name="S_Tarih" id="S_Tarih" placeholder="Boş Geçildiği Taktirde STT Değerini Sorgulayamazsınız..!" type="text" class="form-control datepicker-input" data-mask="9999-99-99" placeholder="Yıl-Ay-Gün" Readonly>																						
																					</div>
																			</div>
																	</div>
									</div>
												<div class="col-sm-6">
										
																	<div class="row">
																			<div class="col-sm-6">
																				<div class="form-group" id="msadet">
																					<label>Hediye Hizmet</label>
																					<input type="text" class="form-control" name="S_Adet">
																				</div>
																				<div class="form-group" id="msadet">
																					<label>Hediye Ürün</label>
																					<input type="text" class="form-control" name="S_Adet">
																				</div>
																				<div class="form-group" id="muturu">
																					<label>Tekrar Durumu</label>																						
																							<select class="form-control" name="U_Turu">
																								<option>Paket Boyunca</option>
																								<option>1 Defaya Mahsus</option>
																								<option>Sürekli</option>																							
																							</select>																						
																				</div>
																				<div class="form-group" id="muturu">
																					<label>Geçerlilik Durumu</label>																						
																							<select class="form-control" name="U_Turu">
																								<option>Tüm Müşteriler</option>
																								<option>1000TL ve Üzeri</option>
																								<option>1500TL ve Üzeri</option>
																								<option>2000TL ve Üzeri</option>
																							</select>																						
																				</div>
																				<div class="form-group" id="mkdurum">
																					<label>Web Sitede Göster?</label>																						
																							<select class="form-control" name="K_Durum">
																								<option value="-1">Seçiniz...</option>
																								<option value="1">Evet</option>
																								<option value="0">Hayır</option>
																							</select>																						
																				</div>
																				<div class="form-group" id="mkdurum">
																					<label>Web Sitede Göster?</label>																						
																							<textarea class="form-control" style="resize: none; overflow-y: scroll;" data-bv-field="Contactmessage"></textarea>																						
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
												<th>Kampanya Kodu</th>
												<th>Hizmet İçeriği</th>
												<th>Ürün İçeriği</th>
												<th>Başlama Tarihi</th>
												<th>Bitiş Tarihi</th>
												<th>Tekrarlılık Durumu</th>
												<th>Geçerlilik Skalası</th>
												<th>Durum</th>
												<th data-sortable="false">Ayar</th>
											</tr>
										</thead>
										
										<tbody>
											<tr>
												<td>BzLzEkp</td>
												<td>ko,kü,ybck</td>
												<td>Cilt Koruma Kremi 50Ml</td>
												<td>11.12.2018</td>
												<td>11.12.2019</td>
												<td>1 Defa</td>
												<td>1500TL üstü Müşteriler</td>
												<td><span class="label label-success">Aktif</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>BzLzEkp</td>
												<td>ax,omz,ko,kü,ybck</td>
												<td>2xCilt Koruma Kremi 50Ml</td>
												<td>11.12.2018</td>
												<td>11.12.2019</td>
												<td>1 Defa</td>
												<td>2500TL üstü Müşteriler</td>
												<td><span class="label label-warning">Deaktif</span></td>
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
					</div></div>