 <?php
	//连接数据库
	include_once("db_conn.php");
	//接受前端值
	$_userName = $_POST["userName"];
	$_password = $_POST["password"];
	//拼写SQL语句    查询名字 密码 数据
	$sQuery = "SELECT * FROM users WHERE user_name = '".$_userName."' AND password = '".$_password."'";
	//执行语句
	$userList = mysql_query($sQuery);	
	$num = mysql_num_rows($userList);// 返回结果集中行的数目 
	if($num>0){//$num>0 说明有两行已经记录 可以登入了
		$user = mysql_fetch_array($userList);//循环一行结果
		session_start();// 开启session
		$_SESSION['rName'] = $user["real_name"];//方便于前面的使用
		$_SESSION['uId'] = $user["id"];
		$_SESSION['uType'] = $user["user_type"];// SESSION 有记忆功能添加一个 记录一个 
		echo "Y";
	}else{
		echo "N";	// 不可以登入
	}
	mysql_free_result($userList);//函数释放结果内存
	mysql_close($conn);//函数关闭非持久的MySQL 连接
?>
