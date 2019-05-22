<?php
/**
 * Created by PhpStorm.
 * User: MH TIPU
 * Date: 5/22/2019
 * Time: 11:34 AM
 */

namespace Dir;


class Account implements Transaction
{
    Private $account_number;
    Private $account_balance;

    public function getAccountNumber()
    {
        return $this->account_number;
    }


    private function setAccountNumber($account_number)
    {
        $this->account_number = $account_number;
    }


    public function getAccountBalance()
    {
        return $this->account_balance;
    }

    private function setAccountBalance($account_balance)
    {
        $this->account_balance = $account_balance;
    }


    public function deposit($balance)
    {
        $this->setAccountBalance($this->getAccountBalance()+ $balance);
    }

    public function withdrow($balance)
    {
        $this->setAccountBalance($this->getAccountBalance()- $balance);
    }
}