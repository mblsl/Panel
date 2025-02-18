$(function () {    
    function runCalendar() {
        var $modal = $('#event-modal');
        $('#draggable-events div.draggable-event').each(function () {
            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };
            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);
            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true, // will cause the event to go back to its
                revertDuration: 20 //  original position after the drag
            });
        });
        /*  Initialize the calendar  */
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var form = '';
        var calendar = $('#calendar').fullCalendar({
            slotDuration: '00:15:00', /* If we want to split day time each 15minutes */
            minTime: '07:00:00',
            maxTime: '24:00:00',          
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: [{
                title: 'Taksdsdsdsills!',
                start: new Date(y, m, 2),
                className: 'bg-darkblue-2'
            }, {
                title: 'Visit Doctor',
                start: '2018-07-25 14:00:00',
                start: '2018-07-25 15:00:00',
                className: 'bg-red-1'
            }],
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function (date, allDay) { // this function is called when something is dropped
                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');
                var $categoryClass = $(this).attr('data-class');
                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);
                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                if ($categoryClass)
                    copiedEventObject['className'] = [$categoryClass];
                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },

            selectable: true,
            eventClick: function (calEvent, jsEvent, view) {
                var form = $("<form></form>");
                form.append("<div class='row'></div>");
                form.find(".row").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Randevu Notu</label><input class='form-control' placeholder='xxx Yapıldı gibi..' type='text' name='title'/></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Sonraki Randevu Tarihi</label><input class='form-control' placeholder='Sonraki randevu tarihini giriniz..' type='text' name='title'/></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>TL cinsinden alınan Miktar</label><input class='form-control' placeholder='Miktar' type='text' name='title'/></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Sonraki Randevu Saati</label><input class='form-control' placeholder='Sonraki randevu Saatini giriniz..' type='text' name='title'/></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Ödeme Türü</label><select class='form-control' name='category'></select></div></div>").find("select[name='category']").append("<option value='bg-red'>Nakit</option>")
                    .append("<option value='bg-green-1'>Kredi Kartı</option>").append("<option value='bg-pink-1'>Veresiye</option>");
                $modal.modal({
                    backdrop: 'static'
                });
                $modal.find('.delete-event').show().end().find('.save-event').hide().end().find('.modal-body').empty().prepend(form).end().find('.delete-event').unbind('click').click(function () {
                    calendar.fullCalendar('removeEvents', function (ev) {
                        return (ev._id == calEvent._id);
                    });
                    $modal.modal('hide');
                });
                $modal.find('form').on('submit', function () {
                    calEvent.title = form.find("input[type=text]").val();
                    calendar.fullCalendar('updateEvent', calEvent);
                    $modal.modal('hide');
                    return false;
                });
            },
            select: function (start, end, allDay) {
                $modal.modal({
                    backdrop: 'static'
                });
                form = $("<form></form>");
                form.append("<div class='row'></div>");
                form.find(".row").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Randevu Adı</label><input class='form-control' placeholder='Randevu Adını Giriniz Örn:Müşteri İsmi' type='text' name='title'/></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Müşteri Adı</label><input class='form-control' placeholder='Müşteri Adını Giriniz' type='text' name='title'/></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Müşteri Soyadı</label><input class='form-control' placeholder='Müşteri Soyadını Giriniz' type='text' name='title'/></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Telefon Numarası</label><input class='form-control' placeholder='5xx xxx xx xx' type='text' name='title'/></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Kategori</label><select class='form-control' name='category'></select></div></div>").find("select[name='category']").append("<option value='bg-red'>Lazer Epilasyon</option>")
                    .append("<option value='bg-green-1'>Buz Lazer</option>").append("<option value='bg-lightblue-1'>İğneli Epilasyon</option>").append("<option value='bg-red-1'>Cilt Bakımı</option>").append("<option value='bg-blue-1'>Dermaroller</option>");
                $modal.find('.delete-event').hide().end().find('.save-event').show().end().find('.modal-body').empty().prepend(form).end().find('.save-event').unbind('click').click(function () {
                    form.submit();
                });
                $modal.find('form').on('submit', function () {
                    title = form.find("input[name='title']").val();
                    $categoryClass = form.find("select[name='category'] option:checked").val();
                    if (title !== null && title.length != 0) {
                        calendar.fullCalendar('renderEvent', {
                            title: title,
                            start: start,
                            end: end,
                            allDay: false,
                            className: $categoryClass
                        }, true);  
                    }
                    else{
                        alert('Randevu Adını Boş Bırakamazsın!');
                    }
                    $modal.modal('hide');
                    return false;
                });
                calendar.fullCalendar('unselect');
            }

        });
    }

    runCalendar();

});