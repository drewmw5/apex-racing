document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
  
    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,listYear'
      },
  
      displayEventTime: false, // don't show the time column in list view
  
      // THIS KEY WON'T WORK IN PRODUCTION!!!
      // To make your own Google API key, follow the directions here:
      // http://fullcalendar.io/docs/google_calendar/
      googleCalendarApiKey: 'AIzaSyAQ43nWBGvG6ZoI88KchAfMBFwK0odQqyE',
  
      // US Holidays
      events: {
      googleCalendarId: 
      'c_un0ld6k7nuvv85n5q3qevpl3ds@group.calendar.google.com'
    },
      eventClick: function(arg) {
  
        // opens events in a popup window
        window.open(arg.event.url, '_blank', 'width=700,height=600');
  
        // prevents current tab from navigating
        arg.jsEvent.preventDefault();
      }
  
    });
  
    calendar.render();
  });