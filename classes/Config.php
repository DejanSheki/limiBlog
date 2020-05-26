<?php

    /*
        1. Change constants for DB_HOST, DB_NAME, DB_USER and DB_PASSWORD to fit your environment
        2. Rename file Config.php.example to Config.php
    
    */

    class Config {

        const DB_HOST = 'localhost';
        const DB_NAME = 'enter db name';
        const DB_SOURCE = 'mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME . ';charset=utf8';
        const DB_USER = 'root';
        const DB_PASSWORD = '';

    }

?>