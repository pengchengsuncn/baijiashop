<?php
	include_once("db_conn.php");
	
	$_user_name = $_POST["user_name"];
	$_password = $_POST["password"];
	$_real_name = $_POST["real_name"];
	$_gender = $_POST["gender"];
	$_address = $_POST["address"];                             
	$_qq = $_POST["qq"];
	$_email = $_POST["email"];
	$_telephone = $_POST["telephone"];                                                       
	$_birthday = $_POST["birthday"];
			 
	$iQuery = "insert into users(
		user_name,
		password,
		real_name,
		gender,
		address,
		qq,
		email,
		telephone,
		birthday,
		user_type
	) values (
		'".$_user_name."',
		'".$_password."',
		'".$_real_name."',
		'".$_gender."',
		'".$_address."',
		'".$_qq."',
		'".$_email."',
		'".$_telephone."',
		'".$_birthday."',
		1
	)";

	mysql_query($iQuery);
	mysql_close($conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>会员注册页面</title>
<link rel="stylesheet" type="text/css" href="style/foundation5/css/foundation.min.css"/>
<link rel="stylesheet" type="text/css" href="style/base.css"/>
</head>
<body>
<div id="header">
	<nav class="top-bar" data-topbar="">
        <ul class="title-area">
            <li class="name">
            <h1><a href="#">百家商城</a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
        </ul>
        <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
            <li><a href="users.php">注册</a></li>
            <li><a href="#">登录</a></li>
            <!--
            <li class="has-dropdown"><a href="#">Right Button Dropdown</a>
                <ul class="dropdown">
                    <li><a href="#">First link in dropdown</a></li>
                </ul>
            </li>
            -->
        </ul>
        
        <!-- Left Nav Section
        <ul class="left">
            <li><a href="#">Left Nav Button</a></li>
        </ul>
         -->
        </section>
	</nav>
</div>
<div id="nav">
	<div class="menu">
    	<dl class="sub-nav">
            <dd class="active"><a href="index.php">首页</a></dd>
            <dd><a href="#">服装</a></dd>
            <dd><a href="#">食品</a></dd>
            <dd><a href="#">家具</a></dd>
        </dl>
	</div>
</div>
<div id="box">
	<div id="left">
    	<ul class="side-nav">
            <li><a href="#">图书</a></li>
            <li><a href="#">手机</a></li>
            <li><a href="#">生活</a></li>
            <li><a href="#">旅行</a></li>
        </ul>
	</div>
	<div id="right">
    	<br />
        恭喜你 <?php echo $_real_name; ?>，您已经注册成功。
        <br />您的注册信息如下：
        <br /><br />
        <span class="label">用户名：</span> <?php echo $_user_name; ?>
        <br />
        <span class="label">真实名：</span> <?php echo $_real_name; ?>
        <br />
        <span class="label">姓别：</span> <?php echo $_gender; ?>
        <br />
        <span class="label">地址：</span> <?php echo $_address; ?>
        <br />
        <span class="label">QQ：</span> <?php echo $_qq; ?>
        <br />
        <span class="label">邮箱：</span> <?php echo $_email; ?>
        <br />
        <span class="label">电话：</span> <?php echo $_telephone; ?>
        <br />
        <span class="label">生日：</span> <?php echo $_birthday; ?>
        <br /><br  />
        <a class="tiny button secondary" href="#">登录</a>&nbsp;&nbsp;<a class="tiny button secondary" href="#">首页</a>
	</div>
</div>
<div id="footer">
	<h1 align="center"></h1>
</div>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="style/foundation5/js/foundation.min.js"></script>
<script>
	//使用 Foundation
	$(document).foundation();
	//使用 jQueryfi
	$( document ).ready(function() {
		
	});
</script>
</body>
</html>