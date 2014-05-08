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
        $_goods_typeID = $_GET["goods_typeID"];
        include_once("db_conn.php");
        $sQuery = "SELECT * FROM goods_type WHERE ID = ".$_goods_typeID."";
        $_goods_typeList = mysql_query($sQuery);
        $goods_type = mysql_fetch_array($_goods_typeList);	
    ?>
	<form action="update_goods_type.php" method="post">
    	<table border="1" align="center">
        	<tr>
            	<th>类型名</th>                <!--必须 echo $goods_type['type_name'] 数据库里面的字段，对应-->
                <td><input type="text" name="goods_type_name" value="<?php echo $goods_type['type_name'] ?>"></td>
            </tr>
            <tr>
                <td>类型描述:</td>
                <td><textarea id="goods_type_type"name="goods_type_type" rows="5" ><?php echo $goods_type['type_desc'] ?></textarea></td>
            </tr>
                <td colspan="2" align="center">  <!--引用的一个类，修改按钮看着美观-->
                	<input type="submit" class="tiny button secondary" value="修改" />
                    <input type="hidden" name="goods_typeID" value="<?php echo $goods_type['ID'] ?>" />
                </td>            <!--submit 提交 hidden 隐藏-->
            </tr>
        </table>
    </form>
<?php
	//从内存中释放查到的结果集
	mysql_free_result($_goods_typeList);
	//关闭SQL连接
	mysql_close();
?>
       </div>        
    </div>
<?php include_once("footer_admin.php"); ?>
<script type="text/javascript">
	$( document ).ready(function() {
		$("form").validate({  //验证
			rules: {//规则 
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