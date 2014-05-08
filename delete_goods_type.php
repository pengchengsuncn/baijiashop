 <?php
	//通过GET方式接收前页面?后的变量
	$_goods_typeId= $_GET["goods_typeId"];
	
	//连接数据库
	include_once("db_conn.php");
	
	//拼写删除SQL语句
	$dQuery = "DELETE FROM goods_type WHERE id = " .$_goods_typeId. "";
	
	//执行拼写好的SQL语句
	mysql_query($dQuery);
	
	//执行了之后删除连接（断开管道）
	mysql_close($conn);
?>
<script type="text/javascript">
	//删除了之后要提示“已删除成功！"
	alert("已删除成功！");
	//提示完之后跳转到显示图书的页面
	window.location.href = "show_goods_type.php";
</script>