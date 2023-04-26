<?php
 if($_SERVER['HTTP_HOST'] == "localhost"){
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "cma_db");
 }else{
    define("DB_HOST", "dedi157.cpt3.host-h.net");
    define("DB_USER", "themaghvfx_1");
    define("DB_PASSWORD", "H2Xx7PU8dqZdVZ4i1AN8");
    define("DB_NAME", "themaghvfx_db1");
 }


$connect = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER, DB_PASSWORD);
//$connect->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
?>