<?php

    $array = array(1,2,3,4,1,5,6,4,3,8,9);
    $array = array_unique($array, SORT_NUMERIC);

    echo '<pre>';
    print_r($array);
    echo '<pre>';
?>