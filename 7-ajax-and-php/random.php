<?php
    $random_1 = rand(1,100);
    $random_2 = rand(1,100);
    $random_3 = rand(1,100);
    $random_4 = rand(1,100);
    $random_5 = rand(1,100);
    $random_6 = rand(1,100);
    $random_7 = rand(1,100);
    $random_8 = rand(1,100);
    $random_9 = rand(1,100);

    $jsonResponse = '{';
    $jsonResponse .= '"random_1" : "'  . $random_1 . '",';
    $jsonResponse .= '"random_2" : "'  . $random_2 . '",';
    $jsonResponse .= '"random_3" : "'  . $random_3 . '",';
    $jsonResponse .= '"random_4" : "'  . $random_4 . '",';
    $jsonResponse .= '"random_5" : "'  . $random_5 . '",';
    $jsonResponse .= '"random_6" : "'  . $random_6 . '",';
    $jsonResponse .= '"random_7" : "'  . $random_7 . '",';
    $jsonResponse .= '"random_8" : "'  . $random_8 . '",';
    $jsonResponse .= '"random_9" : "'  . $random_9 . '",';
    $jsonResponse .= '}';

    //echo $jsonResponse;