<?php

    include_once('dbconn.php');
    
    $select=$db->query("SELECT Location, Pump FROM Pump_Location;");
    
    $locations = array();
    
    while($results=$select->fetch_object()){
        $locations [$results->Location] = $results->Pump;
    }
    echo "<tr><thead><th>&nbsp;</th><th>Brier</th><th>Manor</th><th>Springfield</th><th>Encore</th></thead></tr>";
    echo "<tr><td>#Encore001</td><td draggable='true' id='brier1'>";
    if($locations['brier1']==1){
        echo "<i class='fa fa-check fa-3x'></i>";
    }
    echo"</td><td draggable='true' id='manor1'>";
    if($locations['manor1']==1){
        echo "<i class='fa fa-check fa-3x'></i>";
    }
    echo "</td><td draggable='true' id='springfield1'>";
    if($locations['springfield1']==1){
        echo "<i class='fa fa-check fa-3x'></i>";
    }
    echo "</td><td draggable='true' id='encore1'>";
    if($locations['encore1']==1){
        echo "<i class='fa fa-check fa-3x'></i>";
    }
    echo "</td></tr>";
        echo "<tr><td>#Encore002</td><td draggable='true' id='brier2'>";
    if($locations['brier2']==1){
        echo "<i class='fa fa-check fa-3x'></i>";
    }
    echo"</td><td draggable='true' id='manor2'>";
    if($locations['manor2']==1){
        echo "<i class='fa fa-check fa-3x'></i>";
    }
    echo "</td><td draggable='true' id='springfield2'>";
    if($locations['springfield2']==1){
        echo "<i class='fa fa-check fa-3x'></i>";
    }
    echo "</td><td draggable='true' id='encore2'>";
    if($locations['encore2']==1){
        echo "<i class='fa fa-check fa-3x'></i>";
    }
    echo "</td></tr>";
        echo "<tr><td>#Encore003</td><td draggable='true' id='brier3'>";
    if($locations['brier3']==1){
        echo "<i class='fa fa-check fa-3x'></i>";
    }
    echo"</td><td draggable='true' id='manor3'>";
    if($locations['manor3']==1){
        echo "<i class='fa fa-check fa-3x'></i>";
    }
    echo "</td><td draggable='true' id='springfield3'>";
    if($locations['springfield3']==1){
        echo "<i class='fa fa-check fa-3x'></i>";
    }
    echo "</td><td draggable='true' id='encore3'>";
    if($locations['encore3']==1){
        echo "<i class='fa fa-check fa-3x'></i>";
    }
    echo "</td></tr>";
        echo "<tr><td>#Encore004</td><td draggable='true' id='brier4'>";
    if($locations['brier4']==1){
        echo "<i class='fa fa-check fa-3x'></i>";
    }
    echo"</td><td draggable='true' id='manor4'>";
    if($locations['manor4']==1){
        echo "<i class='fa fa-check fa-3x'></i>";
    }
    echo "</td><td draggable='true' id='springfield4'>";
    if($locations['springfield4']==1){
        echo "<i class='fa fa-check fa-3x'></i>";
    }
    echo "</td><td draggable='true' id='encore4'>";
    if($locations['encore4']==1){
        echo "<i class='fa fa-check fa-3x'></i>";
    }
    echo "</td></tr>";