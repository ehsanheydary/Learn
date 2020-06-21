<?php

class Post extends Db
{
    public function __construct()
    {
        $this->table = 'posts';
    }

    public function Get_All_Payment_By_User_Id($user_id)
    {
        return "Select * From {$this->table} WHERE payment_user_id = {$user_id}";
    }
}