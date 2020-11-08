$(document).ready(function () {
  viewFullImage();
  // getCalendar();
});

function viewFullImage() {
  $(".js-enlarge").click(function (e) {
    e.preventDefault();
    var image = $(this).attr("src");
    var title = $(this).attr("alt");

    $(".modal-title").html(title);
    $("#modal-img").attr("src", image);
    $("#modal").modal("show");
  });
}

// function getCalendar() {
//   $.ajax({
//     type: "POST",
//     url: "includes/php/SQL/calendar.php",
//     success: function (r) {
//       var calendar = JSON.parse(r);
//       return calendar
//     },
//   });
// }

document.addEventListener("DOMContentLoaded", function () {
  var calendarEl = document.getElementById("calendar");

  var calendar = new FullCalendar.Calendar(calendarEl, {
    headerToolbar: {
      left: "prev,next today",
      center: "title",
      right: "dayGridMonth,timeGridWeek,timeGridDay",
    },
    // initialDate: "2020-09-12",
    navLinks: true, // can click day/week names to navigate views
    selectable: true,
    selectMirror: true,
    // select: function (arg) {
    //   var title = prompt("Event Title:");
    //   if (title) {
    //     calendar.addEvent({
    //       title: title,
    //       start: arg.start,
    //       end: arg.end,
    //       allDay: arg.allDay,
    //     });
    //   }
    //   calendar.unselect();
    // },
    // eventClick: function (arg) {
    //   if (confirm("Are you sure you want to delete this event?")) {
    //     arg.event.remove();
    //   }
    //},
    editable: true,
    dayMaxEvents: true, // allow "more" link when too many events
    events: {
        url: 'includes/php/SQL/calendar.php',
        method: 'post',
    },
  });

  calendar.render();
});
