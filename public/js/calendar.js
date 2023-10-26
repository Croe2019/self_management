document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'timeGridWeek',
        locale: 'ja',
        headerToolbar: {
            left: "timeGridWeek,listWeek",
            center: "title",
            right: "today prev,next"
        },
        buttonText: {
            today: '今月',
            week: '週',
            list: 'リスト'
        },
        noEventsContent: '案件はありません',
        eventSources: [
            {
                url: '/get_events',
            },
        ],

    });
    calendar.render();
});
