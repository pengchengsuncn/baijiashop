<?php include_once("header_admin.php"); ?>
<div id="nav" style="height:45px;">
	<div class="menu">
    	<ul class="breadcrumbs">
            <li class="unavailable"><a href="#">会员中心</a></li>
        </ul>
	</div>
</div>
<div id="box">
	<div id="left">
		<?php   //如果他们两个都存在，执行后面的
            if(isset($_SESSION["uId"]) && isset($_SESSION["rName"])){
                echo '<ul class="side-nav">';
				echo '<li><a href="user_profile.php">修改个人信息</a></li>';
                //判断如果是管理员
                if($_SESSION["uType"] == 2){
					echo '<li><a href="goods.php">添加商品信息</a></li>';
                	echo '<li><a href="show_goods.php">查看商品信息</a></li>';
                    echo '<li><a href="goods_type.php">添加商品类型</a></li>';
                    echo '<li><a href="goods.php">查看商品类型</a></li>';
                }
                echo "</ul>";
            }else{
                echo "<script>";	
                echo "alert('请先登录!');";
                echo "</script>";
            }
        ?>
	</div>
    <div id="right">
    	<br />
		<p align="center">欢迎进入百家商城后台管理系统</p>
    </div>
<?php include_once("footer_admin.php"); ?>