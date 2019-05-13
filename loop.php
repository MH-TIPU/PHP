
<h1>For Loop</h1>

<?php
    for($i = 0; $i < 10; $i++){
    echo " $i <br>";


    }

?>

</br>

<h1>ForEach Loop</h1>


<?php

$arr = array(1,2,3,4,5);

foreach ($arr as $ar){
    echo "$ar <br>";
}
?>


</br>

<h1>While Loop</h1>

<?php
    $i = 1;
    while($i <= 10){
        echo "$i <br>";
        $i++;
    }

?>

