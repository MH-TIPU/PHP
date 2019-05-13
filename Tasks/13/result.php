<?php

    class profile{

        var $name;
        var $email;
        var $phone;


        public function __construct($name, $email,$phone)
        {
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
        }


        public function welcome(){
            return "Welcome <b>". $this->name . " </b>Your Email is <b>". $this->email. "</b> and phone no is : <b>". $this->phone . "</b>.";
        }

    }



    $profile = new profile($_POST["name"], $_POST["email"], $_POST["phone"]);

    echo $profile->welcome();


?>