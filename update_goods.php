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
	</div><!--//修改商品的页面 接受edit_goods.php 里面的名字 可以单独使用效果没有后台页面-->
        <div id="right">
			<?php //修改商品的页面 接受edit_goods.php 里面的名字
                $_goodsId = $_POST["goodsId"];
                $_goods_name = $_POST["goods_name"];
                $_goods_type = $_POST["goods_type"];
                $_jiage = $_POST["jiage"];
                $_tupian = $_POST["tupian"];
                $_kucunshu = $_POST["kucunshu"];
				if(isset($_POST['biaoqian'])){
					$_biaoqian = $_POST["biaoqian"];
				}else{
					$_biaoqian = "";	
				}
                $_shifoushangjia = $_POST["shifoushangjia"];
                $_shifouxinpin = $_POST["shifouxinpin"];
                $_shangpinmiaoshu = $_POST["shangpinmiaoshu"];
                include_once("db_conn.php"); //注意表里面字段对应的值；与上面接收到的保持一致
                $uQuery = "UPDATE goods SET
					goods_name='".$_goods_name."',
					goods_type='".$_goods_type."',
					jiage='".$_jiage."',
					tupian='".$_tupian."',
					rukucaozouyuan='".$_SESSION['uId']."', 
					kucunshu='".$_kucunshu."',
					shangjiacaozuoyuan='".$_SESSION['uId']."',
					biaoqian='".$_biaoqian."',
					shifoushangjia='".$_shifoushangjia."', 
					shifouxinpin='".$_shifouxinpin."',
					shangpinmiaoshu='".$_shangpinmiaoshu."'
				WHERE id = ".$_goodsId."";
                mysql_query($uQuery);
                mysql_close();
            ?>
                <!--rukucaozouyuan='".$_SESSION['uId']."', 接受的是session里面的id-->
            修改成功！ <a href="edit_goods.php?goodsId=<?php echo $_goodsId ?>">返回</a> | <a href="index.php">首页</a>
        </div>        
    </div>
<?php include_once("footer_admin.php"); ?>