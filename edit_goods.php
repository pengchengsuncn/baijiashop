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
	include_once("db_conn.php");
	$_goodsId = $_GET["goodsId"];
	$sQuery = "SELECT * FROM goods WHERE ID = ".$_goodsId."";
	$_goodsList = mysql_query($sQuery);
	$goods = mysql_fetch_array($_goodsList);	
 ?>
	<form action="update_goods.php" method="post">
    	<table class="tbl" align="center">
        	<tr>
            	<th>商品名</th>                      <!-- 必须echo $goods_type['type_name'] 数据库里面的字段-->
                <td><input type="text" name="goods_name" value="<?php echo $goods['goods_name'] ?>"></td>
                 <td><label for="goods_name" class="error">请输入商品名</label></td>
            </tr>        <!--label 点击数字鼠标的光标也在文本                                            框内 -->
            <tr>
            	<th>商品类型</th>
                <td>
                    <select id="goods_type" name="goods_type">
                    	<?php
							include_once("db_conn.php");
							$sQuery = "SELECT * FROM goods_type";
							$typeList = mysql_query($sQuery);
							while($row = mysql_fetch_array($typeList)){
								if($row["ID"] == $goods["goods_type"]){
									echo "<option value =".$row["ID"]." selected>".$row["type_name"]."</option>";
								}else{
									echo "<option value =".$row["ID"].">".$row["type_name"]."</option>";
								}
								
							}
							mysql_free_result($typeList);
							mysql_close();
						?>
                    </select>
                </td>
            </tr>
            <tr>
            <tr>
            	<th>价格</th>
                <td><input type="text" name="jiage" value="<?php echo $goods['jiage'] ?>"></td>
                <td><label for="jiage" class="error">请输入价格</label></td>
            </tr>
            <tr>
            	<th>图片</th>
                <td><input type="text" name="tupian" value="<?php echo $goods['tupian'] ?>"></td>
                <td><label for="tupian" class="error">请输入图片</label></td>
            </tr>
            <tr>
            	<th>库存数</th>
                <td><input type="text" name="kucunshu" value="<?php echo $goods['kucunshu'] ?>"></td>
                <td><label for="kucunshu" class="error">请输入库存数</label></td>
            </tr>
           <tr>                                 	
            	<th>标签:</th>
                <td>                    <!--复选框用 checkbox-->
                    <input id="biaoqian" name="biaoqian" type="checkbox" value="好用"/>好用
                    <input id="biaoqian"name="biaoqian" type="checkbox" value="不赖"/>不赖
                    <input id="biaoqian"name="biaoqian" type="checkbox" value="贵"/>贵
                    <input id="biaoqian"name="biaoqian" type="checkbox" value="便宜"/>便宜
                </td>
            </tr>

            <tr>
            	<th>是否上架</th>
                <td>                <!--用单选框 radio-->       <!--如果接受的数据库的值等于Y（就是数据库里面存入的），则默认checked，前端页面显示是-->                            
                	<input type="radio" name="shifoushangjia" <?php if($goods['shifoushangjia'] == "Y") echo "checked" ?> value="Y">是
                	<input type="radio" name="shifoushangjia" <?php if($goods['shifoushangjia'] == "N") echo "checked" ?> value="N">否
                </td>
            </tr>
            <tr>
            	<th>是否新品</th>
                <td>
                	<input type="radio" name="shifouxinpin" <?php if($goods['shifouxinpin'] == "Y") echo "checked" ?> value="Y">是
                	<input type="radio" name="shifouxinpin" <?php if($goods['shifouxinpin'] == "N") echo "checked" ?> value="N">否
                </td>
            </tr>
             <tr>
            	<th>是否推荐</th>
                <td>
                	<input type="radio" name="shifoutuijian" <?php if($goods['shifoutuijian'] == "Y") echo "checked" ?> value="Y">是
                	<input type="radio" name="shifoutuijian" <?php if($goods['shifoutuijian'] == "N") echo "checked" ?> value="N">否
                </td>
            </tr>
            <tr>
                <th>商品描述:</th><!--注意描述文字多的用<textarea></textarea>-->
                <td><textarea id="shangpinmiaoshu"name="shangpinmiaoshu" rows="5" ></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                	<input type="submit" class="tiny button secondary" value="修改" />
                    <input type="hidden" name="goodsId" value="<?php echo $goods['id'] ?>" />
                </td><!--submit 提交   hidden  隐藏  -->
            </tr>
        </table>
    </form>
    </div>        
</div>
<?php include_once("footer_admin.php");?>
<script type="text/javascript">
	$( document ).ready(function() {
		$("form").validate({
			rules: {
				goods_name: "required",
				jiage: {
					required:true,
					number:true	
				},
				tupian: "required",
				kucunshu: {
					required:true,
					digits:true	
				}
		},
			submitHandler: function(form) {
				form.submit();
			}
		});
	});
</script>

