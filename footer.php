</div>
<div id="footer">
	<h1 align="center"></h1>
</div>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script><!--连接同一个文件夹-->
<script type="text/javascript" src="style/foundation5/js/foundation.min.js"></script>
<script type="text/javascript" src="js/colorbox-master/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="js/jquery.validate-1.9.0.min.js"></script>
<script>
	//使用 Foundation 根基；基础；根据；创建；基金
	$(document).foundation();
	//使用 jQuery  文档加载完后
	$( document ).ready(function() {
		$("#loginLink").click(function(){  // loginLink是上面一个id规定的值，点击执行
			$.colorbox({href:"login.php"});
		});  // colorbox是弹出一个弹窗
		
		//退出，销毁SESSION
		$("#logoutLink").click(function(){
			$.post( "logout.php", function(data){//请求logout.php这个页面，可以传值 ，也可以不传值，但是必须写(function()
				window.location.href="index.php"; 
			});//弹出首页
		});
	});
</script>
</body>
</html>