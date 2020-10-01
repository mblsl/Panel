<script type="text/javascript">
$("body").on("click","#randevutakvim",function(){ 
	
});		
</script>
<div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
               <!-- Search form -->
                <form role="search" class="navbar-form">
                    <div class="form-group">
                        <input type="text" placeholder="Ara" class="form-control">
                        <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                    </div>
                </form>
                <div class="clearfix"></div>
                <!--- Profile -->
                <div class="profile-info">
                    <div class="col-xs-4">
                      <a href="#" class="rounded-image profile-image"><img src="images/users/user-100.jpg"></a>
                    </div>
                    <div class="col-xs-8">					
                        <div class="profile-text">Hoşgeldin <b>
						<?php if(isset($_SESSION["kullanici"])){ echo $_SESSION["kullanici"];}?></b></div>
                        <div class="profile-buttons">
                          <a href="javascript:;"><i class="fa fa-envelope-o pulse"></i></a>
                          <a href="#connect" class="open-right"><i class="fa fa-comments"></i></a>
                          <a href="cikis.php" title="Sign Out"><i class="fa fa-power-off text-red-1"></i></a>
                        </div>
                    </div>
                </div>
                <!--- Divider -->
                <div class="clearfix"></div>
                <hr class="divider" />
                <div class="clearfix"></div>
                <!--- Divider -->				
                <div id="sidebar-menu">
                    <ul>
                    <li><a href='index.php'><i class='icon-home-3'></i><span>Anasayfa</span></a>
                    </li>
                    <li class='has_sub'><a href='javascript:void(0);'><i class='icon-feather'></i><span>Tanımlamalar</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                    <li><a href="javascript:;" data-app="hztnm" onclick="aclose('hztnm');" data-status="inactive"><span>Hizmet ve Hizmet Paketleri Tanımlama</span></a></li>
                    <li><a href="javascript:;" data-app="kmptnm" onclick="aclose('kmptnm');" data-status="inactive"><span>Kampanya Tanımlama</span></a></li>
                    <li><a href="javascript:;" data-app="uruntnm" onclick="aclose('uruntnm');" data-status="inactive"><span>Ürün Tanımlama</span></a></li>
					<li><a><span>Çekiliş Robotu</span></a></li>
                    </ul></li>
                    <li class='has_sub'><a href='javascript:void(0);'>
                    <i class='icon-pencil-3'></i><span>Satış İşlemleri</span><span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul>
                   
                    <li><a href="javascript:;" data-app="urunsts" onclick="aclose('urunsts');" data-status="inactive"><span>Ürün Satışı</span></a></li></ul></li>
                    <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-table'></i><span>Müşteri Ks.</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                    <li><a href="javascript:;" data-app="msks" onclick="aclose('msks');" data-status="inactive"><span>Müşteri Ekleme/Güncelleme</span></a></li>
                    <li><a href="javascript:;" data-app="randtak" onclick="aclose('randtak');" data-status="inactive"><span>Randevu Takvimi</span></a></li>

                    </ul>
                    </li>
                    <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-map-marker'></i><span>Personel İşlemleri</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
					<li><a href="#" class="widget-close"><span>Yeni Personel Ekleme</span></a></li>
                    <li><a href='google-maps.html'><span>Yetkilendirme</span></a></li>
                    <li><a href='vector-maps.html'><span>Hizmet Yeri Değişimi</span></a></li>
                    </ul></li>
                    <li class='has_sub'><a href='javascript:void(0);'>
                    <i class='fa fa-envelope'></i><span>Web Haberleşme Modülleri</span> <span class="pull-right">
                    <i class="fa fa-angle-down"></i></span></a>
                    <ul>
					<li><a href='basvurugoruntu.php'><span>Web Başvuruları ve Teklifleri</span></a></li>
					<li><a href='basvurugoruntu.php'><span>Sms Modülü</span></a></li>
                    </ul>
                    </li>
                    <li class='has_sub'><a href='javascript:void(0);'>
                    <i class='icon-chart-line'></i><span>Gelir/Gider Takibi</span> <span class="pull-right">
                    <i class="fa fa-angle-down"></i></span></a>
                    <ul>
                    <li><a href='gelir.php'><span>Gelir Tablosu</span></a></li>
					<li><a href='veresiye.php'><span>Veresiye Defteri</span></a></li>
                    <li><a href='morris-charts.html'><span>Gider Tablosu</span></a></li>
                    <li><a href='rickshaw-charts.html'><span>Gelir/Gider Grafiği</span></a></li>
                    <li><a href='other-charts.html'><span>Banka Hesaplarım</span></a></li>
                    </ul>
                    </li>
                    <li class='has_sub'><a href='javascript:void(0);'><i class='icon-megaphone'></i><span>Depo Takip</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
					<li><a href='login.html'><span>Ürün Ekleme/Çıkarma</span></a></li>
                    <li><a href='blank.html'><span>Stok Durumu</span></a></li>
					<li><a href='register.html'><span>Çıkan Ürün Listesi</span></a></li>
					<li><a href='register.html'><span>Çıkan Ürün Listesi</span></a></li>
					<li><a href='register.html'><span>En Çok Tüketilenler</span></a></li>					
					</ul></li>               
					<div class="clearfix"></div>
                </div>                
            <div class="clearfix"></div>
            <div class="portlets">
                

            </div>
            <div class="clearfix"></div><br><br><br>
        </div>
            <div class="left-footer">
                
            </div>
        </div>