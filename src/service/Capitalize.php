<?php


namespace App\service;


class Capitalize
{
    public function firstUpper($str){
        return ucfirst(mb_strtolower($str));
    }
}