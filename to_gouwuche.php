<?php include_once("header.php");?>
    <div id="right">
        <?php //如果isset 同时存在
			if(isset($_SESSION["uId"]) && isset($_SESSION["rName"])){
			}else{
				//说明没有登录，则跳转到首页  
				echo "<script>";
				echo "alert('请登录后再购买商品！');";
				echo "window.location.href = 'index.php';";
				echo "</script>";
			}
			// 查询商品的所有信息
			include_once("db_conn.php");
			$_goodsId = $_GET["goodsId"];
			$sQuery = "SELECT * FROM goods WHERE ID = ".$_goodsId."";
			$_goodsList = mysql_query($sQuery);
			$goods = mysql_fetch_array($_goodsList);
	         //插入购物车表的所有信息
			$iQuery = "
				INSERT INTO gouwuche(
					user,goods,goods_name,jiage,shuliang
				)VALUES(
					".$_SESSION["uId"].",".$_goodsId.",'".$goods["goods_name"]."',".$goods["jiage"].",1
				)
			";//用户注册的那个 .$_SESSION["uId"].",
			mysql_query($iQuery);
			mysql_free_result($_goodsList);
			//关闭SQL连接
			mysql_close();
		?>
        
            欢迎你加入购物车！！！ <a href="to_gouwuche.php?goodsId=<?php echo $_goodsId ?>">返回</a> | <a href="index.php">去购买</a>
  
        
    </div>
<?php include_once("footer.php");?>
