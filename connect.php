<?php
require_once('config.php');


$dbname = "articles";
//连接数据库
$con = new mysqli($servername, $username, $password, $dbname);

if($con->connect_error){
	die('连接失败');
}

?>