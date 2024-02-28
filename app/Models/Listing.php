<?php 
namespace App\Models;

class Listing{
    public static function all(){
        return [
            [
                "id" => 1,
                "title" => "first place",
                "description" => " bla 1. bla 2 bla 3"
            ],
            [
                "id" => 2,
                "title" => "second try",
                "description" => "tla 1 , tla 2 , tla3"
            ]
            ];

    }
};