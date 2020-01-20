<?php

ini_set('session.use_cookies', true);
ini_set('session.save_path', '/var/lib/php7/');

$con = mysql_connect('srv-pleskdb33.ps.kz:3306', 'nemon_shop', 'L@r@vel123') 
or die("Database is down");

//select a database to work with
mysql_select_db("nemonsco_shopping_cart", $con);
mysql_set_charset("utf8", $con);

?>