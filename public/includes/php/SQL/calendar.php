<?php
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    die("Method is not of type POST");
}

require_once '../../../../dbconn.php';

$return = [];

if($stmt = $con->prepare('SELECT * FROM calendar')) {
    $stmt->execute();
    $stmt->bind_result($id, $group_type, $title, $description, $url, $start, $end, $all_day, $classes);

    while($stmt->fetch()) {
         array_push($return, 
         
            $result = [
            "id" => $id, 
            "groupId" =>$group_type, 
            "title" => $title,
            "description" => $description,
            "url" => $url, 
            "start" => $start, 
            "end" => $end, 
            "allDay" => $all_day,
            "classNames" => $classes,
            ]
        );

    }



}

echo json_encode($return);