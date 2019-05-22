<?php
    require ('vendor/autoload.php');


    use Dir\Person;
    use Dir\Books;

    $Rakib = new Person("Rakib","20","Rakib@gamil.com","01943695848");

    $Rakib->showInfo();

    $book1 = new Books("math","200");
    $book2 = new Books("Bangla","100");

    echo "<br>";
    $book1->getTitle();
    echo "<br>";

    $Rakib->showBalance();

    echo "<br>";

    $Rakib->deposit(1000);

    $Rakib->showBalance();

    echo "<br>";

    $Rakib->withdrow(500);

    $Rakib->showBalance();


?>