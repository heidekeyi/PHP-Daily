<?php

namespace daily\public\api;

class Api
{
    static public function header()
    {
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods: GET, POST, DELETE, PUT, OPTIONS');
    }

    static public function load()
    {
        include '../back-end-with-php/bootstrap.php';
    }
}

Api::header();
Api::load();