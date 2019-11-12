<?php
$action = $_POST['action'];
if($action == 'check'){
	//连接数据库
	require_once('connect.php');

	// //获取前端的数据
	$itemID = $_POST['id'];
	
	 
	 
	// 把数据写入数据库
	$checkSql = "SELECT * FROM article WHERE id=$itemID";

	$result = $con->query($checkSql);

	// print_r($result);

	if($result->num_rows){
		$data[] = $result->fetch_assoc();
	};
	


	$json = json_encode(array(
            "resultCode"=>200,
            "message"=>"查询成功！",
            "data"=>$data
        ),JSON_UNESCAPED_UNICODE);
        
        //转换成字符串JSON
        echo($json);
    }
?>