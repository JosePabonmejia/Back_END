<?php
namespace App;
class validate{
    public static function email($value){
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}