<?php


namespace App\classes;


class FullName
{
    public function getFullName ()
    {
        return $_POST['first_name']. ' '. $_POST['last_name'];
    }
}