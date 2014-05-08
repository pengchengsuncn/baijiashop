 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>会员注册页面</title>
<link rel="stylesheet" type="text/css" href="style/foundation5/css/foundation.min.css"/>
<link rel="stylesheet" type="text/css" href="js/colorbox-master/example3/colorbox.css"/>
<link rel="stylesheet" type="text/css" href="style/base.css"/>
</head>
<body>
<div id="header">
	<nav class="top-bar" data-topbar="">
        <ul class="title-area">
            <li class="name">
            <h1><a href="index.php">百家商城</a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
        </ul>
        <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
           <?php
		   		session_start();//从后面接受的值
				//如果这这名字(rName)存在，可以任意写 qq ...等
				if(isset($_SESSION["uId"]) && isset($_SESSION["rName"])){
					echo "<li><a href='#'>欢迎您 ".$_SESSION["rName"]."！</a></li>";
					echo "<li><a href='show_gouwuche.php'>[购物车]</a></li>";
					echo "<li><a href='user_center.php'>[会员中心]</a></li>";
					echo "<li><a id='logoutLink' href='javascript:void(0)'>[退出]</a></li>";
				}else{
					echo "<li><a href='users.php'>注册</a></li>";
            		echo "<li><a id='loginLink' href='javascript:void(0)'>登录</a></li>";
				}
			?>
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
            <dd><a href="">服装</a></dd>
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