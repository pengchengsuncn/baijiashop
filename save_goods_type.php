<?php

	include_once("db_conn.php");
	
	$_type_name = $_POST["type_name"];
	$_type_desc= $_POST["type_desc"];
	$iQuery = "insert into goods_type(
		type_name,
		type_desc
	) values (
		'".$_type_name."',
		'".$_type_desc."'
	)";
	mysql_query($iQuery);
	mysql_close($conn);
?>
<?php
include_once("header_admin.php");
include_once("chk_permission.php");
?>
<div id="nav" style="height:45px;">
	<div class="menu">
    	<ul class="breadcrumbs">
            <li><a href="user_center.php">会员中心</a></li>
            <li class="unavailable"><a href="#">商品信息</a></li>
            <li class="current"><a href="#">添加商品</a></li>
        </ul>
	</div>
</div>
<div id="box">
	<div id="left">
    	<ul class="side-nav">
        	<li><a href="goods.php">添加商品信息</a></li>
            <li><a href="show_goods.php">查看商品信息</a></li>
            <li><a href="goods_type.php">添加商品类型</a></li>
            <li><a href="show_goods_type.php">查看商品类型</a></li>
        </ul>
	</div>
<div id="right">
    <br /><br />
    &nbsp;&nbsp;&nbsp;&nbsp;录入成功！ <a href="goods_type.php">继续录入</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="show_goods_type.php">查看商品类型</a>
</div>
<?php include_once("footer_admin.php"); ?>
