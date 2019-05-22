<?php
    require ('vendor/autoload.php');


    use Dir\Person;

    $Rakib = new Person("Rakib","20","Rakib@gamil.com","01943695848");

    $Rakib->showInfo();

    $Rakib->deposit(10000);
    echo "<br>";
    $Rakib->withdrow(500);
    echo "<br>";
    $Rakib->showBalance();

?>