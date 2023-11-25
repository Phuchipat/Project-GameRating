<?php 
session_start();
date_default_timezone_set("Asia/Bangkok");
$date = date("Y-m-d H:i:s");
function connDB(){

    $host	  = "127.0.0.1";                            // Mysql Host
    $port     = "3306";                                 // Mysql Port
    $username = "root";                                 // Mysql Username
    $password = "";                                     // Mysql Password
    $database = "data_web";                             // Mysql Database Name

    $db_host  = $host.":".$port;
    @$conn= mysqli_connect($db_host,$username,$password,$database)or die("Cannont connect to mysql | ".mysqli_connect_error($conn));
    mysqli_set_charset($conn,"utf8");
    return $conn;
}

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>