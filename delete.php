<?php
$action = $_POST['action'];
if($action == 'deleteItem'){
	//连接数据库
	require_once('connect.php');

	// //获取前端的数据
	$itemID = $_POST['id'];

	
	 
	
	// 把数据写入数据库
	$deleteSql = "DELETE FROM article WHERE id = $itemID";
	
 
	if ($con->query($deleteSql) === TRUE) {
	     $json = json_encode(array(
            "resultCode"=>200,
            "message"=>"删除成功！",
            "data"=>[]
        ),JSON_UNESCAPED_UNICODE);
        echo  $json;
	} else {
	    echo "Error: " . $deleteSql . "<br>" . mysqli_error($con);
	}

    }
?>