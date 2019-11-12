<?php



$action = $_POST['action'];
if($action == 'add'){  
	//连接数据库
	require_once('connect.php');

	// //获取前端的数据
	$title = $_POST['title'];
	$auther = $_POST['authod'];
	$description = $_POST['description'];
	$content = $_POST['content'];
	//获取当前的时间
	$dateTime = date('Y-m-d h:i:s',time());

	

	// 把数据写入数据库
	$addSql = "INSERT  INTO  article(title,auther,description,content,dateline) VALUES  ('$title','$auther','$description','$content','$dateTime')";
	if ($con->query($addSql) === TRUE) {
	     $json = json_encode(array(
            "resultCode"=>200,
            "message"=>"添加成功！",
            "data"=>[]
        ),JSON_UNESCAPED_UNICODE);
        echo  $json;
	} else {
	    echo "Error: " . $addSql . "<br>" . mysqli_error($con);
	}


	
    }
?>