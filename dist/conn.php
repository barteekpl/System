<?php
define('DB_HOST','sql.s24.vdl.pl');
define('DB_USER','bleizer_system');
define('DB_PASS','******'); 
define('DB_DB','bleizer_system');
$connect = mysql_connect(DB_HOST, DB_USER, DB_PASS)
or die('Nie  danych. '.mysql_error());

mysql_select_db(DB_DB,$connect)
?>

