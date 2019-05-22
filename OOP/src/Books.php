<?php
/**
 * Created by PhpStorm.
 * User: MH TIPU
 * Date: 5/22/2019
 * Time: 11:26 AM
 */

namespace Dir;


class Books
{
    var $price;
    var $title;

    function __construct($title,$price )
    {
        $this->title =  $title;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        echo $this->price;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        echo  $this->title;
    }

}