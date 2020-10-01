<script>var mudi = 0;var tamd = "";</script>
		<div class="widget pageblock" id="randtak" style="display:none;">
		<div class="widget-header">
								<h2>Randevu Takvimi</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" id="w-close-rand" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
	            <div class="modal fade" id="event-modal">
	                <div class="modal-dialog">
	                    <div class="modal-content">
	                        <div class="modal-header">
	                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                            <h4 class="modal-title"><strong>Randevu Sistemi</strong></h4>
	                        </div>
	                        <div class="modal-body">
	                            <p></p>
	                        </div>
							
	                        <div class="modal-footer">
	                            <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
	                            <button type="button" class="btn btn-success save-event">Randevu Ekle</button>
	                            <button type="button" onClick="randson()" class="btn btn-danger delete-event" data-dismiss="modal">Randevuyu Sonlandır</button>
	                        </div>
	                    </div>
	                </div>
	            </div>
				
				<script>
				function randson()
				{
					var token4 = ((Math.floor(Math.random() * 99999))*(Math.floor(Math.random() * 99999)))-(Math.floor(Math.random() * 11968));
					document.cookie = "token="+token4;
					$.ajax({
						type:"POST",
						url:"ajax/randevu/randson.php",
						data: {token: token4,sira : eventidd ,randnot : $("#randnot").val(), randtarih : $("#srandtarih").val(), randsaat1 : $("#srandsaat1").val(), randsaat2 : $("#srandsaat2").val(), rmiktar : $("#rmiktar").val(), odemetur : $("#odeme_turu option:selected").text() },							
						success:function(sonuc){
							alert(sonuc);							
							//window.location ="randtak.php";	
						}
					});	
				}
				</script>
				
	            <!-- END MODAL -->
				<div class="row">
					<div class="col-md-12 portlets">
							<div class="widget-content padding">
								  <div id='calendar'></div>							 
							</div>
						</div>
					</div>
				</div>      
	<?php include("assets/js/pages/calendar.php");?>				
<script>
$(function(){
	try{
	document.getElementById("myDropdown").classList.toggle("show");
	document.getElementById("myDropdown2").classList.toggle("show");
	}catch(e){}
});
function myFunction()
{
if($("#myInput").val()=="")
{$(".alar").hide();	}
else
{
	$.ajax({
			type:"POST",
			url:"ajax/randevu/mustara.php",
			data: "like="+$("#myInput").val().trim(),
			success:function(sonuc){
				var parca = sonuc.split("*");
				var sayi = 0;
				$(".alar").hide();
				for(var c=0; c<parca.length-1; c++)
				{ 
					var parca2 = parca[c].split(")");
					if(c<12)
					$("#myDropdown").append("<a class='alar' id='alar"+parca2[0]+"' onclick='tikfonk("+parca2[0]+")' href='#'>"+parca2[2]+")"+parca2[1]+"</a>");sayi++;
				}				
			}														
		});	
}	
}
function tikfonk (Deger)
{
	var pa = $("#alar"+Deger).text().split(")");
	mudi = pa[0];
	$("#myInput").val($("#alar"+Deger).text());
	$(".alar").hide();
}

function myFunction2()
{
if($("#myInput2").val()=="")
{$(".alar2").hide();	}
else
{
	$.ajax({
			type:"POST",
			url:"ajax/randevu/hizmettur.php",
			data: "like="+$("#myInput2").val().trim(),
			success:function(sonuc){
				var parca = sonuc.split("*");
				var sayi = 0;
				$(".alar2").hide();
				for(var c=0; c<parca.length-1; c++)
				{ 
					var parca2 = parca[c].split(")");
					if(c<12)
					$("#myDropdown2").append("<a class='alar2' id='alar2"+parca2[0]+"' onclick='tikfonk2("+parca2[0]+")' href='#'>"+parca2[1]+"</a>");sayi++;
				}				
			}														
		});	
}	
}
function tikfonk2 (Deger)
{
	var parcala = $("#alar2"+Deger).text().split("-");
	if(tamd.search(parcala[1])<0)	
	{		
		var pa = $("#alar2"+Deger).text().split(")");					
		tamd+=parcala[1]+",";		
		var vti = tamd.substring(0,tamd.length-1);
		$("#myInput2").attr("placeholder",vti);
		$(".alar2").hide();
		$("#myInput2").val("");
	}	
	else
	{
		$(".alar2").hide();
		var vte = tamd.substring(0,tamd.length-1);
		$("#myInput2").attr("placeholder",vte);			
		$("#myInput2").val("");
	}
}

</script>
	