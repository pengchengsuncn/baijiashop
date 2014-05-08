<?php
include_once("header.php");

?>
	<div id="right">
	<?php
				//连接数据库
            	include_once("db_conn.php");
				//拼写SQL语句                             //每个用户登入的时候（uId）都会比变化 
				$sQuery = "SELECT * FROM gouwuche WHERE user = ".$_SESSION["uId"]."";
				//执行SQL语句
				$goodsList = mysql_query($sQuery);				
			?>
            <br/>
            <table class="tbl" align="center">
        	<tr>
            	                     
                <th>商品名</th>
                <th>价格</th>                      
                <th>数量</th> 
            </tr>
                <?php
   					//循环显示查询到的每一本书的所有信息
	  				while($row = mysql_fetch_array($goodsList)){
					   echo "<tr>";
					   echo "<td>".$row['goods_name']."</td>";
					   echo "<td>".$row['jiage']."</td>";
					   echo "<td>".$row['shuliang']."</td>";                    //购物车里面的任何一个字段都可以 （注意大小写的区分）
					   echo "<td><a href='delete_gouwuche.php?show_gouwucheId=".$row['id']."'>删除</a></td>";
					   echo "</tr>";
					}
					//从内存中释放查到的结果集
					mysql_free_result($goodsList);
					//关闭SQL连接
					mysql_close();
				?>
            </table>
</div>
<?php include_once("footer.php");?>
