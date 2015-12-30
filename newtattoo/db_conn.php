<?php
$DB_HOST           ="sql108.er-webs.com";
$DB_LOGIN          ="erweb_15758647";
$DB_PASSWORD       ="ej04xjp6";
$DB_NAME           ="erweb_15758647_tattooshop";

$conn = mysql_connect($DB_HOST, $DB_LOGIN, $DB_PASSWORD);
if(!$conn){
	die('與資料庫伺服器連線 失敗: ' . mysql_error());
}
echo '與資料庫伺服器連線 成功';
$db_selected = mysql_select_db($DB_NAME);
if(!$db_selected){
	die ('無法使用資料庫 :'.$DB_NAME.')'. mysql_error());
}
mysql_query("SET NAMES 'utf8'");
?>