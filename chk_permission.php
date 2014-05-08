<?php //permission 允许 批准 
	if(isset($_SESSION["uId"]) && isset($_SESSION["rName"])){
		//说明已经登录，再去验证是否是管理员
		if($_SESSION["uType"] != 2){
			echo "<script>";//注册的类型
			echo "alert('您没有权限访问！');";
			echo "window.location.href = 'index.php';";
			echo "</script>";
		}
	}else{
		//说明没有登录，则跳转到首页  
		echo "<script>";
		echo "alert('请先登录！');";
		echo "window.location.href = 'index.php';";//弹出首页
		echo "</script>";
	}
?>