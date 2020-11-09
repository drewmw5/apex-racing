<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=<?php echo $desc; ?>>

    <script defer src="js/jquery-3.5.1.min.js"></script>
    <script defer src="js/bootstrap.min.js"></script>
    <script defer src="js/calendar.min.js"></script>
    <!-- <script defer src="js/my-calendar.min.js"></script> -->
    <script defer src="js/index.min.js"></script>
    <script>

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
    googleCalendarId: 'c_un0ld6k7nuvv85n5q3qevpl3ds@group.calendar.google.com'
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

</script>

    <!-- Font Awesome JS -->
    <script defer src="js/all.min.js"></script>
    <!--load all styles -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/calendar.min.css">
    <link rel="stylesheet" href="css/styles.min.css">

    <link rel="icon" href="images/Apex-A-symbol (1).jpg">

    <link rel="canonical" href=<?php echo $canonical; ?> />

    <title>Apex Tech Racing<?php echo $title; ?></title>

</head>

<body>