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
        	<?php
				//连接数据库
            	include_once("db_conn.php");
				//拼写SQL语句
				$sQuery = "SELECT * FROM goods a INNER JOIN goods_type b ON a.goods_type = b.ID";
				//执行SQL语句
				$goodsList = mysql_query($sQuery);				
			?>
            <br />
            <table align="center">
            	<tr>
                    <th>商品名</th>              
                    <th>商品类型</th>
                    <th>价格</th>
                    <th>图片</th>            
                    <th>入库日期</th>
                    <th>库存数</th>
                    <th>操作</th>
                </tr>
                <?php
					//循环显示查询到的每一本书
					while($row = mysql_fetch_array($goodsList)){
					   echo "<tr>";
					   echo "<td>".$row['goods_name']."</td>";
					   echo "<td>".$row['type_name']."</td>";
					   echo "<td>".$row['jiage']."</td>";
					   echo "<td>".$row['tupian']."</td>";
					   echo "<td>".$row['rukuriqi']."</td>";
					   echo "<td>".$row['kucunshu']."</td>";
					   echo "<td><a href='edit_goods.php?goodsId=".$row['id']."'>修改</a>|<a href='delete_goods.php?goodsId=".$row['id']."'>删除</a></td>";
					   echo "</tr>";
					}
					//从内存中释放查到的结果集
					mysql_free_result($goodsList);
					//关闭SQL连接
					mysql_close();
				?>
            </table>
        </div>        
    </div>
<?php include_once("footer_admin.php"); ?>
<script type="text/javascript">
	$( document ).ready(function() {
		$("form").validate({
			rules: {
				goods_name: "required",
				jiage: "required",
				tupian: "required",
				kucunshu: "required"
			},
			submitHandler: function(form) {
				form.submit();
			}
		});
	});<!--validate 使生效；证实；确认；验证-->
</script>