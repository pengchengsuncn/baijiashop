<?php include_once("header.php"); ?>
<div id="right">
	<div class="row">
    	<div class="small-12 large-12 columns radius secondary label">
        	新品
        </div>
    </div>
	<div class="row">
    	<?php
			//连接数据库
			include_once("db_conn.php");
			//拼写SQL语句
			$sQuery = "SELECT * FROM goods a
				INNER JOIN goods_type b
				ON a.goods_type = b.ID
				WHERE a.shifouxinpin = 'Y'
				ORDER BY a.rukuriqi     
				limit 4";
			//执行SQL语句
			$goodsList = mysql_query($sQuery);
			//循环显示查询到的每一个商品
			while($row = mysql_fetch_array($goodsList)){
				echo '<div class="small-6 large-3 columns">';
				echo '<ul class="pricing-table">';
				echo '<li class="title">'.$row['goods_name'].'</li>';
				echo '<li class="img"><img src="'.$row['tupian'].'" /></li>';
				echo '<li class="price" style="font-size:14px;">$'.$row['jiage'].'</li>';
				echo '<li class="cta-button">';
				echo '<a class="tiny button" href="to_gouwuche.php?goodsId='.$row['id'].'">加入购物车</a>';
				echo '<a class="tiny button" href="#">立即购买</a>';
				echo '</li></ul></div>';
			}
			//从内存中释放查到的结果集
			mysql_free_result($goodsList);			
		?> 
    </div>
    <!--推荐商品-->
    <div class="row">
    	<div class="small-12 large-12 columns radius secondary label">
        	推荐商品
        </div>
    </div>
    <div class="row">
       <?php
			//连接数据库
			include_once("db_conn.php");
			//拼写SQL语句
			$sQuery = "SELECT * FROM goods a
				INNER JOIN goods_type b
				ON a.goods_type = b.ID
				WHERE a.shifoutuijian = 'Y'";
			//执行SQL语句
			$goodsList = mysql_query($sQuery);
			//循环显示查询到的每一个商品
			while($row = mysql_fetch_array($goodsList)){
				echo '<div class="small-6 large-3 columns">';
				echo '<ul class="pricing-table">';
				echo '<li class="title">'.$row['goods_name'].'</li>';
				echo '<li class="img"><img src="'.$row['tupian'].'" /></li>';
				echo '<li class="price" style="font-size:14px;">$'.$row['jiage'].'</li>';
				echo '<li class="cta-button">';
				echo '<a class="tiny button" href="#">加入购物车</a>';
				echo '<a class="tiny button" href="#">立即购买</a>';
				echo '</li></ul></div>';
			}
			//从内存中释放查到的结果集
			mysql_free_result($goodsList);
			//关闭SQL连接
			mysql_close();				
		?>
    </div>
</div>
<?php include_once("footer.php"); ?><!--引用一个文件-->

