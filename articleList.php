<?php

//连接数据库
$action = $_GET['action'];
if($action == 'getList'){
require_once('connect.php');
 
$getInfoSql = "SELECT * FROM  article order by id ASC";
$result = $con->query($getInfoSql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		$data[] = $row;
    } 

    $json = json_encode(array(
            "resultCode"=>200,
            "message"=>"查询成功！",
            "data"=>$data
        ),JSON_UNESCAPED_UNICODE);
        
        //转换成字符串JSON
        echo($json);
}else{
     $json = json_encode(array(
            "resultCode"=>200,
            "message"=>"暂无数据",
            "data"=>''
        ),JSON_UNESCAPED_UNICODE);
        
        //转换成字符串JSON
        echo($json);
}

}

?>




