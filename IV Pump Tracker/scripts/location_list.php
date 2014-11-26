<?php

    include_once('dbconn.php');
    
    $select=$db->query("SELECT Location, Pump FROM Pump_Location;");
    
    $locations = array();
    
    while($results=$select->fetch_object()){
        $locations [$results->Location] = $results->Pump;
    }
    echo "<tr><thead><th>&nbsp;</th><th>Brier</th><th>Manor</th><th>Springfield</th><th>Main Street</th><th>Encore</th></thead></tr>";
    echo "<tr><td>#Encore001</td><td draggable='true' id='brier1'>";
    if($locations['brier1']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo"</td><td draggable='true' id='manor1'>";
    if($locations['manor1']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='springfield1'>";
    if($locations['springfield1']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='mstreet1'>";
    if($locations['mstreet1']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='encore1'>";
    if($locations['encore1']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td></tr>";
        echo "<tr><td>#Encore002</td><td draggable='true' id='brier2'>";
    if($locations['brier2']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo"</td><td draggable='true' id='manor2'>";
    if($locations['manor2']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='springfield2'>";
    if($locations['springfield2']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='mstreet2'>";
    if($locations['mstreet2']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='encore2'>";
    if($locations['encore2']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td></tr>";
        echo "<tr><td>#Encore003</td><td draggable='true' id='brier3'>";
    if($locations['brier3']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo"</td><td draggable='true' id='manor3'>";
    if($locations['manor3']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='springfield3'>";
    if($locations['springfield3']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='mstreet3'>";
    if($locations['mstreet3']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='encore3'>";
    if($locations['encore3']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td></tr>";
        echo "<tr><td>#Encore004</td><td draggable='true' id='brier4'>";
    if($locations['brier4']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo"</td><td draggable='true' id='manor4'>";
    if($locations['manor4']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='springfield4'>";
    if($locations['springfield4']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='mstreet4'>";
    if($locations['mstreet4']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='encore4'>";
    if($locations['encore4']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td></tr>";
            echo "<tr><td>#Encore005</td><td draggable='true' id='brier5'>";
    if($locations['brier5']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo"</td><td draggable='true' id='manor5'>";
    if($locations['manor5']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='springfield5'>";
    if($locations['springfield5']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='mstreet5'>";
    if($locations['mstreet5']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='encore5'>";
    if($locations['encore5']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td></tr>";
            echo "<tr><td>#Encore006</td><td draggable='true' id='brier6'>";
    if($locations['brier6']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo"</td><td draggable='true' id='manor6'>";
    if($locations['manor6']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='springfield6'>";
    if($locations['springfield6']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='mstreet6'>";
    if($locations['mstreet6']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='encore6'>";
    if($locations['encore6']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td></tr>";
                echo "<tr><td>#Encore07</td><td draggable='true' id='brier7'>";
    if($locations['brier7']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo"</td><td draggable='true' id='manor7'>";
    if($locations['manor7']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='springfield7'>";
    if($locations['springfield7']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='mstreet7'>";
    if($locations['mstreet7']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='encore7'>";
    if($locations['encore7']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td></tr>";
                echo "<tr><td>#Encore08</td><td draggable='true' id='brier8'>";
    if($locations['brier8']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo"</td><td draggable='true' id='manor8'>";
    if($locations['manor8']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='springfield8'>";
    if($locations['springfield8']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='mstreet8'>";
    if($locations['mstreet8']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td><td draggable='true' id='encore8'>";
    if($locations['encore8']==1){
        echo "<i class='fa fa-check fa-2x'></i>";
    }
    echo "</td></tr>";