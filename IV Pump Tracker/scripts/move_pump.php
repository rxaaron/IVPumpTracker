<?php

    include_once('dbconn.php');
    
    $to = filter_input(INPUT_POST,'moveto');
    $from = filter_input(INPUT_POST,'movefrom');
    
    $update1 = $db->query("UPDATE Pump_Location SET Pump=true WHERE Location='".$to."';");
    if($update1){
        $update2 = $db->query("UPDATE Pump_Location SET Pump=false WHERE Location='".$from."';");
        if($update2){
            echo "OK";
        }else{
            echo "NO";
        }
    }