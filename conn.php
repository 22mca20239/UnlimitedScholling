<?php
defined('DB_HOST')or define('DB_HOST','localhost');
defined('DB_USER')or define('DB_USER','root');
defined('DB_PASS')or define('DB_PASS','Mysql@84096');
defined('DB_NAME')or define('DB_NAME','scroll');

$link=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if(!$link){
    echo "error";
}


?>

