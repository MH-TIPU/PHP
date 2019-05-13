<?php
    $arr = array('joy','bijoy','rifat','ruma','khan',1,2,4,6,8,9);



    foreach ($arr as $ar){
        echo $ar. '<br>';
    }


    echo '<br>';
echo "<h1>Sort </h1>";
    sort($arr);

    foreach ($arr as $ar){
        echo $ar. '<br>';
    }

    echo '<br>';
    echo "<h1>R Sort </h1>";
    rsort($arr);

    foreach ($arr as $ar){
        echo $ar. '<br>';
    }


echo '<br>';
echo "<h1>Length</h1>";
echo sizeof($arr);

