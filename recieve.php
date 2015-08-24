<?php
    $jsonReceived = $_REQUEST['json'];
    echo "The json received was: " . $jsonReceived;
    echo '<br />';
    $assoc_arr = json_decode($jsonReceived);
    print_r($assoc_arr);
?>