<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login</title>
</head>

<body>
	<div class="login-div">
    	<form action="" method="post">
            <table class="tbl" align="center">
                <tr>
                    <td>用户名</td>
                    <td><input type="text" name="userName" /></td>   <!--name="userName" 检查登录页面login.php接受也一样-->
                </tr>
                <tr>
                    <td>密码</td>
                    <td><input type="password" name="password" /></td> <!--type="password" 密码不显示数字 显示小点点-->
                </tr>
                <tr>
                    <td colspan="2" align="center">
                    	<input id="submitBtn" class="button expand" type="button" value="登录" />
                        <div class="msg"></div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
<script>
	//使用 jQuery
	$( document ).ready(function() {
		$("#submitBtn").click(function(){
			
			//序列化Form表单的值 {userName:zhangsan,password:123}
			var _data = $("form").serialize();
			
			//使用Ajax方式提交（异步请求 ，当前页面不跳转）
			$.post( "check_login.php", _data, function( reData ) {
				if($.trim(reData) == "Y"){
					$(".msg").html("<font color='green'>恭喜你，登录成功！</font>").fadeIn("slow",function(){
						window.location.reload();
					});
				}else{
					$(".msg").html("<font color='red'>登录失败，请重试！</font>").fadeIn("slow");
				}
			});
		});
	});
</script>
</body>
</html>