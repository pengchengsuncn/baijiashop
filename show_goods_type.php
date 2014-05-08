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
				$sQuery = "SELECT * FROM goods_type";
				//执行SQL语句
				$goods_typeList = mysql_query($sQuery);				
			?>
            <br />
            <table border="1" align="center">
            	<tr>
                    <th>类型名</th>              
                    <th>类型描述</th>
                    <th>操作</th>
                </tr>
                <?php
					//循环显示查询到的每一本书
					while($row = mysql_fetch_array($goods_typeList)){
					   echo "<tr>";
					   echo "<td>".$row['type_name']."</td>";
					   echo "<td>".$row['type_desc']."</td>";//注意接收数据库的id 大小写分清楚
					   echo "<td><a href='edit_goods_type.php?goods_typeID=".$row['ID']."'>修改</a>|<a href='delete_goods_type.php?goods_typeId=".$row['ID']."'>删除</a></td>";
					   echo "</tr>";
					}
					//从内存中释放查到的结果集
					mysql_free_result($goods_typeList);
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
	});
</script>