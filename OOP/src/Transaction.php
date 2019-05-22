<?php
/**
 * Created by PhpStorm.
 * User: MH TIPU
 * Date: 5/22/2019
 * Time: 11:37 AM
 */

namespace Dir;


interface Transaction
{
    public function deposit($balance);
    public function withdrow($balance);
}