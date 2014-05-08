<?php
	include_once("header_admin.php");
	include_once("chk_permission.php");
	include_once("db_conn.php");
	$_goods_name = $_POST["goods_name"];
	$_goods_type = $_POST["goods_type"];
	$_jiage = $_POST["jiage"];
	$_tupian = $_POST["tupian"];
	$_kucunshu = $_POST["kucunshu"];
	$_biaoqian = $_POST["biaoqian"]; 
	$_shifoushangjia = $_POST["shifoushangjia"]; 
	$_shifouxinpin = $_POST["shifouxinpin"]; 
	$_shifoutuijian = $_POST["shifoutuijian"]; 
	$_shangpinmiaoshu= $_POST["shangpinmiaoshu"];
	 
	$iQuery = "insert into goods(
		goods_name,
		goods_type,
		jiage,
		tupian,
		rukucaozouyuan,
		rukuriqi,
		kucunshu,
		shangjiariqi,
		shangjiacaozouyuan,
		biaoqian,
		shifoushangjia,
		shifouxinpin,
		shifoutuijian,
		shangpinmiaoshu
	) values (
		'".$_goods_name."',
		'".$_goods_type."',
		".$_jiage.",
		'".$_tupian."',
		".$_SESSION['uId'].",
		'".date('Y-m-d H:i:s')."',
		'".$_kucunshu."',
		'".date('Y-m-d H:i:s')."',
		".$_SESSION['uId'].",
		'".$_biaoqian."',
		'".$_shifoushangjia."',
		'".$_shifouxinpin."',
		'".$_shifoutuijian."',
		'".$_shangpinmiaoshu."'
	)";
	echo $iQuery;
	mysql_query($iQuery);
	mysql_close($conn);
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
    <br /><br /><!--保存后页面显示-->
    &nbsp;&nbsp;&nbsp;&nbsp;录入成功！ <a href="goods_type.php">继续录入</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="show_goods.php">查看商品</a>
</div>
<?php include_once("footer_admin.php"); ?>

