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
    <br />
    <form action="save_goods.php" method="post">
        <table class="tbl" align="center">
            <tr>
                <td>商品名:</td>
                <td><input id="goods_name" name="goods_name" type="text"/></td>
                <td><label for="goods_name" class="error">请输入商品名称</label></td>
            </tr>
            <tr>                                 	
                <td>商品类型:</td>
                <td>
                    <select id="goods_type" name="goods_type">
                    	<?php
							include_once("db_conn.php");
							$sQuery = "SELECT * FROM goods_type";
							$typeList = mysql_query($sQuery);
							while($row = mysql_fetch_array($typeList)){
								echo "<option value =".$row["ID"].">".$row["type_name"]."</option>";
							}
							mysql_free_result($typeList);
							mysql_close();
						?>
                    </select>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><label for="jiage">价格:</label></td>
                <td><input id="jiage" name="jiage" type="text"/></td>
                <td><label for="jiage" class="error">请输入商品价格</label></td>
            </tr>
            <tr>
                <td>图片:</td>
                <td><input id="tupian"name="tupian" type="text"/></td>
                <td><label for="tupian" class="error">请输入商品图片</label></td>
            </tr>
            <tr>           	
                <td>库存数:</td>
                <td><input id="kucunshu" name="kucunshu" type="text"/></td>
                <td><label for="kucunshu" class="error">请输入商品库存数量</label></td>
            </tr>
            <tr>                                 	
                <td>是否上架:</td>
                <td>
                    <input id="shifoushangjia"name="shifoushangjia" type="radio" value="Y" checked="checked"/>是
                    <input id="shifoushangjia"name="shifoushangjia" type="radio" value="N"/>否
                </td>
            </tr>
            <tr>                                 	
                <td>是否新品:</td>
                <td>
                    <input id="shifouxinpin"name="shifouxinpin" type="radio" value="Y" checked="checked"/>是
                    <input id="shifouxinpin"name="shifouxinpin" type="radio" value="N"/>否
                </td>
            </tr>
            <tr>                                 	
                <td>是否推荐:</td>
                <td>
                    <input id="shifoutuijian"name="shifoutuijian" type="radio" value="Y" checked="checked"/>是
                    <input id="shifoutuijian"name="shifoutuijian" type="radio" value="N"/>否
                </td>
            </tr>
            <tr>                                 	
            	<td>标签:</td>
                <td>
                    <input id="biaoqian" name="biaoqian" type="checkbox" value="好用"/>好用
                    <input id="biaoqian"name="biaoqian" type="checkbox" value="不赖"/>不赖
                    <input id="biaoqian"name="biaoqian" type="checkbox" value="贵"/>贵
                    <input id="biaoqian"name="biaoqian" type="checkbox" value="便宜"/>便宜
                </td>
            </tr>
            <tr>
                <td>商品描述:</td>
                <td><textarea id="shangpinmiaoshu"name="shangpinmiaoshu" rows="5" ></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input class="tiny button secondary" type="submit" value="入库" />
                </td>
            </tr>
        </table> 
    </form>	
</div>
<?php include_once("footer_admin.php"); ?>
<!--验证前端用户的有效应输入-->
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