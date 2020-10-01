<script>
var $modal = $('#event-modal');	
 document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
	  slotDuration: '00:15:00',
	  minTime: '09:00:00',
      maxTime: '23:15:00',    
	  slotLabelInterval: 15,	  
	  locale: 'tr',
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
	  defaultDate: '2018-12-12 09:00:00',
	  defaultView: 'agendaWeek',	  
	  slotLabelFormat: [
		{ hour: '2-digit',
		  minute: '2-digit',
		  omitZeroMinute: false,
		  meridiem: 'long' 
		} 		 
	  ],       
	  buttonText:
	  {
		today:    'Bugün',
		month:    'Ay',
		week:     'Hafta',
		day:      'Gün',
		listWeek: 'Liste'
	  },  
	  
      editable: true,
	  nowIndicator: true,// Suanki saat kırmızı çizgi
      navLinks: true, // can click day/week names to navigate views
      eventLimit: true, // allow "more" link when too many events
	  selectable: true,	  
      selectMirror: true,
	  select: function(arg) {  
		$(".modal-dialog").show();
		$(".modal").show();	  
		$modal.modal({
                    backdrop: 'static'
                });
				form = $("<form></form>");
                form.append("<div class='row'></div>");
                form.find(".row").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Müşteri Adı</label><div id='myDropdown' class='dropdown-content'><input type='text' class='form-control' onkeyup='myFunction()' placeholder='Müşteri Arama..' id='myInput'/></div></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Seans Türü	</label><select class='form-control' id='hizmet_turu' name='category'></select></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Hizmet Türü</label><div id='myDropdown2' class='dropdown-content2'><input type='text' class='form-control' onkeyup='myFunction2()' placeholder='Hizmet Seçimi..' id='myInput2'/></div></div></div>").find("select[name='category']")<?php include("baglanti.php");$sorgu = $vt->query('select * from seanst where Durum="0" order by S_ID asc');while($seans = mysqli_fetch_assoc($sorgu)) {?>.append("<option value='bg-red-1'><?php echo $seans["S_Adi"];?></option>")<?php }mysqli_close($vt);?>;                    	
                $modal.find('.delete-event').hide().end().find('.save-event').show().end().find('.modal-body').empty().prepend(form).end().find('.save-event').unbind('click').click(function () {
                    //form.submit();
					
					var token3 = ((Math.floor(Math.random() * 99999))*(Math.floor(Math.random() * 99999)))-(Math.floor(Math.random() * 11968));
					document.cookie = "token="+token3;	
					$.ajax({
						type:"POST",
						url:"ajax/randevu/randkayit.php",
						data: {token: token3, MUDI : mudi, hizmet_turu: tamd.substring(0,tamd.length-1), tarih1 : arg.start, tarih2 : arg.end ,randtitle : $("#myInput").val(), randCName: "bg-red-1"},							
						success:function(sonuc){
							$(".modal-dialog").hide();
							$(".modal").hide();
							alert(sonuc);
							$.ajax({
							type:"POST",
							url:"assets/js/pages/json/rndkyt.php",
							data: {rndsttc : "rndsttcd", tarih1: arg.start, tarih2: arg.end, randtitle: $("#myInput").val(), randCName: "bg-red-1"},							
							success:function(snc){						
								alert(snc);								
							}
						});
						}
					});
                });
        calendar.unselect()
      },	  
	  eventClick: function(info) { 	
		var form = $("<form></form>");
                form.append("<div class='row'></div>");	
                form.find(".row").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>İşlemler</label><input class='form-control' placeholder='Gen,Kol vb' id='randislem' type='text' name='title' Disabled/></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Randevu Notu</label><input class='form-control' placeholder='xxx Yapıldı gibi..' id='randnot' type='text' name='title'/></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>(Sonraki Randevu) Tarihi</label><input id='srandtarih' class='form-control' type='date'  name='title'/></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>(Sonraki Randevu) Seans Türü	</label><select class='form-control' id='hizmet_turu' name='category2'><?php include("baglanti.php");$sorgu = $vt->query('select * from seanst where Durum="0" order by S_ID asc');while($seans = mysqli_fetch_assoc($sorgu)) {?>'<option value='bg-red-1'><?php echo $seans["S_Adi"];?></option>'<?php }mysqli_close($vt);?>;</select></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>(Sonraki Randevu) Başlangıç Saati</label><input id='srandsaat1' class='form-control' type='time' value='00:00' name='title'/></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>(Sonraki Randevu) Bitiş Saati</label><input id='srandsaat2' class='form-control' value='00:00' type='time'  name='title'/></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>(Sonraki Randevu) İşlemler</label><div id='myDropdown2' class='dropdown-content2'><input type='text' class='form-control' onkeyup='myFunction2()' placeholder='Hizmet Seçimi..' id='myInput2'/></div></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Toplam Tutar</label><input class='form-control' placeholder='0 TL' id='ttutar' type='text' name='title' Disabled /></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Alınan Tutar</label><input class='form-control' placeholder='700' type='text' id='rmiktar' name='title'/></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Ödeme Türü</label><select class='form-control' id='odeme_turu' name='category'></select></div></div>").find("select[name='category']").append("<option>Nakit</option>").append("<option>Kredi Kartı</option>").append("<option>Veresiye</option>").find("select[name='category2']")<?php include("baglanti.php");$sorgu = $vt->query('select * from seanst where Durum="0" order by S_ID asc');while($seans = mysqli_fetch_assoc($sorgu)) {?>.append("<option value='bg-red-1'><?php echo $seans["S_Adi"];?></option>")<?php }mysqli_close($vt);?>;
                $modal.modal({
                    backdrop: 'static'
                });				
                $modal.find('.delete-event').show().end().find('.save-event').hide().end().find('.modal-body').empty().prepend(form).end().find('.delete-event').unbind('click').click(function () {
                    calendar.fullCalendar('removeEvents', function (ev) {
                        return (ev._id == calEvent._id);
						
                    });                   
                    $modal.modal('hide');				
                });	
mudn = info.event.title;				
                $modal.find('form').on('submit', function () {
                    calEvent.title = form.find("input[type=text]").val();
                    calendar.fullCalendar('updateEvent', calEvent);			
                    $modal.modal('hide');				
                    return false;					
                });	
var mo = mudn.split(" ");				
$.ajax({
						type:"POST",
						url:"ajax/randevu/randsonis.php",
						data: {dno : mo[0]},							
						success:function(sonuc){									
                            var hf = sonuc.split("-");
                            $("#randislem").attr("placeholder",hf[0]);
							 var cc =hf[1].replace(" ","");
                            $("#ttutar").attr("placeholder",cc);							
							//window.location ="randtak.php";	
						}
					});						
		},
      events: {
        url: 'assets/js/pages/php/get-events.php',        
      },
	  dateClick: function(info) {
	  // Boş Tıklama
	  }	  
	  ,
	  eventDragStart: function(info) {
		  	
	  },	  
	  eventDragStop: function(info) {	  	  
		  		
	  }, 
	  dragRevertDuration: function(info) {
	   
	  },
	  eventResize: function(info) {		
		var token6 = ((Math.floor(Math.random() * 99999))*(Math.floor(Math.random() * 99999)))-(Math.floor(Math.random() * 11968));
		document.cookie = "token="+token6;
		var dosno = info.event.title.split(" ");
		//alert(info.event.title + " was dropped on " +info.event.start.toISOString()+ " - "+info.event.end.toISOString()+" / "+dosno[0]);	
		$.ajax({
			type:"POST",
			url:"ajax/randevu/randup.php",
			data: {token: token6, dosyano: dosno[0], tarih1 : info.event.start, tarih2 : info.event.end ,randtitle : info.event.title},							
			success:function(sonuc){						
				alert(sonuc);
				$.ajax({
					type:"POST",
					url:"assets/js/pages/json/rndupdt.php",											
					success:function(snc){						
					  alert(snc);                      				  
					}
				});
			}
		});
	  },
	  eventDrop: function(info) {		
		var token4 = ((Math.floor(Math.random() * 99999))*(Math.floor(Math.random() * 99999)))-(Math.floor(Math.random() * 11968));
		document.cookie = "token="+token4;
		var dosno = info.event.title.split(" ");
		//alert(info.event.title + " was dropped on " +info.event.start.toISOString()+ " - "+info.event.end.toISOString()+" / "+dosno[0]);	
		$.ajax({
			type:"POST",
			url:"ajax/randevu/randup.php",
			data: {token: token4, dosyano: dosno[0], tarih1 : info.event.start, tarih2 : info.event.end ,randtitle : info.event.title},							
			success:function(sonuc){						
				alert(sonuc);
				$.ajax({
					type:"POST",
					url:"assets/js/pages/json/rndupdt.php",											
					success:function(snc){						
					  alert(snc);				  
					}
				});
			}
		});
		 	
	 }	  
    });
    calendar.render();
  });
</script>