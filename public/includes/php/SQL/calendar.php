<?php
require_once '../../../../dbconn.php';

$return = [];

if($stmt = $con->prepare('SELECT * FROM calendar')) {
    $stmt->execute();
    $stmt->bind_result($id, $group_type, $title, $url, $start, $end, $all_day);

    while($stmt->fetch()) {
         array_push($return, 
         
            $result = [
            "id" => $id, 
            "group_type" =>$group_type, 
            "title" => $title, 
            "url" => $url, 
            "start" => $start, 
            "end" => $end, 
            "all_day" => $all_day
            ]
        );

    }



}

echo json_encode($return);