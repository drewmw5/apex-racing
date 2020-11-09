<?php
$url = "https://www.googleapis.com/calendar/v3/calendars/c_un0ld6k7nuvv85n5q3qevpl3ds@group.calendar.google.com/events?key=AIzaSyAQ43nWBGvG6ZoI88KchAfMBFwK0odQqyE";

$data = file_get_contents($url);

echo $data;