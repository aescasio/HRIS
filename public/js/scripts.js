/**
 * Created by avescasio on 8/31/2017.
 */

// Target the div to render a full calendar view of events.index
$('#calendar').fullCalendar({
    theme: false,
    defaultView: 'month',

    header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
    },
    buttonText: {
        today: 'today',
        month: 'month',
        week: 'week',
        day: 'day'
    },
    //Random default events
    //timezone: 'Asia/Manila',
    events: events,

    editable: false,
    droppable: false, // this allows things to be dropped onto the calendar !!!
});

$('#start').datetimepicker();

$('#end').datetimepicker();

$(":input").inputmask();

$('#backgroundColor').colorpicker();

$('#borderColor').colorpicker();
