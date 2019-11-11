<?php

$action = $_POST['action'];
if($action == 'fixInfo'){
	//连接数据库
	require_once('connect.php');

	// //获取前端的数据
	$itemID = $_POST['id'];
	$title = $_POST['title'];
	$authod = $_POST['authod'];
	$description = $_POST['description'];
	$content = $_POST['content'];
	
	
	
	
	$update = "UPDATE article SET title='$title',auther='$authod',description='$description',content='$content' WHERE id=$itemID ";

	

	$result = $con->query($update);

	if ($con->query($update) === TRUE) {
     
	} else {
	    echo "Error: " . $update . "<br>" . mysqli_error($con);
	}

	$json = json_encode(array(
            "resultCode"=>200,
            "message"=>"更新成功！",
            "data"=>[]
        ),JSON_UNESCAPED_UNICODE);
        
        //转换成字符串JSON
        echo($json);
    }
?>