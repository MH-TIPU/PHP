<?php


namespace Dir;
use Dir\Account;

class Person extends Account
{
    private $name;
    private $age;
    private $email;
    private $phone;




    function __construct($name, $age, $email, $phone)
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        $this->phone = $phone;
    }


    function showInfo(){
        echo "Name : " . $this->name . " Age : " . $this->age . " Email " . $this->email . " Phone " . $this->phone ;
    }



    function showBalance(){
        echo $this->getAccountBalance();
    }






}