<?php
include_once("header.php");
?>
<div id="right">
    <br />   <!--action 提交， method 传值-->
    <form action="save_user.php" method="post">
        <table class="tbl" align="center">
            <tr>
                <th colspan="2">感谢您注册成为百家商城的会员</th>
            </tr>
            <tr>
                <td>用户名:</td>
                <td><input id="user_name" name="user_name" type="text"/></td>
                <td><label for="user_name" class="error">请输入用户名</label></td>  
            </tr>    <!--label 它的作用就是点在数字上，input框里也有反映。-->
            <tr>
                <td>密码:</td>
                <td><input id="password" name="password" type="password"/></td>
                <td><label for="password" class="error">密码必须6到14位之间</label></td>
            </tr>
            <tr>           	
                <td>真实名:</td>
                <td><input id="real_name" name="real_name" type="text"/></td>
                <td><label for="real_name" class="error">请输入真实名</label></td>
            </tr>
            
           <tr>                                 	
                <td>姓别:</td>
                <td>                         <!--type="radio" 单选框，checked="checked"默认的值  -->
                    <input id="gender" name="gender" type="radio" value="男" checked="checked"/>男
                    <input id="gender" name="gender" type="radio" value="女"/>女
                </td>
            </tr>
            
            <tr>                   	
                <td>地址:</td>
                <td><input id="address" name="address" type="text"/></td>
                <td><label for="address" class="error">请输入地址</label></td>
            </tr>
            <tr>           	
                <td>QQ:</td>
                <td><input id="qq" name="qq" type="text"/></td>
                <td><label for="qq" class="error">请输入QQ</label></td>
            </tr>
            
            <tr>                                      	
                <td>邮箱:</td>
                <td><input id="email" name="email" type="text"/></td>
                <td><label for="email" class="error">Email格式不正确</label></td>
            </tr>
            
            <tr>                   	
                <td>电话:</td>
                <td><input id="telephone" name="telephone" type="text"/></td>
                <td><label for="telephone" class="error">请输入电话</label></td>
            </tr>
            <tr>                                      	
                <td>生日:</td>
                <td><input id="birthday" name="birthday" type="text"/></td>
                <td><label for="birthday" class="error">请输入生日</label></td>
            </tr>
             <tr>
                <td colspan="2" align="center">
                    <input class="tiny button secondary"type="submit" value="注册" />
                </td>
            </tr>
        </table> 
    </form>	
</div>
<?php include_once("footer.php"); ?>
<script type="text/javascript">
	$( document ).ready(function() {
		$("form").validate({
			rules: {                     //validate 为iuput框里控制的
				user_name: "required",
				password: {
					required: true,
					minlength: 6,
					maxlength: 14	
				},
				real_name: "required",
				gender: "required",
				address: "required",
				qq: "required",
				email: {
					required: true,
					email: true	
				},
				telephone: {
					required: true,
					digits: true,
					minlength: 7
				},
				birthday: {
					required: true,
					dateISO: true
				}
			},
			 //上面的通过的话 来执行里面的东西
			submitHandler: function(form) {
				form.submit();
			}
		});
	});
</script>