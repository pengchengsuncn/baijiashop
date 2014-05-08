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
   <?php       //前段接受的
	$_goods_typeID = $_POST["goods_typeID"];
	$_goods_type_name = $_POST["goods_type_name"];
	$_goods_type_type = $_POST["goods_type_type"];
	include_once("db_conn.php");
	$uQuery = "UPDATE goods_type SET type_name='".$_goods_type_name."',type_desc='".$_goods_type_type."' WHERE ID = ".$_goods_typeID."";
	                                  //注意表里面字段对应的值；与上面接收到的保持一致
	
	mysql_query($uQuery);
	mysql_close();
?>

修改成功！ <a href="edit_goods_type.php?goods_typeID=<?php echo $_goods_typeID ?>">返回</a> | <a href="index.php">首页</a>
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