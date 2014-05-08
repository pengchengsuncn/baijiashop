<?php include_once("header_admin.php");?>
<div id="nav" style="height:45px;">
	<div class="menu">
    	<ul class="breadcrumbs">
            <li><a href="user_center.php">会员中心</a></li>
            <li class="unavailable"><a href="#">商品类型</a></li>
            <li class="current"><a href="#">添加类型</a></li>
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
        <br />
        <form action="save_goods_type.php" method="post">
            <table class="tbl" align="center">
                <tr>
                    <td>类型名:</td>
                    <td><input id="type_name" name="type_name" type="text"/></td>
                     <td><label for="type_name" class="error">请输入类型名名称</label></td>
                </tr>
                <tr>
                    <td>类型描述:</td>
                    <td><textarea id="type_desc" name="type_desc" rows="5" ></textarea></td>
                     <td><label for="type_desc" class="error">请输入类型描述名称</label></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input class="tiny button secondary"type="submit" value="添加类型" />
                    </td>
                </tr>
            </table> 
        </form>	
    </div>
<?php include_once("footer_admin.php");?>
<script type="text/javascript">
	$( document ).ready(function() {
		$("form").validate({
			rules: {
				type_name: "required",
				type_desc: "required"
			},
			
			submitHandler: function(form) {
				form.submit();
			}
		});
	});
</script>
<!--messages: {
				type_name: "类型名不能为空!",
				type_desc: "类型描述不能为空！"
			},-->