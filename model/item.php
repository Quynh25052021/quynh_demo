<?php
class Item extends Db{
    public  function getAllItems(){
        $sql = self::$connection -> prepare("SELECT * FROM `items`");
        $sql -> execute();
        $items = array();
        $items = $sql -> get_result() ->fetch_assoc();
        return $items;
    }
}