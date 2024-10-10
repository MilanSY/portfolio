<?php

namespace App\Classes;

use App\Classes\Database;

class Process
{

    public static function processHeader(string $uri)
    {
    }

    public static function processDisconnect()
    {

        session_start();
        session_destroy();

        header("Location: ../home");
    }

}
